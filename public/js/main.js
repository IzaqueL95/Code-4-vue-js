import Vue from 'vue';

new Vue({
    el: '#app',
    data:{
        message: ''
    },
    munted: function() {
        axios.get('/home/getData')
        .then(response => {
            this.message = response.data.message;
        })
        .catch(error => {
            console.log(error);
        })
    }
});