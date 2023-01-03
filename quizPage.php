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

    <link rel="stylesheet" href="assets/style/quiz.css">

    <title>Document</title>
</head>
<body>
        <?php  include 'nav.php';?>
    <main>
        <section class="stepper">
            <div id="guidestep"><i class="fa-light fa-face-disguise"></i></div>
            <div id="toquiz">
                <div id="tqFill"></div>
            </div>
            <div id="quizstep"><i class="fa-light fa-block-question"></i></div>
            <div id="toresult">
                <div id="trFill"></div>
            </div>
            <div id="resultstep"><i class="fa-light fa-square-poll-vertical"></i></div>
        </section>
        <section id="guide" class="guide active">
            <h4><i class="uil uil-sign-alt"></i> Guide</h4>
            <div class="guide-info">  
                    <p><span class="order">1</span>this is the first information about our quiz</p>
                    <p><span class="order">2</span>this is the second information about our quiz</p>
                    <p><span class="order">3</span>this is the third information about our quiz</p>
                    <p><span class="order">4</span>this is the fourth information about our quiz</p>
                    <div class="guide-buttons">
                        <button id="exit-guide">EXIT</button>
                        <button id="start">TAKE A QUIZ</button>
                    </div>
            </div>
        </section>

        <section id="quiz" class="quiz">
            <header>
                
                <div class="progress-container">
                    <div class="progress-fill" id="progress-fill">
                        <span class="percentage" id="percentage">20%</span>
                    </div>
                </div>
            </header>

            <div class="question" id="question" >

            </div>
            <div class="answers">
                <div class="question-container">
                    <div class="qOrder">1</div>
                    <div class="option" data-number="1">
                    </div>
                </div>
                <div class="question-container">
                    <div class="qOrder">2</div>
                    <div class="option" data-number="2">
                    </div>
                </div>
                <div class="question-container">
                    <div class="qOrder">3</div>
                    <div class="option" data-number="3">
                    </div>
                </div>
                <div class="question-container">
                    <div class="qOrder">4</div>
                    <div class="option" data-number="4">
                    </div>
                </div>
                
                
                <!-- <div class="hidden" data-number="8"></div> -->
            </div>
    </section>

    <section id="result" class="result">
        <h4><i class="uil uil-feedback"></i> RESULT</h4>



        <div class="stars">
            <div class="star-fill" id="star-fill"></div>
            <img class="star-start" src="star.png" alt="" height="100%" width="20%">
            <img class="star-2" src="star.png" alt="" height="100%" width="20%">
            <img class="star-3" src="star.png" alt="" height="100%" width="20%">
            <img class="star-4" src="star.png" alt="" height="100%" width="20%">
            <img class="star-end"  src="star.png" alt="" height="100%" width="20%">
        </div>
        <div class="feedback-container">
            <h3 class="feedback" id="feedback">congrats</h3>
            <p>you have got <span id="questions-answered"></span> from <span id="questions-total"></span> points successfully</p>
            
            <div>
                <button id="exit-quiz" name="exit-quiz" userId="<?= $_SESSION['profile'][0]['id']?>">Exit Quiz</button>
            </div>
        </div>
    </section>

    </main>

    <script src="assets/js/app.js"></script>
</body>
</html>