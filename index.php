<?php
$class = $_GET['class'];
$method = $_GET['method'];

$class .='Controller';

require_once 'controller/UsuariosController.php';
$obj = new $class();
$obj->$method();

?>