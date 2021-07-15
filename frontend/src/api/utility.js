import utilityConfig from './configs/utility'
import utilityService from './services/utilityService'
import axios from 'axios'

const  passport = new utilityService(axios, utilityConfig)
export default passport
