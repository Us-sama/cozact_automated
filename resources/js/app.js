require('./bootstrap');

import Swal from 'sweetalert2/dist/sweetalert2.js';
import 'sweetalert2/dist/sweetalert2.css'




import { createApp } from 'vue';
import router from "./router"

import App from "./components/App.vue"

createApp(App).use(router).mount("#app")

window.Swal = Swal;
const toast = Swal.mixin({
    toast:true,
    position:'top-end',
    showConfirmButton:false,
    timer:5000,
    timeProgressBar:true,
});
window.toast = toast;
