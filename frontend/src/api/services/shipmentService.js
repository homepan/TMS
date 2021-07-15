
import passportDefaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class ShipmentService {
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
  getCouriers(...args) {
    return this.axiosIns.get(this.passportConfig.couriersEndpoint, ...args)
  }
  getCourierStats(...args) {
    return this.axiosIns.get(this.passportConfig.courierStatsEndpoint, ...args)
  }
  getShipment(...args) {
    return this.axiosIns.get(this.passportConfig.shipmentEndpoint, ...args)
  }
  getShipments(...args) {
    return this.axiosIns.get(this.passportConfig.shipmentsEndpoint, ...args)
  }
  searchShipments(...args) {
    return this.axiosIns.get(this.passportConfig.shipmentSearchEndpoint, ...args)
  }
  getPreShipment(...args) {
    return this.axiosIns.get(this.passportConfig.preShipmentEndpoint, ...args)
  }
  getShipmentData(...args) {
    return this.axiosIns.get(this.passportConfig.shipmentDataEndpoint, ...args)
  }
  getLocations(...args) {
    return this.axiosIns.get(this.passportConfig.dispatchLocationsEndpoint, ...args)
  }
  getLocation(...args) {
    return this.axiosIns.get(this.passportConfig.dispatchLocationEndpoint, ...args)
  }
  createLocation(...args) {
    return this.axiosIns.post(this.passportConfig.dispatchLocationEndpoint, ...args)
  }
  updateLocation(...args) {
    return this.axiosIns.put(this.passportConfig.dispatchLocationEndpoint, ...args)
  }
  deleteLocation(...args) {
    return this.axiosIns.delete(this.passportConfig.dispatchLocationEndpoint, ...args)
  }
  deleteLocations(...args) {
    return this.axiosIns.delete(this.passportConfig.dispatchLocationsEndpoint, ...args)
  }
  updateLocationStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.dispatchLocationStatusEndpoint, ...args)
  }
  updateLocationsStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.dispatchLocationsStatusEndpoint, ...args)
  }
  updateLocationDefault(...args) {
    return this.axiosIns.patch(this.passportConfig.dispatchLocationDefaultEndpoint, ...args)
  }
  // Packaging
  getPackageTypes(...args) {
    return this.axiosIns.get(this.passportConfig.packageTypeEndpoint, ...args)
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
  updatePackageStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.packageStatusEndpoint, ...args)
  }
  
}
