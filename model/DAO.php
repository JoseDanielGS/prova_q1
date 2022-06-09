<?php

class DAO implements IDatabases{

    protected $adapter;

    public function _construct(IDatabases $object){
        $this->adapter = $object;
        $this->connect();
    }

    public function insert($object){
        $this->adapter->insert($object);
    }
    
    public function connect(){
        $this->adapter->connect();
    }
        
    public function autenticacao($senha, $email){
		$this->adapter->autenticacao($senha, $email);
	}

    public function setTableName($name){
		$this->adapter->setTableName($name);
	}

}



?>