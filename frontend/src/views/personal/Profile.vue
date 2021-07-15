<template>
    <component :is="userData ? 'b-card' : 'div'">

    <!-- Alert: No item found -->
    <b-alert
      variant="danger"
      :show="!userData"
    >
      <h4 class="alert-heading">
        Error fetching user data
      </h4>
      <div class="alert-body">
        No user found with this user id. Check
        <b-link
          class="alert-link"
          :to="{ name: 'apps-users-list'}"
        >
          User List
        </b-link>
        for other users.
      </div>
    </b-alert>

    <b-tabs
      v-if="userData"
      pills
    >

      <!-- Tab: Account -->
      <b-tab active>
        <template #title>
          <feather-icon
            icon="UserIcon"
            size="16"
            class="mr-0 mr-sm-50"
          />
          <span class="d-none d-sm-inline">Account</span>
        </template>
        <user-edit-tab-account
          :user-data="userData"
          class="mt-2 pt-75"
        />
      </b-tab>

      <!-- Tab: Information -->
      <b-tab>
        <template #title>
          <feather-icon
            icon="InfoIcon"
            size="16"
            class="mr-0 mr-sm-50"
          />
          <span class="d-none d-sm-inline">Information</span>
        </template>

      </b-tab>

      <!-- Tab: Social -->
      <b-tab>
        <template #title>
          <feather-icon
            icon="Share2Icon"
            size="16"
            class="mr-0 mr-sm-50"
          />
          <span class="d-none d-sm-inline">Social</span>
        </template>

      </b-tab>
    </b-tabs>
  </component>
</template>
<script>
import {
  BRow, BCol, 
  BCard, BCardHeader, BCardTitle, BCardBody,  BCardText,
  BForm, BFormInput, BFormGroup, BButton,  BFormCheckbox, 
  BTab, BTabs,
  BAlert,BLink,
} from 'bootstrap-vue'
import userApiService from '@/api/user'
import UserEditTabAccount from './components/UserEditTabAccount.vue'
export default {
  props: {
    env: {
      type: String,
      default: 'dev'
    },
  },
  components: {
    BRow, BCol, 
    BCard, BCardHeader, BCardTitle, BCardBody,  BCardText,
    BForm, BFormInput, BFormGroup, BButton,  BFormCheckbox, 
    BTab, BTabs,
    BAlert,BLink,
    UserEditTabAccount,
  },
  data() {
    return {
      userData: JSON.parse(localStorage.getItem('userData')),
    }
  },
  created() {
    this.processing(true)
    userApiService.getUserProfile({
      params: {
        token: btoa(this.userData.id),
      }
    })
    .then(response => {
      if(response.data.error!==undefined) {
        this.error(response.data.error.message)
      } else {
        console.log(response.data)
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

  }
}
</script>