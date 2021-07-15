
import defaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class UtilityService {
  // Will be used by this service for making API calls
  axiosIns = null

  // defaultConfig <= Will be used by this service
  defaultConfig = { ...defaultconfig }

  // For Refreshing Token
  isAlreadyFetchingAccessToken = false

  // For Refreshing Token
  subscribers = []

  constructor(axiosIns, overrideConfig) {
    this.axiosIns = axiosIns
    this.config = { ...this.defaultConfig, ...overrideConfig }

    // Request Interceptor
    this.axiosIns.interceptors.request.use(
      config => {
        // Get token from localStorage
        const accessToken = this.getToken()

        // If token is present add it to request's Authorization Header
        if (accessToken) {
          // eslint-disable-next-line no-param-reassign
          config.headers.Authorization = `${this.config.tokenType} ${accessToken}`
        }
        return config
      },
      error => Promise.reject(error),
    )
  }

  getToken() {
    return localStorage.getItem(this.config.storageTokenKeyName)
  }

  getCountryList() {
    return this.axiosIns.get(this.config.countryListEndpoint)
  }

  searchLocation(...args) {
    return this.axiosIns.get(this.config.searchLocationEndpoint, ...args)
  }


  
}
