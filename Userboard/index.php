<?php
session_start();
ob_start("ob_gzhandler");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-lg">
        <div class="row">
           <?php
           require_once('header.php');
           require_once('search.php');
           require_once('categories.php');
           require_once('footer.php');
     
           ?> 
        </div>
    </div>
    
</body>
</html>