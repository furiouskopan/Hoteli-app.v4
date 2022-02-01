import { createApp } from 'vue'
import HelloWorld from './components/HelloWorld.vue';
import Home from './components/Home.vue';
import Register from './components/Register.vue';

const app = createApp({});
app.component('hello-world', HelloWorld).mount('#app');
app.component('home', Home).mount('#app1');
app.component('register', Register).mount('#app2');
require('./bootstrap');
