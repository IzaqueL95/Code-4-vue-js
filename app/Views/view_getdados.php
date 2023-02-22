<!DOCTYPE html>
<head>
    <title>Exemplo vue</title>
</head>
<body>
    <div id="app">
        <button v-on:click="chamarDados">Click me</button>

        <table>
        <thead>
            <th>Nome</th>
            <th>Idade</th>
        </thead>
        <tbody>
            <tr v-for="linha in dados">
                <td>{{ linha.nome }}</td>
                <td>{{ linha.idade }}</td>
            </tr>
        </tbody>
    </table>
    </div>

 

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                dados: []

            },
            methods:{
                chamarDados(){
                    axios.post('view_getdadospost')
                    .then(resp => {
                        this.dados = [resp.data]
                        console.log(resp.data)
                        
                    })
                    .catch(err => {
                        console.log(err)
                    })
                }
            }
        })
    </script>
</body>
</html>