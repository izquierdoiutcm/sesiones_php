<?php
    session_start();

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    include('../templates/header.php');
?>
<div class='container' id='principal'>
    <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-8'>
            <img src="../imagenes/logo.png" class="mx-auto d-block">
            <div class="card bg-primary mt-5 text-center">
                <div class="card-body text-white font-weight-bold">
                    <h2>ACCESO AL SISTEMA<h2>
                </div>
            </div>
            <form action="../controlador/controlador_ingreso.php" autocomplete='off' method='post'>
                <div class="form-group mt-3">
                    <label for="usuario">USUARIO:</label>
                    <input type="text" class="form-control" placeholder="Ingrese su nombre de usuario" name="user"
                        required>
                </div>
                <div class="form-group mt-3">
                    <label for="clave">CLAVE DE ACCESO:</label>
                    <input type="password" class="form-control" placeholder="Ingrese la clave de acceso" name="clave"
                        required>
                </div>
                <div class="form-group mt-3">
                    <input type='submit' class="btn btn-primary" value='VALIDAR' name='submit'>
                </div>
            </form>
        </div>
        <div class='col-sm-2'></div>

    </div>
    <?php if(isset($_GET['error'])){ ?>
    <div class='container'>
        <div class='row'>
            <div class='col-sm-2'></div>
            <div class='col-sm-8'>
                <div class="card bg-danger mt-5 text-center">
                    <div class="card-body text-white font-weight-bold">
                        <h2>CLAVE INVÁLIDA<h2>
                    </div>
                </div>
            </div>
            <div class='col-sm-2'></div>
        </div>
    </div>
    <?php } ?>
    <?php include('../templates/footer.php'); ?>