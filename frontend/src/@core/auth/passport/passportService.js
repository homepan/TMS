import passportDefaultconfig from './passportDefaultConfig'

export default class PassportService {
  // Will be used by this service for making API calls
  axiosIns = null

  // passportConfig <= Will be used by this service
  passportConfig = { ...passportDefaultconfig }

  // For Refreshing Token
  isAlreadyFetchingAccessToken = false

  // For Refreshing Token
  subscribers = []

  constructor(axiosIns, passportOverrideConfig) {
    this.axiosIns = axiosIns
    this.passportConfig = { ...this.passportConfig, ...passportOverrideConfig }

    // Request Interceptor
    this.axiosIns.interceptors.request.use(
      config => {
        // Get token from localStorage
        const accessToken = this.getToken()

        // If token is present add it to request's Authorization Header
        if (accessToken) {
          // eslint-disable-next-line no-param-reassign
          config.headers.Authorization = `${this.passportConfig.tokenType} ${accessToken}`
        }
        return config
      },
      error => Promise.reject(error),
    )

    // Add request/response interceptor
    this.axiosIns.interceptors.response.use(
      response => response,
      error => {
        const { config, response } = error
        const originalRequest = config
        if (response && response.status === 401) {
          if (!this.isAlreadyFetchingAccessToken) {
            this.isAlreadyFetchingAccessToken = true
            this.refreshToken().then(r => {
              this.isAlreadyFetchingAccessToken = false
              // Update accessToken in localStorage
              this.setToken(r.data.access_token)
              this.setRefreshToken(r.data.refresh_token)
              this.onAccessTokenFetched(r.data.access_token)
            })
          } else {
            localStorage.removeItem('userData')
            localStorage.removeItem(this.passportConfig.storageTokenKeyName)
            localStorage.removeItem(this.passportConfig.storageRefreshTokenKeyName)
            location.reload()
          }
          const retryOriginalRequest = new Promise(resolve => {
            this.addSubscriber(accessToken => {
              // Make sure to assign accessToken according to your response.
              // Check: https://pixinvent.ticksy.com/ticket/2413870
              // Change Authorization header
              originalRequest.headers.Authorization = `${this.passportConfig.tokenType} ${accessToken}`
              resolve(this.axiosIns(originalRequest))
            })
          })
          return retryOriginalRequest
        }
        return Promise.reject(error)
      },
    )
  }
  setClientId(value) {
    localStorage.setItem(this.passportConfig.storageClientIdName, value)
  }
  setClientSecret(value) {
    localStorage.setItem(this.passportConfig.storageClientSecretName, value)
  }
  setToken(value) {
    localStorage.setItem(this.passportConfig.storageTokenKeyName, value)
  }
  setRefreshToken(value) {
    localStorage.setItem(this.passportConfig.storageRefreshTokenKeyName, value)
  }
  onAccessTokenFetched(accessToken) {
    this.subscribers = this.subscribers.filter(callback => callback(accessToken))
  }
  addSubscriber(callback) {
    this.subscribers.push(callback)
  }
  getClientId() {
    return localStorage.getItem(this.passportConfig.storageClientIdName)
  }
  getClientSecret() {
    return localStorage.getItem(this.passportConfig.storageClientSecretName)
  }
  getToken() {
    return localStorage.getItem(this.passportConfig.storageTokenKeyName)
  }
  getRefreshToken() {
    return localStorage.getItem(this.passportConfig.storageRefreshTokenKeyName)
  }
  login(...args) {
    return this.axiosIns.post(this.passportConfig.loginEndpoint, ...args)
  }
  logout() {
    let userData = localStorage.getItem('userData') ? JSON.parse(localStorage.getItem('userData')) : null
    if(userData) {
      return this.axiosIns.post(this.passportConfig.logoutEndpoint, {
        token: btoa(userData.id)
      })
    }
  }
  register(...args) {
    return this.axiosIns.post(this.passportConfig.registerEndpoint, ...args)
  }
  refreshToken() {
    return this.axiosIns.post(this.passportConfig.refreshEndpoint, {
      grant_type: 'refresh_token',
      refresh_token: this.getRefreshToken(),
      client_id: this.getClientId(),
      client_secret: this.getClientSecret(),
    })
  }
  getAccount(...args) {
    return this.axiosIns.get(this.passportConfig.accountEndpoint, ...args)
  }
}
