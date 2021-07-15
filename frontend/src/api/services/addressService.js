
import passportDefaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class AddressService {
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
  getAddressBook(...args) {
    return this.axiosIns.get(this.passportConfig.addressesEndpoint, ...args)
  }
  selectAddresses(...args) {
    return this.axiosIns.get(this.passportConfig.selectAddressesEndpoint, ...args)
  }
  getAddress(...args) {
    return this.axiosIns.get(this.passportConfig.addressEndpoint, ...args)
  }
  createAddress(...args) {
    return this.axiosIns.post(this.passportConfig.addressEndpoint, ...args)
  }
  saveAddresses(...args) {
    return this.axiosIns.post(this.passportConfig.addressesEndpoint, ...args)
  }
  updateAddress(...args) {
    return this.axiosIns.put(this.passportConfig.addressEndpoint, ...args)
  }
  deleteAddress(...args) {
    return this.axiosIns.delete(this.passportConfig.addressEndpoint, ...args)
  }
  updateAddressStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.addressStatusEndpoint, ...args)
  }
  updateAddressesStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.addressesStatusEndpoint, ...args)
  }
  updateAddressesGroup(...args) {
    return this.axiosIns.patch(this.passportConfig.addressesGroupEndpoint, ...args)
  }
  deleteAddresses(...args) {
    return this.axiosIns.delete(this.passportConfig.addressesEndpoint, ...args)
  }
  getAddressGroup(...args) {
    return this.axiosIns.get(this.passportConfig.addressGroupEndpoint, ...args)
  }
  getAddressGroups(...args) {
    return this.axiosIns.get(this.passportConfig.addressGroupsEndpoint, ...args)
  }
  createGroup(...args) {
    return this.axiosIns.post(this.passportConfig.addressGroupEndpoint, ...args)
  }
  updateGroup(...args) {
    return this.axiosIns.put(this.passportConfig.addressGroupEndpoint, ...args)
  }
  deleteGroup(...args) {
    return this.axiosIns.delete(this.passportConfig.addressGroupEndpoint, ...args)
  }
  deleteGroups(...args) {
    return this.axiosIns.delete(this.passportConfig.addressGroupsEndpoint, ...args)
  }
  updateGroupStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.addressGroupEndpoint, ...args)
  }
  updateGroupsStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.addressGroupsEndpoint, ...args)
  }
  getGroupAddresses(...args) {
    return this.axiosIns.get(this.passportConfig.groupAddressesEndpoint, ...args)
  }
  addressImportHeaders(...args) {
    return this.axiosIns.post(this.passportConfig.addressImportHeaderEndpoint, ...args, { headers: { 'Content-type': 'multipart/form-data' }})
  }
  addressImportVerify(...args) {
    return this.axiosIns.post(this.passportConfig.addressImportVerifyEndpoint, ...args, { headers: { 'Content-type': 'application/json' }})
  }
  addressImport(...args) {
    return this.axiosIns.post(this.passportConfig.addressImportEndpoint, ...args, { headers: { 'Content-type': 'application/json' }})
  }
  addressCleanUp(...args) {
    return this.axiosIns.post(this.passportConfig.addressCleanUpEndpoint, ...args, { headers: { 'Content-type': 'application/json' }})
  }
  searchContact(...args) {
    return this.axiosIns.get(this.passportConfig.contactSearchEndpoint, ...args)
  }
  validateLocation(...args) {
    return this.axiosIns.get(this.passportConfig.validateLocationEndpoint, ...args)
  }
}
