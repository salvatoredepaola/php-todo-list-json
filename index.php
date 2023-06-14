<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <div class="my_container text-black">
            <div class="row mt-3">
                <div class="col text-white text-center">
                    <h1>Cose da fare</h1>
                </div>
            </div>
            <div class="row bg-white rounded-top mb-3">
                <div class="col p-0">

                    <ul v-if = "todoList.length">
                        <li class="d-flex justify-content-between border-bottom px-4 py-2" v-for="(item, i) in todoList ">
                            <span :class="(item.done) ? 'text-decoration-line-through' : '' ">
                                {{ item.text }}
                            </span>
                            <span class="badge bg-danger" @click="elimina(i)">
                                <i class="fa fa-trash"></i>
                            </span>
                        </li>
                    </ul>
                    <h2 v-else>nessun dato</h2>

                    
                </div>
            </div>
            <div class="row">
                <div class="col p-0">
                    <div class="input-group">
                        <input v-model="newTask" type="text" class="form-control" @keyup.enter="addNewTask">
                        <button @click="addNewTask" class="btn btn-outline-warning">invia</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./main.js"></script>

</body>
</html>