<?php
require_once "model/databases/IDatabases.php";
require_once "model/databases/PHPMyAdmin.php";
require_once 'model/Usuario.php';
require_once 'model/UsuarioDAO.php';


    class UsuariosController {
        private $database; 

        public function store(){
            $this->database = new PHPMyAdmin();
            $this->usuarioDAO = new UsuarioDAO($this->database);
            $this->usuario = new Usuario();
            //echo "22222: ".$_REQUEST['nome'];
            $this->usuario->setNomeUsuario($_REQUEST['nome']);
            $this->usuario->setEmail($_REQUEST['email']);
            $this->usuario->setSenha($_REQUEST['senha']);
            if($this->usuarioDAO->insert($this->usuario)){
                $_REQUEST['sucesso'] = true;
                require_once 'view/usuariosInsert.php';
            }
    
        }

        public function autenticar(){
            $this->database = new PHPMyAdmin();
            $this->usuarioDAO = new UsuarioDAO($this->database);
            $this->usuario = new Usuario();

            $email = $_REQUEST['email'];
            $senha = $_REQUEST['senha'];

            if($this->usuarioDAO->autenticacao($senha, $email)){
                $_REQUEST['sucessoAutenticacao'] = true;
                require_once 'view/usuariosInsert.php';
            }
    
        }

    }


?>