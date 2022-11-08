<?php 
    session_start();
    ob_start("ob_gzhandler");
   
    require_once('function.php');
    require_once('config.php');
    sessionMange();
    if(empty($_SESSION['userName'])||$_SESSION['userName']==null)
    { 
        session_destroy();
        goToPage("login");
    }
    else
    {
        $productID = $_GET['productID'];
        $userId=$_SESSION['userId'];
    addToBasket($conn,$userId,$productID);
    
    $locatiion='location:prodct.php?bookid='.$productID;
    header($locatiion);
    echo "<script>alert('Success')</script>";
    }
    

?>
