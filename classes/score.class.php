<?php

require  __DIR__.'/../autoloader.php';

class Score {
    private $id;
    private $score;
    private $userId;
    
    public function __construct($score,$userId){
        $this->score = $score;
        $this->userId = $userId;
    }

    public function saveScore(){
        $conn = new Db;
        $pdo = $conn->connection();
        $sql = "INSERT INTO scores (score,userId) VALUES (?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute([
                    $this->score,
                    $this->userId
                    ]);
    }
}