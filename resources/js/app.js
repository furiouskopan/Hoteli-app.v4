import { createApp } from 'vue'
import HomePage from './components/HomePage.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';

const app = createApp({});
app.component('homepage', HomePage).mount('#app');
app.component('login', Login).mount('#app1');
app.component('register', Register).mount('#app2');
require('./bootstrap');
