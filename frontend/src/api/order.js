import orderConfig from './configs/order'
import orderService from './services/orderService'
import axios from 'axios'

const  passport = new orderService(axios, orderConfig)
export default passport

