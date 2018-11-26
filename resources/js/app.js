
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'
window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('left-sidebar', require('./components/LeftSideBarComponent.vue'));
let Body = require('./components/MainBody.vue');
let PlayerList = require('./components/PlayerList.vue');
let PlayerList2 = require('./components/PlayerList2.vue');
let Team2 = require('./components/Team2.vue');

const routes = [
    { path: '/body', component: Body },
    { path: '/playerlist', component: PlayerList },
    { path: '/playerlist2', component: PlayerList2 },
    { path: '/team2', component: Team2 }
];

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});
// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
