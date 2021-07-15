import addressConfig from './configs/address'
import addressService from './services/addressService'
import axios from 'axios'

const  passport = new addressService(axios, addressConfig)
export default passport

