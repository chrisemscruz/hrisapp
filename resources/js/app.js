require('./bootstrap');
require('alpinejs');


import Vue from 'vue'
import VueRouter from 'vue-router';
import router from './Router/index'
import mainPage from './main.vue'
//import sidebar from './components/sidebar.vue'
import addCompany from './modals/addcompany.vue'
import overVue from './pages/overVue.vue'

Vue.prototype.$eventBus = new Vue();

Vue.use(VueRouter)

const app = new Vue({
    el: '#app',
    router,               // <-- register router with Vue
    components:{
        mainPage,
        addCompany,
        overVue

}


});
