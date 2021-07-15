
import passportDefaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class StoreService {
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

  getStores(...args) {
    return this.axiosIns.get(this.passportConfig.storesEndpoint, ...args)
  }

  getEbayAccount(...args) {
    return this.axiosIns.get(this.passportConfig.ebayEndpoint, ...args)
  }

  createEbayStore(...args) {
    return this.axiosIns.post(this.passportConfig.ebayEndpoint, ...args)
  }

  getShopifyAccount(...args) {
    return this.axiosIns.get(this.passportConfig.shopifyEndpoint, ...args)
  }

  cartOrderInit(...args) {
    return this.axiosIns.get(this.passportConfig.cartOrderInitEndpoint, ...args)
  }

  getCartOrders(...args) {
    return this.axiosIns.get(this.passportConfig.cartOrdersEndpoint, ...args)
  }

  updateOrder(...args) {
    return this.axiosIns.put(this.passportConfig.cartOrderEndpoint, ...args)
  }

}
