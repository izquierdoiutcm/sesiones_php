<?php
    session_start();
    include_once('validar.php');
    if($_REQUEST['submit']){
        $usuario = test_input($_POST['user']);
        $clave = test_input($_POST['clave']);
        include('../modelo/modelo_usuario.php');
        $m_usuario = new Usuarios($usuario, $clave);
        if(!is_null($m_usuario->buscarUsuario())){
            $nivel = $m_usuario->buscarNivel($usuario);
            $_SESSION['usuario'] = $usuario;
            $_SESSION['nivel'] = $nivel;
            header ('location:../vista/principal.php');
        }else{
            header('location:../vista/form_ingreso.php?error=' . "true");
        }
}else{
    header('location:vista/form_ingreso.php');
}