<template>
  <div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">

      <!-- Login v1 -->
      <b-card class="mb-0">
        <b-link class="brand-logo">
          <vuexy-logo />
          <h2 class="brand-text text-primary ml-1">
            Dispatcher
          </h2>
        </b-link>

        <b-card-title class="mb-1">
          Welcome to Dispatcher!
        </b-card-title>
        <b-card-text class="mb-2">
          Please sign-in to your account and start the adventure
        </b-card-text>

        <!-- form -->
        <validation-observer
          ref="loginForm"
          #default="{invalid}"
        >
          <b-form
            class="auth-login-form mt-2"
            @submit.prevent="login"
          >

            <!-- email -->
            <b-form-group
              label-for="email"
              label="Email"
            >
              <validation-provider
                #default="{ errors }"
                name="Email"
                rules="required|email"
              >
                <b-form-input
                  id="email"
                  v-model="email"
                  name="login-email"
                  :state="errors.length > 0 ? false:null"
                  placeholder="john@example.com"
                  autofocus
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <!-- password -->
            <b-form-group>
              <div class="d-flex justify-content-between">
                <label for="password">Password</label>
                <b-link :to="{name:'auth-forgot-password'}">
                  <small>Forgot Password?</small>
                </b-link>
              </div>
              <validation-provider
                #default="{ errors }"
                name="Password"
                rules="required"
              >
                <b-input-group
                  class="input-group-merge"
                  :class="errors.length > 0 ? 'is-invalid':null"
                >
                  <b-form-input
                    id="password"
                    v-model="password"
                    :type="passwordFieldType"
                    class="form-control-merge"
                    :state="errors.length > 0 ? false:null"
                    name="login-password"
                    placeholder="Password"
                  />

                  <b-input-group-append is-text>
                    <feather-icon
                      class="cursor-pointer"
                      :icon="passwordToggleIcon"
                      @click="togglePasswordVisibility"
                    />
                  </b-input-group-append>
                </b-input-group>
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>

            <!-- checkbox -->
            <b-form-group>
              <b-form-checkbox
                id="remember-me"
                v-model="status"
                name="checkbox-1"
              >
                Remember Me
              </b-form-checkbox>
            </b-form-group>

            <!-- submit button -->
            <b-button
              variant="primary"
              type="submit"
              block
              :disabled="invalid"
            >
              Sign in
            </b-button>
          </b-form>
        </validation-observer>

        <b-card-text class="text-center mt-2">
          <span>New on our platform? </span>
          <b-link :to="{name:'auth-register'}">
            <span>Create an account</span>
          </b-link>
        </b-card-text>

        <div class="divider my-2">
          <div class="divider-text">
            or
          </div>
        </div>

        <!-- social button -->
        <div class="auth-footer-btn d-flex justify-content-center">
          <b-button
            href="javascript:void(0)"
            variant="facebook"
          >
            <feather-icon icon="FacebookIcon" />
          </b-button>
          <b-button
            href="javascript:void(0)"
            variant="twitter"
          >
            <feather-icon icon="TwitterIcon" />
          </b-button>
          <b-button
            href="javascript:void(0)"
            variant="google"
          >
            <feather-icon icon="MailIcon" />
          </b-button>
          <b-button
            href="javascript:void(0)"
            variant="github"
          >
            <feather-icon icon="GithubIcon" />
          </b-button>
        </div>
      </b-card>
      <!-- /Login v1 -->
    </div>
  </div>
</template>

<script>
import { ValidationProvider, ValidationObserver } from 'vee-validate'
import {
  BButton, BForm, BFormInput, BFormGroup, BCard, BLink, BCardTitle, BCardText, BInputGroup, BInputGroupAppend, BFormCheckbox,
} from 'bootstrap-vue'
import VuexyLogo from '@core/layouts/components/Logo.vue'
import { required, email } from '@validations'
import { togglePasswordVisibility } from '@core/mixins/ui/forms'
import { isUserLoggedIn, getHomeRouteForLoggedInUser } from '@/auth/utils'

import usePassport from '@/auth/passport/usePassport'
import userApiService from '@/api/user'

export default {
  components: {
    // BSV
    BButton,
    BForm,
    BFormInput,
    BFormGroup,
    BCard,
    BCardTitle,
    BLink,
    VuexyLogo,
    BCardText,
    BInputGroup,
    BInputGroupAppend,
    BFormCheckbox,
    ValidationProvider,
    ValidationObserver,
  },
  mixins: [togglePasswordVisibility],
  data() {
    return {
      email: '',
      password: '',
      status: '',
      // validation rules
      required,
      email,
    }
  },
  created() {
    if(isUserLoggedIn()) {
      this.$router.push({ name: 'dashboard' })
    }
  },
  methods: {
    login() {
      if (this.$refs.loginForm.validate()) {
        this.processing(true)
        userApiService.login({
          email: this.email,
          password: this.password,
        })
        .then(response => {
          this.processing(false)
          if(response.data.error!==undefined) {
            this.$emit('alert', 'error', response.data.error.message)
          } else {
            const { userData } = response.data
            let clientId = response.data.clientId
            let clientSecret = response.data.clientSecret
            if(!clientId || !clientSecret) {
              this.$emit('alert', 'error', 'Client not found')
            } else {
              usePassport.login({
                grant_type: 'password',
                client_id: clientId,
                client_secret: clientSecret,
                username: this.email,
                password: this.password,
                scope: '',
              })
              .then(response => {
                this.processing(false)
                if(response.error!==undefined) {
                  this.$emit('alert', 'error', response.message)
                } else {
                  console.log(response)
                  usePassport.setToken(response.data.access_token)
                  usePassport.setRefreshToken(response.data.refresh_token)
                  usePassport.setClientId(clientId)
                  usePassport.setClientSecret(clientSecret)
                  localStorage.setItem('userData', JSON.stringify(userData))
                  this.$ability.update(userData.ability)
                  // this.$router.push({ name: 'dashboard' })
                  this.$router.replace(getHomeRouteForLoggedInUser(userData.role))
                }
              })
              .catch(error => {
                this.error(error.message)
              })
            }
          }
        })
        .catch(error => {
          this.error(error.message)
        })
      }
    },
    homepage() {
      window.location.replace(window.baseUrl)
    },
    sessionExpired() {
      let h = this.$createElement
      let titleNode = h('div', {domProps: {innerHTML: 'Session Expired'}})
      let messageNode = h('div', {class: ['foobar']}, [
        h('h4', {class: ['text-center']}, [
            'Your session has expired.'
        ]),
        h('h4', {class: ['text-center']}, [
            'You will be redirected to the Login page.'
        ])
      ])
      this.$bvModal.msgBoxOk([messageNode], {
        title: [titleNode],
        size: 'md',
        buttonSize: 'md',
        okVariant: 'success',
        okTitle: 'Ok',
        footerClass: 'p-2',
        hideHeaderClose: false,
        centered: true
      })
      .then(() => {
        window.location.reload()
      })
    },
    processing(status) {
      this.$emit('processing', status)
    },
    error(message, code=null) {
      this.$emit('alert', 'error', message, code)
    },
    notice(type, message) {
      this.$emit('alert', type, message)
    },
  },
  computed: {
    passwordToggleIcon() {
      return this.passwordFieldType === 'password' ? 'EyeIcon' : 'EyeOffIcon'
    },
  },
}
</script>

<style lang="scss">
@import '@core/scss/vue/pages/page-auth.scss';
</style>
