// var VuePaginator = require('vuejs-paginator');

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('v-paginator', require('vuejs-paginator'));
Vue.component('new-user-form', require('./components/new_user_form.vue'));
Vue.component('all-users-table', require('./components/all_users_table.vue'));

const app = new Vue({
    el: '#body-content'
});

