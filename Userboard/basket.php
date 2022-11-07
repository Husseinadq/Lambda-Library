<?php 
    session_start();
    ob_start("ob_gzhandler");
   
    require_once('function.php');
 require_once('config.php');
    sessionMange();
    
    $productID = $_GET['productID'];
    addToBasket($conn,1,$productID);
    $locatiion='location:prodct.php?bookid='.$productID;
    header($locatiion);

?>
