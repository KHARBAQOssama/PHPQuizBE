<?php

require  __DIR__.'/../autoloader.php';

class User extends Person {

    public function __construct($username,$email,$password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = 2;
    }

    public function signUp(){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "INSERT INTO users (username,email,password,role) VALUES (?,?,?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute([
                    $this->username,
                    $this->email,
                    $this->password,
                    $this->role
                    ]);
    }

    public static function viewOwnScores($id){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "SELECT score FROM scores WHERE userId = ? ORDER BY score DESC";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);;
    }

    

}