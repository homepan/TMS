import accountConfig from './configs/account'
import accountService from './services/accountService'
import axios from 'axios'

const  passport = new accountService(axios, accountConfig)
export default passport

