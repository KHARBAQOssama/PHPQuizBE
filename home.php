<?php 
require  __DIR__.'/autoloader.php';
include_once 'assets/phpScripts/script.php';
if(!isset($_SESSION['profile'])){
    header('location: sign.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <!-- css  -->
    <link rel="stylesheet" href="assets/style/home.css">

    <title>Document</title>
</head>
<body>
        <?php include 'nav.php';?>
    <main>
        <div  class="quiz" >
            <div class="take-it js">
                <button class="take-quiz-btn" id="take-js"><a href="quizPage.php">TAKE THE QUIZ</a></button>
            </div>
            <div class="quiz-js-image">
            </div>
            <h4>PHP Quiz</h4>
            <h4>10 Questions</h4>
        </div>
    </main>
    <p id="potTextHer"></p>

    <script src="assets/js/app.js"></script>
</body>
</html>