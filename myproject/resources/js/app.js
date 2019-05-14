window.Vue = require('vue');

Vue.component('test-component', require('./components/Test.vue'));

const app = new Vue({
    el: '#app'
});
