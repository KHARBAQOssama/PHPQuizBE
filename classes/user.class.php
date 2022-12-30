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

    public static function viewUserScores($id){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "SELECT * FROM scores WHERE user = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);

        return $statement;
    }

    public static function viewUserQuiz($id){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "SELECT * FROM quizs WHERE publisher = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);

        return $statement;
    }
}