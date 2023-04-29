import Swal from 'sweetalert2/dist/sweetalert2.js';
window.Swal = Swal;

import './bootstrap';
import { createApp } from 'vue';



const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);



app.mount('#app');
