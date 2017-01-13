<template>
    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users">
                <td>{{user.id}}</td>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td>{{user.isAdmin ? "True" : "False"}}</td>
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