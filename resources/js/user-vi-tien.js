window.Vue = require('vue');
Vue.component('vi-tien', require('./components/user/viTien.vue').default);
new Vue({
    el: '#app'
});

