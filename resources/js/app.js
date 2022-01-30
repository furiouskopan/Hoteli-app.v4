import { createApp } from 'vue'
import HelloWorld from './components/HelloWorld.vue';
import Home from './components/Home.vue';

const app = createApp({});
app.component('hello-world', HelloWorld).mount('#app');
app.component('home', Home).mount('#app1');

require('./bootstrap');
