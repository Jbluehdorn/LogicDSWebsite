<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>&nbsp;</th>
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
                <td>{{user.email}}</td>
                <td>{{user.isAdmin ? "True" : "False"}}</td>
                <td><a v-bind:href="'/admin/account/' + user.id"><i class="fa fa-sign-in"></i></a></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
          console.log(this.users);
        },
        data() {
            return {
                users: users
            }
        }
    }
</script>