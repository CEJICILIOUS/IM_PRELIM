<?php
// $newconnection = new Connection();
Class Connection{
    private $server = "mysql:host=localhost;dbname=prelim";
    private $user = "root";
    private $pass = "";

private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
protected $con;

public function OpenConnection(){
    try{
        $this->con = new PDO($this->server, $this->user, $this->pass, $this->options); return $this->con;
    }
    catch(PDOException $e){
        echo "There is some problem is the connection: ".$e -> getMessage();
    }
}
public function closeConnection(){$this -> con = null;}
}

?>