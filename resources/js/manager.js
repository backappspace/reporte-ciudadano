require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueProgressBar from 'vue-progressbar';

Vue.use(VueRouter);
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '2px'
});

import ExampleComponent from './components/ExampleComponent';

const routes = [
    { path: '/', component: ExampleComponent },
];
const router = new VueRouter({
    base: '/manager/',
    hashbang: false ,
    mode: 'hash',
    linkActiveClass: "",
    linkExactActiveClass: "border-blue-dark md:text-blue-dark",
    routes // short for `routes: routes`
});
const app = new Vue({
    router
}).$mount('#app');
