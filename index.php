<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col">

                    <h1>Cose da fare</h1>

                    <ul v-if = "todoList.length">
                        <li v-for="(item, i) in todoList ">{{ item }}</li>
                    </ul>
                    <h2 v-else>nessun dato</h2>

                    <div class="input-group">
                        <input v-model="newTask" type="text" class="form-control" >
                        <button @click="addNewTask" class="btn btn-primary">invia</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="./main.js"></script>

</body>
</html>