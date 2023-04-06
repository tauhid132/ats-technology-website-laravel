import Vue from 'vue';
import './bootstrap';
//import { Bootstrap4Pagination } from 'laravel-vue-pagination';


import store from './store'
Vue.component('example-component', require('./components/ExampleComponent.vue').default)
Vue.component('categories', require('./components/admin/Categories.vue').default)
Vue.component('marketplace', require('./components/client/Marketplace.vue').default)
Vue.component('loader', require('./components/Loader.vue').default)
Vue.component('cart', require('./components/client/Cart.vue').default)
Vue.component('my-cart', require('./components/client/MyCart.vue').default)
Vue.component('order-summary', require('./components/client/OrderSummary.vue').default)
Vue.component('chat-head', require('./components/client/ChatHead.vue').default)
Vue.component('admin-messages', require('./components/admin/Messages.vue').default)
Vue.component('best-seller', require('./components/client/BestSeller.vue').default)
Vue.component('pagination', require('laravel-vue-pagination'));
import Multiselect from 'vue-multiselect'

// register globally
Vue.component('multiselect', Multiselect)
import moment from 'moment'

Vue.prototype.moment = moment



const app = new Vue({
    el: '#app',
    store
    
})