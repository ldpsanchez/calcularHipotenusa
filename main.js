import Vue from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify';
import VueKatex from 'vue-katex';
import 'katex/dist/katex.min.css';
import Axios from 'axios';

Vue.config.productionTip = false
Vue.use(VueKatex)

// Instanciar librerias de forma global
Vue.prototype.$http = Axios;

new Vue({
  vuetify,
  render: h => h(App)
}).$mount('#app')
