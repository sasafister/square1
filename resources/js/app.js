/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import VueRouter from 'vue-router'

const routes = [
    {
        name: 'AllPosts',
        path: '/',
        exact: true,
        component: () => import('./components/AllPosts.vue'),
    },
    {
        name: 'CreatePost',
        path: '/create-post',
        exact: true,
        component: () => import('./components/CreatePost.vue'),
    },
    {
        name: 'ImportPosts',
        path: '/import-posts',
        exact: true,
        component: () => import('./components/ImportPosts.vue'),
    },
  ]
  
const router = new VueRouter({
    routes // short for `routes: routes`
})

Vue.use(VueRouter)
Vue.component('home', require('./components/Home.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
