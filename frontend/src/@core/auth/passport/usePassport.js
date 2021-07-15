import passportService from './passportService'

export default function usePassport(axiosIns, passportOverrideConfig) {
  const passport = new passportService(axiosIns, passportOverrideConfig)

  return {
    passport,
  }
}
