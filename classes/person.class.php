<?php

require  __DIR__.'/../autoloader.php';

class Person{

    private $id;
    private $username;
    private $email;
    private $password;
    private $role;

    public function __get($variable){
        return $this->$variable;
    }

    public function __set($variable,$value){
        $this->$variable = $value;
    }

    public static function signIn($user,$password){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "SELECT * FROM users WHERE password = ? AND (email = ? OR username = ?)";
        $statement = $pdo->prepare($sql);
        $statement->execute([$password,$user,$user]);
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function signOut(){
        unset($_SESSION['profile']);
    }


    public static function deleteUserAccount($id){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "DELETE FROM users WHERE id = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
    }

    public static function viewUsers(){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "SELECT * FROM users WHERE role = 2";
        $statement = $pdo->prepare($sql);
        $statement->execute();

        return $statement;
    }

    public static function viewUserScores(){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "SELECT scores.score,users.username FROM scores INNER JOIN users ON scores.userId = users.id ORDER BY scores.score DESC";
        $statement = $pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

