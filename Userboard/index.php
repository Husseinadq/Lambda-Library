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
    <div class="bg-light">
    <div class="bg-secondary">
        <?php
          require_once('header.php');
        ?>
    </div>
    <div class="bg-light">
        <?php
          require_once('search.php');
        ?>
    </div>
    <div class="bg-secondary">
        <?php
          require_once('categories.php');
        ?>
    </div>
    <div class="bg-light">
        <?php
          require_once('productList.php');
        ?>
    </div>
    <div class="bg-secondary " id="contact"> 
        <?php        
       
        require_once('contact.php');
    
        ?> 
    </div>
</div>
    
</body>
</html>