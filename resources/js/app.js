import Vue from 'vue'
import { BootstrapVue } from 'bootstrap-vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

import Reservation from './components/Hotels/views/Reservation.vue'
const app = new Vue({
    el: '#app',
    components: { Reservation }
});
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import "./components/Hotels/assets/scss/main.scss"
Vue.use(VueAxios, axios)

Vue.use(BootstrapVue)
require('./bootstrap');
window.Vue = require('vue').default;