<?php
    class Usuarios{
        private $datos_usuarios = array(
            'carlos' => '123',
            'aixa' => '456',
            'jose' => '789'
        );
        private $nivel_usuario = array(
            'carlos' => 'adm',
            'aixa' => 'user',
            'jose' => 'adm'
        );
        private $usuario_ingresado;
        private $clave_ingresada;

        public function __construct($usuario_ingresado, $clave_ingresada){
            $this->usuario_ingresado = $usuario_ingresado;
            $this->clave_ingresada = $clave_ingresada;
        }
        function buscarUsuario(){
            $clave = NULL;
            if(array_key_exists($this->usuario_ingresado, $this->datos_usuarios)){//valor_buscar, donde buscar
                $clave = array_search($this->clave_ingresada, $this->datos_usuarios); //busca valor y devuelve la clave
                if($clave != $this->usuario_ingresado){
                    $clave = NULL;
                }
            }
            return $clave;
        }
        function buscarNivel($usuario_permitido){
            $tipo_usuario = NULL;
            foreach($this->nivel_usuario as $usuario => $nivel){
                if($usuario === $usuario_permitido){
                    $tipo_usuario = $nivel;
                }
            }
            return $tipo_usuario;
        }
    }
