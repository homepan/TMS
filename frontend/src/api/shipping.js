import shippingConfig from './configs/shipping'
import shippingService from './services/shippingService'
import axios from 'axios'

const  passport = new shippingService(axios, shippingConfig)
export default passport

