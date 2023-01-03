<?php

require  __DIR__.'/../../autoloader.php';
session_start();


if(isset($_POST['sign-up']))  signUp();
if(isset($_POST['sign-in']))  signIn();
if(isset($_GET['id']))        saveScore();




function signUp(){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User($username,$email,$password);
    $user->signUp();

    $_SESSION['profile'] = Person::signIn($email,$password);
    header('location: ../../home.php');
}



function signIn(){
    $email = $_POST['email-in'];
    $password = $_POST['password-in'];

    $_SESSION['profile'] = Person::signIn($email,$password);
    header('location: ../../home.php');
}

function saveScore(){
    $id = $_GET['id'];
    $score = $_GET['score'];

    $newScore = new Score($score,$id);
    $newScore->saveScore();

    unset($_GET['id']);
    unset($_GET['score']);

    header('location: ./../../home.php');
}