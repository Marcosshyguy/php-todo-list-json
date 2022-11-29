<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>To Do List</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h1 class="text-center">To Do List</h1>

            <div class="col-7 mx-auto">
                <ul>
                    <li v-for="(todo, todoIndex) in answer" :key="todoIndex">{{ todo.text }}</li>
                </ul>
            </div>
            <a href="server.php">server</a>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>