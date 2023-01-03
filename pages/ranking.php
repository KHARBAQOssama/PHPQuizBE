<?php 
include_once '../assets/phpScripts/script.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <!-- css  -->
    <link rel="stylesheet" href="../assets/style/home.css">

    <title>Document</title>
</head>
<body>
        <?php include 'nav.php';?>
    <main>
        <div style="width: 60%;">
                    <table class="ranking-table" style="width: 100%;">
                                            <tr class="">
                                                <td class="">N</td>
                                                <td class="">USER NAME</td>
                                                <td class="">SCORE</td>
                                                
                                            </tr> 
                                            
                                            <?php 
                                                listScores();
                                            ?> 
                                           </table></div>
    </main>
    

    <script src="../assets/js/app.js"></script>
</body>
</html>