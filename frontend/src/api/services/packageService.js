
import passportDefaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class PackageService {
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
  }
  getToken() {
    return localStorage.getItem(this.passportConfig.storageTokenKeyName)
  }
  importHeaders(...args) {
    return this.axiosIns.post(this.passportConfig.importHeaderEndpoint, ...args, { headers: { 'Content-type': 'multipart/form-data' }})
  }
  importVerify(...args) {
    return this.axiosIns.post(this.passportConfig.importVerifyEndpoint, ...args, { headers: { 'Content-type': 'application/json' }})
  }
  packageImport(...args) {
    return this.axiosIns.post(this.passportConfig.importEndpoint, ...args, { headers: { 'Content-type': 'application/json' }})
  }
  getPackageTypes(...args) {
    return this.axiosIns.get(this.passportConfig.packageTypesEndpoint, ...args)
  }
  getUserPackages(...args) {
    return this.axiosIns.get(this.passportConfig.packagesEndpoint, ...args)
  }
  getPackage(...args) {
    return this.axiosIns.get(this.passportConfig.packageEndpoint, ...args)
  }
  createPackage(...args) {
    return this.axiosIns.post(this.passportConfig.packageEndpoint, ...args)
  }
  updatePackage(...args) {
    return this.axiosIns.put(this.passportConfig.packageEndpoint, ...args)
  }
  deletePackage(...args) {
    return this.axiosIns.delete(this.passportConfig.packageEndpoint, ...args)
  }
  deletePackages(...args) {
    return this.axiosIns.delete(this.passportConfig.packagesEndpoint, ...args)
  }
  updatePackageStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.packageStatusEndpoint, ...args)
  }
  updatePackagesStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.packagesStatusEndpoint, ...args)
  }
}
