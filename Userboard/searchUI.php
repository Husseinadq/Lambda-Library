<?php
  session_start();
  ob_start("ob_gzhandler");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="bg-secondary">
        <?php
          require_once('header.php');
        ?>
    </div>
   <title>Search</title>
</head>
<body>
<div class="bg-light">
        <?php
          require_once('search.php');
        ?>
    </div>
    <div class="bg-light">
    <?php
          require_once('productList.php');
        ?>
    </div>
    <div class="bg-light " id="contact"> 
        <?php        
       
        require_once('footer.php');
    
        ?> 
    </div>
</body>
</html>