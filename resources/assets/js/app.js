require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-moment'));

Vue.component('tiop-efetivo', require('../../../app/Units/Dashboard/Resources/components/afastamento-efetivo.vue').default);
Vue.component('tiop-notifications', require('../../../app/Units/Dashboard/Resources/components/notifications.vue').default);
Vue.component('tiop-sobreaviso', require('../../../app/Units/Dashboard/Resources/components/sobreaviso.vue').default);
Vue.component('status-radares', require('../../../app/Units/Dashboard/Resources/components/radares.vue').default);
Vue.component('tiop-rpl', require('../../../app/Units/Dashboard/Resources/components/rpl.vue').default);
Vue.component('tiop-mnt', require('../../../app/Units/Dashboard/Resources/components/mnt-prog.vue').default);
Vue.component('tiop-sistemas', require('../../../app/Units/Dashboard/Resources/components/inf-sistemas.vue').default);
Vue.component('tiop-rodape', require('../../../app/Units/Dashboard/Resources/components/rodape.vue').default);

const app = new Vue({
    el: '#app'
});
