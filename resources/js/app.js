import './bootstrap';
import Alpine from 'alpinejs';

import { createApp } from 'vue/dist/vue.esm-bundler'
import Debut from '../components/Debut.vue'
import FooterPage from '../components/FooterPage.vue'
import AddToCart from '../components/AddToCarte.vue'

const app = createApp({});

app.component('debut' , Debut);
app.component('footer-page',FooterPage);
app.component('add-to-cart',AddToCart);
app.mount('#app');

window.Alpine = Alpine;

Alpine.start();
