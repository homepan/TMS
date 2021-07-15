import shipmentConfig from './configs/shipment'
import shipmentService from './services/shipmentService'
import axios from 'axios'

const  passport = new shipmentService(axios, shipmentConfig)
export default passport

