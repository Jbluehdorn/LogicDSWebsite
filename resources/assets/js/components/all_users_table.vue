<template>
    <div class="panel panel-default col-xs-12">
        <div class="loading-icon" v-if="loading">
            <i class="fa fa-spin fa-circle-o-notch"></i>
        </div>
        <table class="table" v-show="!loading">
            <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users">
                <td>{{user.id}}</td>
                <td>{{user.name}}</td>
                <td>{{user.firstName}} {{user.lastName}}</td>
                <td>{{user.email}}</td>
                <td>{{user.isAdmin ? "True" : "False"}}</td>
                <td><a v-bind:href="'/dashboard/account/' + user.id"><i class="fa fa-sign-in"></i></a></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="6">
                    <v-paginator :options="options" :resource_url="resource_url" @update="updateResource"></v-paginator>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        components() {
          VPaginator: VuePaginator
        },
        data() {
            return {
                loading: true,
                users: [],
                resource_url: '/api/users',
                options: {
                    next_button_text: '>>',
                    previous_button_text: '<<'
                }
            }
        },
        methods: {
            updateResource(data) {
                this.users = data;
                this.loading = false;
            }
        }
    }
</script>