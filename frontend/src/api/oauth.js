import oauthConfig from './configs/oauth'
import oauthService from './services/oauthService'
import axios from 'axios'

const  passport = new oauthService(axios, oauthConfig)
export default passport