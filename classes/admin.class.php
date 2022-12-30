<?php

require  __DIR__.'/../autoloader.php';

class Admin extends Person{

    public static function deleteAnyQuiz($id){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "DELETE FROM quizs WHERE id = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
    }
}

