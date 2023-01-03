<?php

require  __DIR__.'/../autoloader.php';

class Quiz {

    private $id;
    private $name;
    private $questionsNumber;

    
    public static function displayQuiz(){
        // global $pdo;
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "SELECT * FROM questions;";
        $statement = $pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}