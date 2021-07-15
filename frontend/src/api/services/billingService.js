
import passportDefaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class BillingService {
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

  getInvoice(...args) {
    return this.axiosIns.get(this.passportConfig.invoiceEndpoint, ...args)
  }

  getInvoices(...args) {
    return this.axiosIns.get(this.passportConfig.invoicesEndpoint, ...args)
  }

  getInvoiceTypes() {
    return this.axiosIns.get(this.passportConfig.invoiceTypesEndpoint)
  }

  searchInvoice(...args) {
    return this.axiosIns.get(this.passportConfig.invoiceSearchEndpoint, ...args)
  }

  getTopUp(...args) {
    return this.axiosIns.get(this.passportConfig.topupEndpoint, ...args)
  }

  getPaymentOptions(...args) {
    return this.axiosIns.get(this.passportConfig.paymentOptionsEndpoint, ...args)
  }
}
