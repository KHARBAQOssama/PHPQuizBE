<?php 
include_once 'assets/phpScripts/script.php';
if(isset($_SESSION['profile'])){
    // header('location: home.php');
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
    <link rel="stylesheet" href="assets/style/sign.css">

    <title>Document</title>
</head>
<body>
    <nav>
        <h3><img src="assets/style/126.png" height="45px" alt=""></h3>
        <button id="guest">PLAY AS A GUEST</button>
    </nav>
    <main>
        <div class="sign-container">
            <header>
                <div class="up active" id="up">SIGN UP</div>
                <div class="in" id="in">LOG IN</div>
            </header>
            <form id="sign-up-form" action="assets/phpScripts/script.php" method="post" class="active">
                <input type="text" name="username" id="username" placeholder="USERNAME">
                <input type="email" name="email" id="email" placeholder="EMAIL">
                <input type="password" name="password" id="password" placeholder="PASSWORD">
                <input type="password" name="pass-confirmation" id="pass-confirmation" placeholder="REPEAT PASSWORD">
                <button name="sign-up">REGISTER</button>
            </form>
            <form id="sign-in-form" action="assets/phpScripts/script.php" method="post">
                <input type="email" name="email-in" id="email-in" placeholder="EMAIL">
                <input type="password" name="password-in" id="password-in" placeholder="PASSWORD">
                <button name="sign-in">LOG IN</button>
            </form>

        </div>
        
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>