<template>
  <div class="page-wrapper page-center px-2">
    <div class="page-inner py-2">
      <b-card class="mb-0">
        <b-link class="brand-logo">
          <h2 class="brand-text text-primary ml-1">
            {{ appName }}
          </h2>
        </b-link>

        <b-card-title class="mb-1">
          Adventure starts here
        </b-card-title>
        <b-card-text class="mb-2">

        </b-card-text>
        <form-wizard
          color="#7367F0"
          :title="null"
          :subtitle="null"
          shape="square"
          finish-button-text="Submit"
          back-button-text="Previous"
          class="mb-3"
          @on-complete="formSubmitted"
        >

          <!-- accoint details tab -->
          <tab-content
            title="Account Details"
            :before-change="validationForm"
          >
            <validation-observer
              ref="accountRules"
              tag="form"
            >
              <b-row>
                <b-col
                  cols="12"
                  class="mb-2"
                >
                  <h5 class="mb-0">
                    Account Details
                  </h5>
                  <small class="text-muted">
                    Enter Your Account Details.
                  </small>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Contact Name *"
                    label-for="contactName"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="contactName"
                      rules="required"
                    >
                      <b-form-input
                        id="contactName"
                        v-model="contactName"
                        :state="errors.length > 0 ? false:null"
                        placeholder="Contact Name"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Contact Email *"
                    label-for="contactEmail"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="contactEmail"
                      rules="required|email"
                    >
                      <b-form-input
                        id="contactEmail"
                        v-model="contactEmail"
                        type="email"
                        :state="errors.length > 0 ? false:null"
                        placeholder="john.doe@email.com"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Company Name"
                    label-for="company"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="company"
                    >
                      <b-form-input
                        id="companyName"
                        v-model="company"
                        :state="errors.length > 0 ? false:null"
                        placeholder="Optional"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Contact Telephone *"
                    label-for="contactTelephone"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="contactTelephone"
                      rules="required"
                    >
                      <b-form-input
                        id="contactTelephone"
                        v-model="contactTelephone"
                        :state="errors.length > 0 ? false:null"
                        placeholder=""
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                  <b-form-group
                    label="location"
                    label-for="location"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Location"
                      rules="required"
                    >
                      <b-form-input
                        id="location"
                        v-model="location"
                        :placeholder="placeHolder"
                        :class="{ 'in-progress': inProgress, 'error': hasError }"
                        :disabled="disabledInput"
                        @input="debounceInput" 
                        @focus="clearError"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                
              </b-row>
            </validation-observer>
          </tab-content>

          <!-- personal details tab -->
          <tab-content
            title="Personal Info"
            :before-change="validationFormInfo"
          >
            <validation-observer
              ref="infoRules"
              tag="form"
            >
              <b-row>
                <b-col
                  cols="12"
                  class="mb-2"
                >
                  <h5 class="mb-0">
                    Personal Info
                  </h5>
                  <small class="text-muted">Enter Your Personal Info.</small>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="First Name"
                    label-for="first-name"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="First Name"
                      rules="required"
                    >
                      <b-form-input
                        id="first-name"
                        v-model="firstName"
                        placeholder="John"
                        :state="errors.length > 0 ? false:null"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Last Name"
                    label-for="last-name"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Last Name"
                      rules="required"
                    >
                      <b-form-input
                        id="last-name"
                        v-model="lastName"
                        :state="errors.length > 0 ? false:null"
                        placeholder="Doe"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Password"
                    label-for="password"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Password"
                      vid="Password"
                      rules="required|password"
                    >
                      <b-form-input
                        id="password"
                        v-model="PasswordValue"
                        type="password"
                        :state="errors.length > 0 ? false:null"
                        placeholder="Password"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Confirm Password"
                    label-for="c-password"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Password Confirm"
                      rules="required|confirmed:Password"
                    >
                      <b-form-input
                        id="c-password"
                        v-model="passwordCon"
                        type="password"
                        :state="errors.length > 0 ? false:null"
                        placeholder="Re-type Password"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
              </b-row>
            </validation-observer>
          </tab-content>

          <!-- address  -->
          <tab-content
            title="Address"
            :before-change="validationFormAddress"
          >
            <validation-observer
              ref="addressRules"
              tag="form"
            >
              <b-row>
                <b-col
                  cols="12"
                  class="mb-2"
                >
                  <h5 class="mb-0">
                    Address
                  </h5>
                  <small class="text-muted">Enter Your Address.</small>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Address"
                    label-for="address1"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Address1"
                      rules="required"
                    >
                      <b-form-input
                        id="address1"
                        v-model="address1"
                        :state="errors.length > 0 ? false:null"
                        placeholder="e.g. 1 Queens Road"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Country"
                    label-for="country"
                  >
                  <b-form-select
                      v-model="countryCode"
                      :options="countryOptions"
                    />
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Address Cont."
                    label-for="address2"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Address2"
                    >
                      <b-form-input
                        id="address2"
                        v-model="address2"
                        :state="errors.length > 0 ? false:null"
                        placeholder="Optional, e.g. Level 2, Suite 15"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  
                </b-col>
              </b-row>
            </validation-observer>
          </tab-content>

          <!-- social link -->
          <tab-content
            title="Social Links"
            :before-change="validationFormSocial"
          >
            <validation-observer
              ref="socialRules"
              tag="form"
            >
              <b-row>
                <b-col
                  cols="12"
                  class="mb-2"
                >
                  <h5 class="mb-0">
                    Social Links
                  </h5>
                  <small class="text-muted">Enter Your Social Links</small>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Twitter"
                    label-for="twitter"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Twitter"
                      rules="required|url"
                    >
                      <b-form-input
                        id="twitter"
                        v-model="twitterUrl"
                        :state="errors.length > 0 ? false:null"
                        placeholder="https://twitter.com/abc"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Facebook"
                    label-for="facebook"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Facebook"
                      rules="required|url"
                    >
                      <b-form-input
                        id="facebook"
                        v-model="facebookUrl"
                        :state="errors.length > 0 ? false:null"
                        placeholder="https://facebook.com/abc"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="Google+"
                    label-for="google-plus"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="Google+"
                      rules="required|url"
                    >
                      <b-form-input
                        id="google-plus"
                        v-model="googleUrl"
                        :state="errors.length > 0 ? false:null"
                        placeholder="https://plus.google.com/abc"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
                <b-col md="6">
                  <b-form-group
                    label="LinkedIn"
                    label-for="linked-in"
                  >
                    <validation-provider
                      #default="{ errors }"
                      name="LinkedIn"
                      rules="required|url"
                    >
                      <b-form-input
                        id="linked-in"
                        v-model="linkedinUrl"
                        :state="errors.length > 0 ? false:null"
                        placeholder="https://linkedin.com/abc"
                      />
                      <small class="text-danger">{{ errors[0] }}</small>
                    </validation-provider>
                  </b-form-group>
                </b-col>
              </b-row>
            </validation-observer>
          </tab-content>
        </form-wizard>
      </b-card>
    </div>
  </div>
</template>

<script>
import _ from 'lodash' 
import { FormWizard, TabContent } from 'vue-form-wizard'
import vSelect from 'vue-select'
import { ValidationProvider, ValidationObserver } from 'vee-validate'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import {
  BRow,
  BCol,
  BCard,
  BLink,
  BCardTitle,
  BCardText,
  BFormGroup,
  BFormInput,
  BFormSelect,
  BFormInvalidFeedback,
} from 'bootstrap-vue'
import { required, email } from '@validations'
import { objectKeysToArray } from '@/libs/utility/code'
import { Location } from "@/libs/model/shipping"
import utilityApiService from '@/api/utility'

export default {
  props: {
    appName: {
      type: String,
      default: process.env.VUE_APP_TITLE
    }
  },
  components: {
    ValidationProvider,
    ValidationObserver,
    FormWizard,
    TabContent,
    BRow,
    BCol,
    BCard,
    BLink,
    BCardTitle,
    BCardText,
    BFormGroup,
    BFormInput,
    vSelect,
    BFormSelect,
    BFormInvalidFeedback,
    // eslint-disable-next-line vue/no-unused-components
    ToastificationContent,
  },
  data() {
    return {
      inProgress: false,
      hasError: false,
      selectedContry: '',
      selectedLanguage: '',
      company: '',
      contactName: '',
      contactEmail: '',
      contactTelephone: '',
      PasswordValue: '',
      passwordCon: '',
      firstName: '',
      lastName: '',
      address1: '',
      address2: '',
      location: '',
      placeHolder: '',
      postcode: '',
      suburb: '',
      state: '',
      countryName: '',
      countryCode: 'AU',
      twitterUrl: '',
      facebookUrl: '',
      googleUrl: '',
      linkedinUrl: '',
      required,
      email,
      // codeIcon,
      countryName: [
        { value: 'select_value', text: 'Select Value' },
        { value: 'Russia', text: 'Russia' },
        { value: 'Canada', text: 'Canada' },
        { value: 'China', text: 'China' },
        { value: 'United States', text: 'United States' },
        { value: 'Brazil', text: 'Brazil' },
        { value: 'Australia', text: 'Australia' },
        { value: 'India', text: 'India' },
      ],
      languageName: [
        { value: 'nothing_selected', text: 'Nothing Selected' },
        { value: 'English', text: 'English' },
        { value: 'Chinese', text: 'Mandarin Chinese' },
        { value: 'Hindi', text: 'Hindi' },
        { value: 'Spanish', text: 'Spanish' },
        { value: 'Arabic', text: 'Arabic' },
        { value: 'Malay', text: 'Malay' },
        { value: 'Russian', text: 'Russian' },
      ],
    }
  },
  created() {
    if(!localStorage.getItem('countries')) {
      utilityApiService.getCountryList({
      })
      .then(response => {
        if(response.error!==undefined) {
          this.$emit('alert', 'error', response.message)
        } else {
          let countries = []
          response.data.countries.forEach( record => {
            countries.push({ code: record.code, name: record.name })
          })
          localStorage.setItem('countries', JSON.stringify(countries))
        }
      })
      .catch(error => {
        this.$emit('alert', 'error', error.message)
      })
    }
  },
  methods: {
    debounceInput: _.debounce(function (value) {
      // this.results = []
      this.location = ''
      this.placeHolder = "Searching, please wait..."
      if(value.length) {
        console.log(value)
        this.inProgress = true
        this.processing(true)
        utilityApiService.searchLocation({
          params: {
            countryCode: this.countryCode,
            query: value,
            limit: 25
          }
        })
        .then(response => {
          if(response.data.error!==undefined) {
            this.error(response.data.error.message)
            this.resetLocation()
          } else {
            var records = objectKeysToArray(response.data.records)
            if(records.length) {
              this.placeHolder = "Select from the list below"
              records.forEach(record => {
                let location = new Location({
                    suburb: record.city, 
                    postcode: record.postcode_from,
                    countryCode: record.code,
                    residential: this.residential
                  }) 
                this.results.push(location)
              })
              this.setItems(this.results) 
            } else {
              this.placeHolder = "City or Postcode"
              this.resetLocation()
            }
          }
          this.inProgress = false
          this.processing(false)
        })
        .catch(error => {
          this.error(error.message)
        })
      }
    }, 1000),
    clearError() {
      this.hasError = false
    },
    setItems: function(items) {
      console.log(items)
			// this.$refs.DeliveryPopupList.setItems(items)
    },
    setLocation: function(location) {
      this.location = location
      this.location.countryCode = this.countryCode
      this.$emit('set-location', this.location);
      this.placeHolder = "City or Postcode"
		},
    resetLocation() {
      this.location = null
      this.locationStr = ""
      this.$emit('reset-location');
      this.placeHolder = "City or Postcode"
    },
    formSubmitted() {
      this.$toast({
        component: ToastificationContent,
        props: {
          title: 'Form Submitted',
          icon: 'EditIcon',
          variant: 'success',
        },
      })
    },
    validationForm() {
      return new Promise((resolve, reject) => {
        this.$refs.accountRules.validate().then(success => {
          if (success) {
            resolve(true)
          } else {
            reject()
          }
        })
      })
    },
    validationFormInfo() {
      return new Promise((resolve, reject) => {
        this.$refs.infoRules.validate().then(success => {
          if (success) {
            resolve(true)
          } else {
            reject()
          }
        })
      })
    },
    validationFormAddress() {
      return new Promise((resolve, reject) => {
        this.$refs.addressRules.validate().then(success => {
          if (success) {
            resolve(true)
          } else {
            reject()
          }
        })
      })
    },
    validationFormSocial() {
      return new Promise((resolve, reject) => {
        this.$refs.socialRules.validate().then(success => {
          if (success) {
            resolve(true)
          } else {
            reject()
          }
        })
      })
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
    countryOptions() {
      let countryOptions = []
      let countries = localStorage.getItem('countries') ? JSON.parse(localStorage.getItem('countries')) : []
      if(countries.length) {
        
        // var records = objectKeysToArray(countries)
        countries.forEach(record => {
          console.log(record)
          countryOptions.push({
            text: record.name, 
            value: record.code 
          })
        })
      }
      return countryOptions
    },
    disabledInput: {
      get: function () {
				if(this.inProgress) {
					return true
				}
				return false
			}
    },
  }
}
</script>
<style lang="scss">
@import '@/assets/scss/style.scss';
</style>
