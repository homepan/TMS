<template>
  <h1>dashboard</h1>
</template>
<script>
export default {
  props: {
    env: {
      type: String,
      default: 'dev',
    },
  },
  data() {
    return {
      userData: JSON.parse(localStorage.getItem('userData')),
    }
  },
  created() {
    console.log(this.userData)
  }
}
</script>
