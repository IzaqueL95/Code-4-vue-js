<!DOCTYPE html>
<head>
    <title>Exemplo vue</title>
</head>
<body>
    <div id="app">
        <table>
            <thead>
                <th>nome</th>
                <th>idade</th>
            </thead>
            <tbody>
            <tr v-for="linha in dados">
                    <td :data-name="linha.name" >{{ linha.name }}</td>
                    <td>{{ linha.age }}</td>
                </tr>
            </tbody>
             
            
        </table>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script>
        new Vue({
            el: '#app',
            data: {
                message: 'Hello vue.js'
            }
        })
    </script> -->

    <!-- <script>
        new Vue({
            el: '#app',
            data:{
                name: '',
                age: ''
            },
            created(){
                axios.get('/api/get_data')
                .then(response => {
                    this.name = response.data.name;
                    this.age = response.data.age;
                })
                .catch(error => {
                    console.log(error)
                })
            }
        })
    </script> -->

    <script>
        new Vue({
            el: '#app',
            data:{
                dados: []
            },
            mounted(){
                axios.get('/api/get_data')
                .then(response => {
                    this.dados = response.data;
                })
                .catch(error => {
                    console.log(error)
                })
            }
        })
    </script>
</body>