/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import VueCurrencyFilter from 'vue-currency-filter'

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';


import App from './App.vue';
Vue.use(VueAxios, axios);

Vue.component('autocomplete',require('./components/Autocomplete.vue'));

import IndexComponent from './components/posts/Index.vue';
import CreateComponent from './components/posts/Create.vue';
import EditComponent from './components/posts/Edit.vue';

import IndexSupComponent from './components/supplier/Index.vue';
import CreateSupComponent from './components/supplier/Create.vue';
import EditSupComponent from './components/supplier/Edit.vue';

Vue.use(VueCurrencyFilter,
    {
      symbol : 'Rp.',
      thousandsSeparator: '.',
      fractionCount: 0,
      fractionSeparator: ',',
      symbolPosition: 'front',
      symbolSpacing: true
    })

const routes = [
    {
        name: 'posts',
        path: '/barang',
        component: IndexComponent
    },
    {
        name: 'create',
        path: '/barang/create',
        component: CreateComponent
    },
    {
        name: 'edit',
        path: '/barang/edit/:id',
        component: EditComponent
    },
    //supplier
    {
        name: 'supplier',
        path: '/supplier',
        component: IndexSupComponent
    },
    {
        name: 'createSupplier',
        path: '/supplier/create',
        component: CreateSupComponent
    },
    {
        name: 'editSupplier',
        path: '/supplier/edit/:id',
        component: EditSupComponent
    }
];



const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
