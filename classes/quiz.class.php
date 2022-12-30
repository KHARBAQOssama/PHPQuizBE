<?php

require  __DIR__.'/../autoloader.php';

class Quiz {

    private $id;
    private $name;
    private $questionsNumber;
    private $publisher;

    public function __construct($name,$questionsNumber,$publisher){
        $this->name = $name;
        $this->questionsNumber = $questionsNumber;
        $this->publisher = $publisher;
    }

    public function createQuiz(){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "INSERT INTO quizs (name,questions,publisher) VALUES (?,?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute([
            $this->name,
            $this->questionsNumber,
            $this->publisher
        ]);
    }

    public static function viewQuizScores($id){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "SELECT * FROM scores WHERE quiz = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);

        return $statement;
    }
}