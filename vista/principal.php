<?php
    session_start();
    include('../templates/header.php');
    if(!$_SESSION['usuario']){
        header('location:form_ingreso.php');
    }
?>
<div class='container-fluid'>
    <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-8 mt-2'>
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Active</a>
                    </li>
                    <?php if($_SESSION['nivel']=='adm'){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Opciones Administrador
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Adm 1</a>
                            <a class="dropdown-item" href="#">Adm 2</a>
                            <a class="dropdown-item" href="#">Adm 3</a>
                        </div>
                    </li>
                    <?php } ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                           Opciones Usuarios
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Usuario 1</a>
                            <a class="dropdown-item" href="#">Usuario 2</a>
                            <a class="dropdown-item" href="#">Usuario 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Cerrar Sesión:
                            <?= strtoupper($_SESSION['usuario']) ?></a>
                    </li>
                </ul>
            </nav>
            <div class="card text-center mt-2" style="width:400px">
                <img class="card-img-top" src="../imagenes/simio.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>