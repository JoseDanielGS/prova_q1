<?php

interface IDatabases {
    public function insert($object);
    public function autenticacao($senha, $email);
    public function connect();
    public function setTableName($name);
}

?>