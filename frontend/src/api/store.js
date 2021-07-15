import storeConfig from './configs/store'
import storeService from './services/storeService'
import axios from 'axios'

const  passport = new storeService(axios, storeConfig)
export default passport