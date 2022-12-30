<?php

require  __DIR__.'/../autoloader.php';

class Question {

    private $id;
    private $title;
    private $choice1;
    private $choice2;
    private $choice3;
    private $choice4;
    private $answersNumber;
    private $quizId;

    public function __construct($title,$choice1,$choice2,$choice3,$choice4,$answersNumber,$quizId){
        $this->title = $title;
        $this->choice1 = $choice1;
        $this->choice2 = $choice2;
        $this->choice3 = $choice3;
        $this->choice4 = $choice4;
        $this->answersNumber = $answersNumber;
        $this->quizId = $quizId;
    }

    
}