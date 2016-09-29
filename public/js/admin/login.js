import auth from '../auth/index'

new Vue({
    el: 'body',

    data:{
        credentials: {
            username: '',
            password: ''
        },
        error: ''

    },

    methods: {
        submit() {
            var credentials = {
                username: this.credentials.username,
                password: this.credentials.password
            }
            // We need to pass the component's this context
            // to properly make use of http in the auth service
            auth.login(this, credentials, 'admin/');
        }
    }
});