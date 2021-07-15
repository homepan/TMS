
import passportDefaultconfig from '@/@core/auth/passport/passportDefaultConfig'
import { Courier } from "@/libs/models/shipment"
import { objectKeysToArray } from "@/libs/utility/utility"
import { PackageType } from '@/libs/models/package'

export default class ShippingService {
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
  getQuote(...args) {
    return this.axiosIns.get(this.passportConfig.courierQuoteEndpoint, ...args)
  }
  getSampleQuote(...args) {
    return this.axiosIns.get(this.passportConfig.sampleCourierQuoteEndpoint, ...args)
  }
  getServiceInfo(...args) {
    return this.axiosIns.get(this.passportConfig.serviceInfoEndpoint, ...args)
  }
  getServiceSurcharge(...args) {
    return this.axiosIns.get(this.passportConfig.serviceChargeEndpoint, ...args)
  }
  getDeliveryDate(...args) {
    return this.axiosIns.get(this.passportConfig.deliveryDateEndpoint, ...args)
  }
  searchLocation(...args) {
    return this.axiosIns.get(this.passportConfig.searchLocationEndpoint, ...args)
  }
  getInterStates(...args) {
    return this.axiosIns.get(this.passportConfig.interStateEndpoint, ...args)
  }
  verifyCollectionDate(...args) {
    return this.axiosIns.get(this.passportConfig.verifyCollectionDateEndpoint, ...args)
  }
  getBusinessDates(...args) {
    return this.axiosIns.get(this.passportConfig.businessDatesEndpoint, ...args)
  }
  getShippingDates(...args) {
    return this.axiosIns.get(this.passportConfig.shippingDatesEndpoint, ...args)
  }
  exportCsv(...args) {
    return this.axiosIns.post(this.passportConfig.exportAddressQuotesEndpoint, ...args)
  }
  serviceInit(...args) {
    this.axiosIns.get(this.passportConfig.serviceInitEndpoint, ...args)
    .then(response => {
      if(response.data.error!==undefined) {
        alert(response.data.error.message)
      } else {
        let countries = []
        response.data.countries.forEach( record => {
          countries.push({ code: record.code, name: record.name })
        })
        let couriers = []
        let result = objectKeysToArray(response.data.couriers)
        if (result.length > 0) {
          result.forEach((record) => {
            couriers.push(new Courier(record))
          })
        }
        let packageTypes = []
        response.data.packageTypes.forEach( record => {
          packageTypes.push(new PackageType(record))
        })
        localStorage.setItem('countries', JSON.stringify(countries))
        localStorage.setItem('couriers', JSON.stringify(couriers))
        localStorage.setItem('packageTypes', JSON.stringify(packageTypes))
      }
    })
    .catch(error => {
      alert(error.message)
    })
  }
  shippingInit(...args) {
    return this.axiosIns.get(this.passportConfig.shippingInitEndpoint, ...args)
  }
  getCountries(...args) {
    this.axiosIns.get(this.passportConfig.countriesEndpoint, ...args)
    .then(response => {
      if(response.data.error!==undefined) {
        alert(response.data.error.message)
      } else {
        let countries = []
        response.data.countries.forEach( record => {
          countries.push({ code: record.code, name: record.name })
        })
        localStorage.setItem('countries', JSON.stringify(countries))
      }
    })
    .catch(error => {
      alert(error.message)
    })
  }
  getPackageTypes(...args) {
    this.axiosIns.get(this.passportConfig.packageTypesEndpoint, ...args)
    .then(response => {
      if(response.data.error!==undefined) {
        alert(response.data.error.message)
      } else {
        localStorage.setItem('packageTypes', JSON.stringify(response.data.packageTypes))
      }
    })
    .catch(error => {
      alert(error.message)
    })
  }
}
