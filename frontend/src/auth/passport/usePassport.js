import usePassport from '@/@core/auth/passport/usePassport'
import axios from 'axios'

const { passport } = usePassport(axios, {})
export default passport