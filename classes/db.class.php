<?php
class Db {
    private $dsn = "mysql:host=localhost;dbname=quiz";
    private $username = "root";
    private $password = "";
    
    public function connection(){
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}



?>