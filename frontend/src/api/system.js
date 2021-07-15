import systemConfig from './configs/system'
import systemService from './services/systemService'
import axios from 'axios'

const  passport = new systemService(axios, systemConfig)
export default passport

