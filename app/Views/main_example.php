<!DOCTYPE html>
<head>
    <title>Exemplo vue</title>
</head>
<body>
    <div id="app">
    <form @submit.prevent="enviarDados">
        <label for="name">Nome</label>
        <input type="text" id="name" v-model="formData.name">
        <label for="age"></label>
        <input type="number" id="age" v-model="formData.age">
        <button type="submit">Enviar</button>
    </form>
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
    <script src="<?= base_url('js/post.js') ?>"></script>

    <script>
        
    </script>
</body>