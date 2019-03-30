<?php
class Database{
    private $serverName = "127.0.0.1";

    public $connection;
    
    public function __construct($dbname, $username, $password){
        $dbName = $dbname;
        $userName = $username;
        $password = $password;
        // Create connection
        $this->connection = mysqli_connect($this->serverName, $userName, $password, $dbName); 
        
        if (!$this->connection){ 
            die("error:" . mysqli_connect_error()); 
        }
        mysqli_query($this->connection, "SET NAMES 'utf8'");
    }

    public function __destruct(){
        mysqli_close($this->connection);
    }
}
?>