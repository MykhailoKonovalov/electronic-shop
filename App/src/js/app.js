window.Vue = require('vue')

Vue.component('Catalog', require('./components/Catalog.vue').default)

const app = new Vue({
  el: '#app',
})
