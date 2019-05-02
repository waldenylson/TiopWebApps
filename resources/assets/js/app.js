require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-moment'));

Vue.component('tiop-efetivo', require('../../../app/Units/Dashboard/Resources/components/afastamento-efetivo'));
Vue.component('tiop-notifications', require('../../../app/Units/Dashboard/Resources/components/notifications'));
Vue.component('tiop-sobreaviso', require('../../../app/Units/Dashboard/Resources/components/sobreaviso'));
Vue.component('status-radares', require('../../../app/Units/Dashboard/Resources/components/radares'));
Vue.component('tiop-rpl', require('../../../app/Units/Dashboard/Resources/components/rpl'));
Vue.component('tiop-mnt', require('../../../app/Units/Dashboard/Resources/components/mnt-prog'));
Vue.component('tiop-sistemas', require('../../../app/Units/Dashboard/Resources/components/inf-sistemas'));
Vue.component('tiop-rodape', require('../../../app/Units/Dashboard/Resources/components/rodape'));

const app = new Vue({
    el: '#app'
});
