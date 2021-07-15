<template>
  <b-tabs
    vertical
    content-class="col-12 col-md-9 mt-1 mt-md-0"
    pills
    nav-wrapper-class="col-md-3 col-12"
    nav-class="nav-left"
  >

    <!-- general tab -->
    <b-tab active>

      <!-- title -->
      <template #title>
        <feather-icon
          icon="UserIcon"
          size="18"
          class="mr-50"
        />
        <span class="font-weight-bold">General</span>
      </template>

      <account-setting-general
        v-if="options.general"
        :general-data="options.general"
      />
    </b-tab>
    <!--/ general tab -->

    <!-- change password tab -->
    <b-tab>

      <!-- title -->
      <template #title>
        <feather-icon
          icon="LockIcon"
          size="18"
          class="mr-50"
        />
        <span class="font-weight-bold">Change Password</span>
      </template>

      <account-setting-password />
    </b-tab>
    <!--/ change password tab -->

    <!-- info -->
    <b-tab>

      <!-- title -->
      <template #title>
        <feather-icon
          icon="InfoIcon"
          size="18"
          class="mr-50"
        />
        <span class="font-weight-bold">Information</span>
      </template>

      <account-setting-information
        v-if="options.info"
        :information-data="options.info"
      />
    </b-tab>

    <!-- social links -->
    <b-tab>

      <!-- title -->
      <template #title>
        <feather-icon
          icon="LinkIcon"
          size="18"
          class="mr-50"
        />
        <span class="font-weight-bold">Social</span>
      </template>

      <account-setting-social
        v-if="options.social"
        :social-data="options.social"
      />
    </b-tab>

    <!-- notification -->
    <b-tab>

      <!-- title -->
      <template #title>
        <feather-icon
          icon="BellIcon"
          size="18"
          class="mr-50"
        />
        <span class="font-weight-bold">Notifications</span>
      </template>

      <account-setting-notification
        v-if="options.notification"
        :notification-data="options.notification"
      />
    </b-tab>
  </b-tabs>
</template>

<script>
import { BTabs, BTab } from 'bootstrap-vue'
import AccountSettingGeneral from './AccountSettingGeneral.vue'
import AccountSettingPassword from './AccountSettingPassword.vue'
import AccountSettingInformation from './AccountSettingInformation.vue'
import AccountSettingSocial from './AccountSettingSocial.vue'
import AccountSettingNotification from './AccountSettingNotification.vue'
import userApiService from '@/api/user'

export default {
  components: {
    BTabs,
    BTab,
    AccountSettingGeneral,
    AccountSettingPassword,
    AccountSettingInformation,
    AccountSettingSocial,
    AccountSettingNotification,
  },
  data() {
    return {
      userData: JSON.parse(localStorage.getItem('userData')),
      options: {},
    }
  },
  created() {
    // this.$http.get('/account-setting/data').then(res => { this.options = res.data })
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
        // general
        // avatar, username, name, email, company
        this.options = response.data.options
        console.log(this.options)
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
}
</script>
