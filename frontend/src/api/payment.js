import paymentConfig from './configs/payment'
import paymentService from './services/paymentService'
import axios from 'axios'

const  passport = new paymentService(axios, paymentConfig)
export default passport

