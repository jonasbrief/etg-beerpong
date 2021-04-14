/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import Buefy from 'buefy'
import 'buefy/dist/buefy.css'
import actions from './store/actions'
import mutations from './store/mutations'
import getters from './store/getters'
import state from './store/state'


Vue.use(Buefy)
Vue.use(VueRouter)
Vue.use(Vuex)

const store = new Vuex.Store({
    state,
    mutations,
    getters,
    actions
})
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar', require('./components/navbar.vue').default);
Vue.component('rooms', require('./components/rooms.vue').default);
Vue.component('room', require('./components/room.vue').default);
Vue.component('bptable', require('./components/bptable.vue').default);
Vue.component('bptcontrol', require('./components/bptcontrol.vue').default);
Vue.component('svgTable', require('./components/svgTable.vue').default);
Vue.component('admin', require('./components/admin.vue').default);
Vue.component('hero', require('./components/hero.vue').default);
Vue.component('custom-footer', require('./components/custom-footer.vue').default);
Vue.component('leaderboard', require('./components/leaderboard.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Room from './components/room.vue';
import Rooms from './components/rooms.vue';
import Admin from './components/admin.vue';
import Hero from './components/hero.vue';
import Leaderboard from './components/leaderboard.vue';
const routes = [
    {path: '/', name: 'rooms', component: Rooms},
    {path: '/room:id', name:'room', component: Room},
    {path: '/admin', name:'admin', component: Admin},
    {path: '/hero', name:'hero', component: Hero},
    {path: '/leaderboard', name:'leaderboard', component: Leaderboard},
    
]

const router = new VueRouter({
    routes
})

const app = new Vue({
    router,
    store
}).$mount('#app')
