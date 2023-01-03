<nav>
    <h3><img src="assets/style/126.png" height="45px" alt=""></h3>
    <div>
        <?php  
        // $_SESSION['profile']['username'];
        echo $_SESSION['profile'][0]['username'];
        ?>
        <div>
        <?php  
        // $_SESSION['profile']['username'];
        echo $_SESSION['profile'][0]['username'][0];
        ?>
        </div>
    </div>
</nav>