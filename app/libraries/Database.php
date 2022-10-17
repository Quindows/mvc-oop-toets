<?php

class Database{
    private $dbhost = DB_HOST;
    private $dbuser = DB_USER;
    private $dbname = DB_NAME;
    private $dbpass = DB_PASS;
    private $dbHandler;

    public function __construct(){
        $conn = "mysql:host=$this->dbhost;dbname=$this->dbname";

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $this->dbHandler = new PDO($conn, $this->dbuser, $this->dbpass, $options);

        try{
            $this->dbHandler = new PDO($conn, $this->dbuser, $this->dbpass, $options);
        } catch(PDOExeption $e){
            echo "er is een probleem met de DB";
        }
    }

    public function query($sql){
        $this->statement = $this->dbHandler->prepare($sql);
    }

    public function bind($parameter, $value, $type=null){
        if(is_null($type)){
            switch($value){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    public function execute(){
        return $this->statement->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function single(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }
}