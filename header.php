<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">    
    <title>Dashboard Atua</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/76689e9bfd.js"></script>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-0">

            <div class="container text-center ">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="animated-icon1"><span></span><span></span><span></span></div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent20">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="dashboard.php">DASHBOARD <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="newTask.php">TAREFAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">USUÁRIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CLIENTES</a>
                        </li>
                    </ul>

                    <div class="navbar-nav ml-auto">

                        <div class="row">
                            <div class="col-12 align-self-center">

                                <i class="far fa-envelope fa-fw m-2">
                                    <span class="notification">
                                        9
                                    </span>
                                </i>

                                <i class="far fa-bell fa-fw mx-2 m-2">
                                    <span class="notification" id="notification-number">
                                        3
                                    </span>
                                </i>
                                
                            </div>
                        </div>

                        <a href="newTask.php">
                            <button type="button" class="btn-new-task m-2 align-self-center">
                                <i class="far fa-plus-square px-1"></i>
                                NOVA TAREFA
                            </button>
                        </a>
                        
                        <a href="index.php">                            
                            <button type="button" class="btn-exit m-2 align-self-center">
                                <i class="fas fa-sign-out-alt px-1"></i>
                                SAIR
                            </button>
                        </a>

                        <div class="align-self-center text-center">
                            <img src="img/perfil.png" class="dashboard-perfil-image" alt="">
                        </div>

                    </div>

                </div>
            </div>

        </nav>
    </header>
