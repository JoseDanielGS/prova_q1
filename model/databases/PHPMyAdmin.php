<?php

class PHPMyAdmin implements IDatabases {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "pweb";
    private $tbname;
    private $conexao;

    public function _construct($host = null, $user = null, $password = null, $dbname = null){
        $this->create();
    }

    public function create(){
        $pdo = new PDO("mysql:host=$this->host","$this->user", "$this->password");
        $pdo->query("create database if not exists $this->dbname");
        $pdo->query("use $this->dbname");
    }

    public function connect(){
        $this->conexao = new PDO("mysql:host=$this->host; dbname = $this->dbname", $this->user, $this->password);
    }

    public function insert($object){
        $stm = $this->conexao->prepare(" INSERT INTO `usuario`.`usuario`
        (`nome`,
        `nomeCompleto`,
        `email`,
        `senha`)
        VALUES
        (:nome,
        :nomeCompleto,
        :email,
        :senha);");

        $stm->bindValue(':nome', $usuario->getNome());
        $stm->bindValue(':email', $usuario->getEmail());
        $stm->bindValue(':senha', $usuario->getSenha());
        return $stm->execute();
    }

    public function autenticacao($senha, $email){
        $stm = $this->conexao->prepare("SELECT * FROM `usuarios` as user 
        WHERE user.email = :email 
        AND user.senha = :senha");
        
        $stm->bindValue(':nome', $usuario->getNome());
        $stm->bindValue(':email', $usuario->getEmail());
        $stm->bindValue(':senha', $usuario->getSenha());
        return $stm->execute();
    }

    public function setTableName($name){
        $this->tbname = $name;
    }


}

?>