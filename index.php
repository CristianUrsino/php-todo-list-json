<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://kit.fontawesome.com/42b6da10cf.js" crossorigin="anonymous"></script>
    <script src="js/script.js" type="module"></script>
    <link rel="stylesheet" href="styles/style.css">
    <title>To Do List</title>
</head>

<body>
<div class="wrapper">
        <div id="app">
            <section>
                <div class="container">
                    <h1>Todo List</h1>
                    <ul>
                        <li class="d-flex justify-content-between" v-for="(task,index) in todoList" :key="index">
                            <div :class="{'delete':task.done}" class="clickable" @click="toggleDoneTask(index)">{{task.text}}</div>
                            <div >
                                <div v-if="task.done === false">
                                    <i @click="toggleDoneTask(index)" class="clickable fa-solid fa-xmark"></i>
                                </div>
                                <div v-else>
                                    <i @click="toggleDoneTask(index)" class="clickable fa-solid fa-repeat"></i>
                                    <i @click="deleteTask(index)" class="clickable text-danger fa-solid fa-trash"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" v-model="newTask">
                        <button class="btn btn-primary" type="button" @click="addTask">Inserisci</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
</body>
</html>