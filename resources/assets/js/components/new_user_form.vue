<template>
    <div class="col-xs-8 col-xs-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">New User</h3>
            </div>
            <div class="panel-body">
                <form action="/admin/post_user" method="POST" class="form-horizontal" id="new_user_form">
                    <input type="hidden" name="_token" v-model="token" />
                    <div class="form-group">
                        <label for="name" class="col-xs-2">Name:</label>
                        <div class="col-xs-10">
                            <input type="text" name="name" class="form-control" id="name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-xs-2">Email:</label>
                        <div class="col-xs-10">
                            <input type="email" name="email" class="form-control col-xs-10" id="email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-xs-2">Password:</label>
                        <div class="col-xs-10">
                            <input type="password" name="password" class="form-control col-xs-10" id="password" />
                        </div>
                    </div>
                    <div class="checkbox col-xs-offset-2">
                        <label>
                            <input name="isAdmin" type="checkbox"> Admin?
                        </label>
                    </div>
                    <button class="btn btn-primary col-xs-2 col-xs-offset-10" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
          console.log(this.token);
        },
        data() {
            return {
                token: $('meta[name="csrf-token"]').attr('content')
            }
        }
    }
</script>