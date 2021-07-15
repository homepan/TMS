import billingConfig from './configs/billing'
import billingService from './services/billingService'
import axios from 'axios'

const  passport = new billingService(axios, billingConfig)
export default passport

