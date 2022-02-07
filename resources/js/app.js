import { createApp } from 'vue'
import Home from './components/Home/Main.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Contact from './components/Home/Contact.vue';

const app = createApp({});
app.component('home', Home).mount('#app');
app.component('login', Login).mount('#app1');
app.component('register', Register).mount('#app2');
app.component('contact', Contact).mount('#app3');
require('./bootstrap');
