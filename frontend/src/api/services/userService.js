
import defaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class UserService {
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

  login(...args) {
    return this.axiosIns.post(this.config.loginEndpoint, ...args)
  }

  register(...args) {
    return this.axiosIns.post(this.config.registerEndpoint, ...args)
  }

  getUserProfile(...args) {
    return this.axiosIns.get(this.config.userProfileEndpoint, ...args)
  }

  fetchUserProfile(userId) {
    return this.axiosIns.get(this.config.userProfileEndpoint, { params: { token: btoa(userId)}})
  }

  // getUsers(...args) {
  //   return this.axiosIns.get(this.config.usersEndpoint, ...args)
  // }

  // getUser(...args) {
  //   return this.axiosIns.get(this.config.userEndpoint, ...args)
  // }

  // getUserByToken(...args) {
  //   return this.axiosIns.get(this.config.userTokenEndpoint, ...args)
  // }

  // createUser(...args) {
  //   return this.axiosIns.post(this.config.userEndpoint, ...args)
  // }

  // updateUser(...args) {
  //   return this.axiosIns.put(this.config.userEndpoint, ...args)
  // }

  // deleteUser(...args) {
  //   return this.axiosIns.delete(this.config.userEndpoint, ...args)
  // }

  // updateUserParent(...args) {
  //   return this.axiosIns.put(this.config.userParentEndpoint, ...args)
  // }

  // toggleUserStatus(...args) {
  //   return this.axiosIns.patch(this.config.toggleUserStatusEndpoint, ...args)
  // }

  // updateUserAddress(...args) {
  //   return this.axiosIns.put(this.config.userAddressEndpoint, ...args)
  // }

  // updateUserPassword(...args) {
  //   return this.axiosIns.put(this.config.userPasswordEndpoint, ...args)
  // }

  

  // updateUserProfile(...args) {
  //   return this.axiosIns.put(this.config.userProfileEndpoint, ...args)
  // }

  // getUserPreferences(...args) {
  //   return this.axiosIns.get(this.config.userPreferencesEndpoint, ...args)
  // }

  // updateCourierPreferences(...args) {
  //   return this.axiosIns.put(this.config.courierPreferencesEndpoint, ...args)
  // }

  // setDefaultLocation(...args) {
  //   return this.axiosIns.put(this.config.locationPreferencesEndpoint, ...args)
  // }

  // updateLabelPreferences(...args) {
  //   return this.axiosIns.put(this.config.labelPreferencesEndpoint, ...args)
  // }

  // getAddress(...args) {
  //   return this.axiosIns.get(this.config.userAddressEndpoint, ...args)
  // }

  // createAddress(...args) {
  //   return this.axiosIns.post(this.config.userAddressEndpoint, ...args)
  // }

  // updateAddress(...args) {
  //   return this.axiosIns.put(this.config.userAddressEndpoint, ...args)
  // }

  // searchUser(...args) {
  //   return this.axiosIns.get(this.config.userSearchEndpoint, ...args)
  // }

  // sendVerificationEmail(...args) {
  //   return this.axiosIns.post(this.config.userEmailVerificationEndpoint, ...args)
  // }

  // imitateUser(...args) {
  //   return this.axiosIns.post(this.config.imitateUserEndpoint, ...args)
  // }

  // imitateUserReset(...args) {
  //   return this.axiosIns.post(this.config.imitateUserResetEndpoint, ...args)
  // }

  
}
