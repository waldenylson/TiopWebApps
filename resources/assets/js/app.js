require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-moment'));



Vue.component('tiop-efetivo', require('../../../app/Units/Dashboard/Resources/components/afastamento-efetivo').default);
Vue.component('tiop-notifications', require('../../../app/Units/Dashboard/Resources/components/notifications').default);
Vue.component('tiop-sobreaviso', require('../../../app/Units/Dashboard/Resources/components/sobreaviso').default);
// Vue.component('status-radares', require('../../../app/Units/Dashboard/Resources/components/radares').default);
Vue.component('status-sitc', require('../../../app/Units/Dashboard/Resources/components/sitc').default);
Vue.component('tiop-rpl', require('../../../app/Units/Dashboard/Resources/components/rpl').default);
Vue.component('tiop-dacom', require('../../../app/Units/Dashboard/Resources/components/dacom').default);
Vue.component('tiop-mnt', require('../../../app/Units/Dashboard/Resources/components/mnt-prog').default);
Vue.component('tiop-sistemas', require('../../../app/Units/Dashboard/Resources/components/inf-sistemas').default);
Vue.component('tiop-rodape', require('../../../app/Units/Dashboard/Resources/components/rodape').default);

const app = new Vue({
    el: '#app'
});
