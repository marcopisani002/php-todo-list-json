<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>TODO-LIST_JSON</title>
    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body class=" text-white">
    <div id="app">
        <main class="container py-5 pb-5">
            <h1 class="mb-5 text-white text-center">To Do List </h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card text-dark ps-3 pe-3">
                        <div v-for="newTask in tasks" class=" d-flex justify-content-between mt-3 mb-3 align-items-center">
                            <div >{{newTask.newtask}}</div>
                            <div>
                                <button type="button" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center ">
            <form method="POST" @submit.prevent="onFormSubmit">
                    <div class=" row mb-3 justify-content-center">
                        <div class="col-md-6">
                            <label for="" class="form-label mt-2 ">ADD TASKS</label>
                            <input type="name" class="form-control" placeholder="Add your Task" name="newtask" v-model="formData.newtask">
                        </div>
                    </div>
                    
                    <a href="index.php" class="btn btn-secondary btn-danger">Delete</a href="index.php">
                   
                    <button class="btn btn-success">ADD TASK</button>
                   
                </form>

            </div>
    </div>
    </main>
    </div>
    <script src="js/main.js"></script>
</body>

</html>