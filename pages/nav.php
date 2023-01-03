<nav>
    <h3><img src="../assets/style/126.png" height="45px" alt=""></h3>
    <div class="nav">
        <div class="home"><a href="home.php">HOME</a></div>
        <div class="rank"><a href="ranking.php">RANKING</a></div>
        <div class="scores"><a href="myscores.php">MY SCORES</a></div>
    </div>
    <div class="user">
        <?php  
        // $_SESSION['profile']['username'];
        echo $_SESSION['profile'][0]['username'];
        ?>
        <div class="first-letter">
        <?php  
        // $_SESSION['profile']['username'];
        echo $_SESSION['profile'][0]['username'][0];
        ?>
        </div>
    </div>
</nav>