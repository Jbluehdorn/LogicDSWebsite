/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vuex from 'vuex';
Vue.use(Vuex);


const store = new Vuex.Store({
    state: {
        errors: []
    },
    mutations: {
        pushError(state, error) {
            state.errors.push(error);
            console.log(error);
        }
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('datepicker', require('vuejs-datepicker'));
Vue.component('v-paginator', require('vuejs-paginator'));
Vue.component('new-user-form', require('./components/new_user_form.vue'));
Vue.component('all-users-table', require('./components/all_users_table.vue'));
Vue.component('modal', require('./components/modal.vue'));



const app = new Vue({
    el: '#body-content',
    store,
    computed: {
        errors() {
            return this.$store.state.errors;
        }
    }
});
