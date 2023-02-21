new Vue({
    el: '#app',
    data: {
        formData: {
            name: '',
            age: '',
        },
        dados: []
    },
        methods:{
            enviarDados(){
                axios.post('api/post_data', this.formData, {
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                .then(response => {
                    this.dados = [response.data]
                })
                .catch(error => {
                    console.log(error)
                })
            }
        
        }
    })
