<?php

require  __DIR__.'/../../autoloader.php';


 
    $objects = Quiz::displayQuiz();
    $json = json_encode($objects);
    echo $json;






