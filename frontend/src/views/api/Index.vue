<template>
  <b-row class="match-height">
    <b-col lg="6">
      <b-card title="Key Set">
        <b-card-header class="d-none">
          <b-card-title>Heading colors</b-card-title>
        </b-card-header>
        <b-card-body class="pb-1 d-none">
          <b-card-text>
            <span>To add validation to any input filed just wrap that field in </span>
            <code>ValidationProvider</code>
            <span> component. Next, add your validation using </span>
            <code>rules</code>
            <span> prop.</span>
          </b-card-text>
        </b-card-body>
        <b-form @submit.prevent>
          <b-row>
            <b-col cols="12">
              <b-form-group
                label="Client ID:"
                label-for="client_id"
                label-cols-md="4"
              >
                <b-form-input readonly
                  id="client_id"
                  placeholder="Client ID" 
                  v-model="clientId"
                />
              </b-form-group>
            </b-col>
            <b-col cols="12">
              <b-form-group
                label="Client Secret:"
                label-for="client_secret"
                label-cols-md="4"
              >
                <b-form-input readonly
                  id="client_secret"
                  placeholder="Client Secret" 
                  v-model="clientSecret"
                />
              </b-form-group>
            </b-col>
            <b-col cols="12">
              <b-form-group
                label="Status:"
                label-for="status"
                label-cols-md="4"
              >
                <b-form-checkbox 
                  id="status"
                  :checked="status"
                  name="status"
                  switch
                  inline
                  disabled
                >
                  {{ clientStatus }}
                </b-form-checkbox>
              </b-form-group>
            </b-col>
            <b-col offset-md="4" class="d-none">
              <b-button
                v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                type="submit"
                variant="primary"
                class="mr-1"
              >
                Submit
              </b-button>
              <b-button
                v-ripple.400="'rgba(186, 191, 199, 0.15)'"
                type="reset"
                variant="outline-secondary"
              >
                Reset
              </b-button>
            </b-col>
          </b-row>
        </b-form>
      </b-card>
    </b-col>
  </b-row>
</template>
<script>
// import BCardCode from '@core/components/b-card-code'
import {
  BRow, BCol, 
  BCard, BCardHeader, BCardTitle, BCardBody,  BCardText,
  BForm, BFormInput, BFormGroup, BButton,  BFormCheckbox, 
} from 'bootstrap-vue'
import Ripple from 'vue-ripple-directive'
import oauthApiService from '@/api/oauth'
export default {
  props: {
    env: {
      type: String,
      default: 'dev'
    },
  },
  components: {
    BRow,
    BCol,
    BCard,
    BCardHeader,
    BCardTitle,
    BCardBody,
    BCardText,
    BForm,
    BFormInput,
    BFormGroup,
    BButton,
    BFormCheckbox,
  },
  directives: {
    Ripple,
  },
  data() {
    return {
      userData: JSON.parse(localStorage.getItem('userData')),
      clientId: null,
      clientSecret: null,
      status: false,
    }
  },
  created() {
    this.processing(true)
    oauthApiService.getClient({
      params: {
        token: btoa(this.userData.id),
      }
    })
    .then(response => {
      if(response.data.error!==undefined) {
        this.error(response.data.error.message)
      } else {
        this.clientId = response.data.clientId
        this.clientSecret = response.data.clientSecret
        this.status = response.data.revoked ? false : true
      }
      this.processing(false)
    })
    .catch(error => {
      this.error(error.message)
    })
  },
  methods: {
    sessionExpired() {
      this.$emit('session-expired')
    },
    processing(status) {
      this.$emit('processing', status)
    },
    success(message, refresh=false) {
      this.$emit('alert', 'success', message, refresh)
    },
    error(message, refresh=false) {
      this.$emit('alert', 'error', message, refresh)
    },
    notice(type, message) {
      this.$emit('alert', type, message)
    },
  },
  computed: {
    clientStatus() {
      return this.status ? 'Active' : 'Inactive'
    }
  }
}
</script>