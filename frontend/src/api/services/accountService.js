
import passportDefaultconfig from '@/@core/auth/passport/passportDefaultConfig'

export default class AccountService {
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
  getAccount(...args) {
    return this.axiosIns.get(this.passportConfig.accountEndpoint, ...args)
  }
  createAccount(...args) {
    return this.axiosIns.post(this.passportConfig.accountEndpoint, ...args)
  }
  updateAccount(...args) {
    return this.axiosIns.put(this.passportConfig.accountEndpoint, ...args)
  }
  deleteAccount(...args) {
    return this.axiosIns.put(this.passportConfig.accountEndpoint, ...args)
  }
  updateAutoRenew(...args) {
    return this.axiosIns.patch(this.passportConfig.accountAutoRenewEndpoint, ...args)
  }
  getPlans(...args) {
    return this.axiosIns.get(this.passportConfig.plansEndpoint, ...args)
  }
  getPlan(...args) {
    return this.axiosIns.get(this.passportConfig.planEndpoint, ...args)
  }
  createPlan(...args) {
    return this.axiosIns.post(this.passportConfig.planEndpoint, ...args)
  }
  updatePlan(...args) {
    return this.axiosIns.put(this.passportConfig.planEndpoint, ...args)
  }
  deletePlan(...args) {
    return this.axiosIns.put(this.passportConfig.planEndpoint, ...args)
  }
  initAccountPlan(...args) {
    return this.axiosIns.get(this.passportConfig.accountPlanInitEndpoint, ...args)
  }
  getAccountPlan(...args) {
    return this.axiosIns.get(this.passportConfig.accountPlanEndpoint, ...args)
  }
  getCurrentAccountPlan(...args) {
    return this.axiosIns.get(this.passportConfig.currentAccountPlanEndpoint, ...args)
  }
  getSubscriptionStats(...args) {
    return this.axiosIns.get(this.passportConfig.accountPlanStatsEndpoint, ...args)
  }
  getTopupParams(...args) {
    return this.axiosIns.get(this.passportConfig.topupParamsEndpoint, ...args)
  }
  getTopupHistory(...args) {
    return this.axiosIns.get(this.passportConfig.topupHistoryEndpoint, ...args)
  }
  getBranches(...args) {
    return this.axiosIns.get(this.passportConfig.branchesEndpoint, ...args)
  }
  getBranch(...args) {
    return this.axiosIns.get(this.passportConfig.branchEndpoint, ...args)
  }
  createBranch(...args) {
    return this.axiosIns.post(this.passportConfig.branchEndpoint, ...args)
  }
  updateBranch(...args) {
    return this.axiosIns.put(this.passportConfig.branchEndpoint, ...args)
  }
  deleteBranch(...args) {
    return this.axiosIns.put(this.passportConfig.branchEndpoint, ...args)
  }
  toggleBranchStatus(...args) {
    return this.axiosIns.patch(this.passportConfig.toggleBranchStatusEndpoint, ...args)
  }
  sendVerificationEmail(...args) {
    return this.axiosIns.post(this.passportConfig.accountVerificationEndpoint, ...args)
  }
}
