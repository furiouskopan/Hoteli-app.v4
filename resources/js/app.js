import { createApp } from 'vue'
import home from './components/Home.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';

const app = createApp({});
app.component('home', home).mount('#app');
app.component('login', Login).mount('#app1');
app.component('register', Register).mount('#app2');
require('./bootstrap');
