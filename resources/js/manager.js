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

import DashboardComponent from './components/DashboardComponent';
import ConvocatoriasComponent from './components/ConvocatoriasComponent';
import ReportesComponent from './components/ReportesComponent';
import MetricasComponent from './components/MetricasComponent';
import DepartamentosComponent from './components/DepartamentosComponent';
import ConfiguracionComponent from './components/ConfiguracionComponent';

import ConvocatoriasCreateComponent from './components/convocatorias/ConvocatoriasCreateComponent';

const routes = [
    { path: '/', redirect: '/dashboard' },
    { path: '/dashboard', component: DashboardComponent },
    { path: '/convocatorias', component: ConvocatoriasComponent },
    { path: '/convocatorias/create', component: ConvocatoriasCreateComponent },
    { path: '/reportes', component: ReportesComponent },
    { path: '/metricas', component: MetricasComponent },
    { path: '/departamentos', component: DepartamentosComponent },
    { path: '/configuracion', component: ConfiguracionComponent },
];
const router = new VueRouter({
    base: '/manager/',
    hashbang: false ,
    mode: 'hash',
    linkActiveClass: "border-gob-gold md:text-gob-gold",
    linkExactActiveClass: "",
    routes // short for `routes: routes`
});
const app = new Vue({
    router
}).$mount('#app');
