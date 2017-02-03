<template>
    <div class="col-xs-8 col-xs-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">New User</h3>
            </div>
            <div class="panel-body">
                <form action="/dashboard/post_user" method="POST" class="form-horizontal" id="new_user_form" enctype="multipart/form-data">
                    <input type="hidden" name="_token" v-model="token" />
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="firstName" class="col-xs-4">First Name:</label>
                                <div class="col-xs-8">
                                    <input name="firstName" id="firstName" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="lastName" class="col-xs-4">Last Name:</label>
                                <div class="col-xs-8">
                                    <input name="lastName" id="lastName" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="name" class="col-xs-2">Username:</label>
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
                        <label for="birthDate" class="col-xs-2">Birth Date:</label>
                        <datepicker
                                id="birthDate"
                                name="birthDate"
                                :inline="true"
                                :format="format"
                                :input-class="'form-control'"
                                :wrapper-class="'col-xs-4 col-xs-offset-2'">
                        </datepicker>
                    </div>
                    <hr>
                    <div class="form-group col-xs-8 col-xs-offset-2">
                        <label for="type">Type:</label>
                        <select name="type" id="type" class="form-control" v-model="selectedType" v-on:change="updateType">
                            <option v-for="type in types">{{type}}</option>
                        </select>
                    </div>

                    <div class="col-xs-12" v-if="isStaff">

                        <div class="form-group">
                            <label for="profilePicture">Profile Picture:</label>
                            <input type="file" id="profilePicture" name="profilePicture" accept=".jpg,.jpeg,.gif,.png">
                        </div>

                        <div class="form-group">
                            <label for="bio">Bio:</label>
                            <textarea name="bio" id="bio"  rows="5" class="form-control" v-model="bio"></textarea>
                            <p class="additional-information">
                                This section uses Markdown. For a guide to Markdown, <a href="https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet" target="_blank">click here</a>
                                <br />
                                Also, here's an <a href="http://www.webpagefx.com/tools/emoji-cheat-sheet/" target="_blank">emoji cheat sheet</a>
                            </p>
                        </div>

                        <modal v-if="modalShown" @close="modalShown = false"><vue-markdown :source="bio"></vue-markdown></modal>
                        <button class="btn btn-primary" type="button" @click="modalShown = true">Preview</button>
                    </div>

                    <input name="isAdmin" v-model="isAdmin" type="hidden">
                    <input name="isStaff" v-model="isStaff" type="hidden">

                    <button class="btn btn-primary col-xs-2 col-xs-offset-10" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import VueMarkdown from 'vue-markdown'
    export default {
        components: {
            VueMarkdown
        },
        mounted() {
            console.log(this.token);
            this.selectedType = this.types[1];
            this.updateType();
        },
        data() {
            return {
                token: $('meta[name="csrf-token"]').attr('content'),
                format: 'MM/dd/yyyy',
                types: ['Basic', 'Staff', 'Admin'],
                selectedType: '',
                isAdmin: false,
                isStaff: false,
                userName: '',
                email: '',
                bio: '',
                modalShown: false
            }
        },
        methods: {
            updateType() {
                switch(this.selectedType) {
                    case 'Basic':
                        this.isStaff = false;
                        this.isAdmin = false;
                        break;
                    case 'Staff':
                        this.isStaff = true;
                        this.isAdmin = false;
                        break;
                    case 'Admin':
                        this.isStaff = true;
                        this.isAdmin = true;
                        break;
                }
            },
            checkUsernameAvailability() {

            },
            checkEmailAvailability() {

            }
        }
    }
</script>