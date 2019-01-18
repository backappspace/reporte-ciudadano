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
import ConvocatoriasInicioComponent from './components/ConvocatoriasInicioComponent';
import ConvocatoriaCrearComponent from './components/ConvocatoriaCrearComponent';
import ConvocatoriaEditarComponent from './components/ConvocatoriaEditarComponent';

import ReportesComponent from './components/ReportesComponent';
import MetricasComponent from './components/MetricasComponent';
import DepartamentosComponent from './components/DepartamentosComponent';
import ConfiguracionComponent from './components/ConfiguracionComponent';

const routes = [
    { path: '/', component: DashboardComponent },
    { path: '/convocatorias', component: ConvocatoriasComponent,
        children: [
            { name: 'convocatoria', path: '', component: ConvocatoriasInicioComponent },
            { name: 'convocatoria_crear', path: 'crear', component: ConvocatoriaCrearComponent },
            { name: 'convocatoria_editar', path: 'editar', component: ConvocatoriaEditarComponent, props: true },
        ]
    },
    { path: '/reportes', component: ReportesComponent },
    { path: '/metricas', component: MetricasComponent },
    { path: '/departamentos', component: DepartamentosComponent },
    { path: '/configuracion', component: ConfiguracionComponent },
];

const router = new VueRouter({
    base: '/manager/',
    hashbang: false ,
    mode: 'hash',
    linkActiveClass: "",
    linkExactActiveClass: "border-gob-gold md:text-gob-gold",
    routes // short for `routes: routes`
});
const app = new Vue({
    router
}).$mount('#app');
