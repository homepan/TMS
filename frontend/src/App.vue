<template>
  <div
    id="app"
    class="h-100"
    :class="[skinClasses]"
  >
    <component :is="layout" ref="layout" :version="version">
      <router-view @processing="processing" @alert="alert" @version="versionUpdate" @session-expired="sessionExpired"></router-view>
    </component>

  </div>
</template>

<script>

// This will be populated in `beforeCreate` hook
import { $themeColors, $themeBreakpoints, $themeConfig } from '@themeConfig'
import { provideToast } from 'vue-toastification/composition'
import { watch } from '@vue/composition-api'
import useAppConfig from '@core/app-config/useAppConfig'
import { useWindowSize, useCssVar } from '@vueuse/core'
import store from '@/store'
import swal from "sweetalert"

const LayoutVertical = () => import('@/layouts/vertical/LayoutVertical.vue')
const LayoutHorizontal = () => import('@/layouts/horizontal/LayoutHorizontal.vue')
const LayoutFull = () => import('@/layouts/full/LayoutFull.vue')

export default {
  props: {
    version: {
      type: String,
      default: "1.0.1"
    }
  },
  components: {
    // Layouts
    LayoutHorizontal,
    LayoutVertical,
    LayoutFull,

  },
  methods: {
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
      this.$refs.layout.processing = status
    },
    alert(type, message, refresh=false) {
      const wrapper = document.createElement('div');
      wrapper.innerHTML = message
      swal({
        title: type,
        content: wrapper,
        icon: type,
        buttonsStyling: false,
      })
      .then(() => {
        if(refresh) {
          location.reload()
        }
      })
    },
    versionUpdate(v) {
      this.version = v
      this.$refs.layout.version = this.version
    }
  },
  // ! We can move this computed: layout & contentLayoutType once we get to use Vue 3
  // Currently, router.currentRoute is not reactive and doesn't trigger any change
  computed: {
    layout() {
      if (this.$route.meta.layout === 'full') return 'layout-full'
      return `layout-${this.contentLayoutType}`
    },
    contentLayoutType() {
      return this.$store.state.appConfig.layout.type
    },
  },
  beforeCreate() {
    // Set colors in theme
    const colors = ['primary', 'secondary', 'success', 'info', 'warning', 'danger', 'light', 'dark']

    // eslint-disable-next-line no-plusplus
    for (let i = 0, len = colors.length; i < len; i++) {
      $themeColors[colors[i]] = useCssVar(`--${colors[i]}`, document.documentElement).value.trim()
    }

    // Set Theme Breakpoints
    const breakpoints = ['xs', 'sm', 'md', 'lg', 'xl']

    // eslint-disable-next-line no-plusplus
    for (let i = 0, len = breakpoints.length; i < len; i++) {
      $themeBreakpoints[breakpoints[i]] = Number(useCssVar(`--breakpoint-${breakpoints[i]}`, document.documentElement).value.slice(0, -2))
    }

    // Set RTL
    const { isRTL } = $themeConfig.layout
    document.documentElement.setAttribute('dir', isRTL ? 'rtl' : 'ltr')
  },
  setup() {
    const { skin, skinClasses } = useAppConfig()

    // If skin is dark when initialized => Add class to body
    if (skin.value === 'dark') document.body.classList.add('dark-layout')

    // Provide toast for Composition API usage
    // This for those apps/components which uses composition API
    // Demos will still use Options API for ease
    provideToast({
      hideProgressBar: true,
      closeOnClick: false,
      closeButton: false,
      icon: false,
      timeout: 3000,
      transition: 'Vue-Toastification__fade',
    })

    // Set Window Width in store
    store.commit('app/UPDATE_WINDOW_WIDTH', window.innerWidth)
    const { width: windowWidth } = useWindowSize()
    watch(windowWidth, val => {
      store.commit('app/UPDATE_WINDOW_WIDTH', val)
    })

    return {
      skinClasses,
    }
  },
}
</script>
