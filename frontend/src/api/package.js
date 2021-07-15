import packageConfig from './configs/package'
import packageService from './services/packageService'
import axios from 'axios'

const  passport = new packageService(axios, packageConfig)
export default passport

