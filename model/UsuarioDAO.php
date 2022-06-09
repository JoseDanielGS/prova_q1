<?php

require_once "DAO.php";

class UsuarioDAO extends DAO{

    private $tableName = "usuarios";

    function __construct(IDatabases $database){
        parent::__construct($database);
        parent::setTableName($this->tableName); 
    }

}

?>