import userConfig from './configs/user'
import userService from './services/userService'
import axios from 'axios'

const  passport = new userService(axios, userConfig)
export default passport

