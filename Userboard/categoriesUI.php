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
    <title>Categories</title>
</head>
<body>
<?php 
   
   require_once('categories.php');
   ?>
    <div class="bg-light " id="contact"> 
        <?php        
       
        require_once('footer.php');
    
        ?> 
    </div>
</body>
</html>