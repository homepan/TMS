
import passportDefaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class OrderService {
  // Will be used by this service for making API calls
  axiosIns = null
  // CancelToken = null
  // source = null
  // passportConfig <= Will be used by this service
  passportConfig = { ...passportDefaultconfig }
  // For Refreshing Token
  isAlreadyFetchingAccessToken = false
  // For Refreshing Token
  subscribers = []
  constructor(axiosIns, passportOverrideConfig) {
    this.axiosIns = axiosIns
    // CancelToken = this.axiosIns.CancelToken
    // source = CancelToken.source()
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
  createPreOrder(...args) {
    return this.axiosIns.post(this.passportConfig.preOrderEndpoint, ...args)
  }
  createCourierShipment(...args) {
    return this.axiosIns.post(this.passportConfig.courierShipmentEndpoint, ...args)
  }
  getOrder(...args) {
    return this.axiosIns.get(this.passportConfig.orderEndpoint, ...args)
  }
  getOrderShipments(...args) {
    return this.axiosIns.get(this.passportConfig.orderShipmentsEndpoint, ...args)
  }
  getOrderShipment(...args) {
    return this.axiosIns.get(this.passportConfig.orderShipmentEndpoint, ...args)
  }
  getOrderPreShipments(...args) {
    return this.axiosIns.get(this.passportConfig.orderPreShipmentsEndpoint, ...args)
  }
  getBookingParams(...args) {
    return this.axiosIns.get(this.passportConfig.bookingParamsEndpoint, ...args)
  }
  getCourierRequirement(...args) {
    return this.axiosIns.get(this.passportConfig.courierRequirementEndpoint, ...args)
  }
  getBookingDetails(...args) {
    return this.axiosIns.get(this.passportConfig.bookingEndpoint, ...args)
  }
  createBooking(...args) {
    return this.axiosIns.post(this.passportConfig.bookingEndpoint, ...args)
  }
  shipmentRefund(...args) {
    return this.axiosIns.post(this.passportConfig.shipmentRefundEndpoint, ...args)
  }
  shipmentRefundTopup(...args) {
    return this.axiosIns.post(this.passportConfig.shipmentRefundTopupEndpoint, ...args)
  }
  createOrderRefund(...args) {
    return this.axiosIns.post(this.passportConfig.orderRefundEndpoint, ...args)
  }
  orderRefundTopup(...args) {
    return this.axiosIns.post(this.passportConfig.orderRefundTopupEndpoint, ...args)
  }
}
