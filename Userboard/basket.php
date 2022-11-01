<?php
require_once('config.php');
    include('function.php');
    $productID = $_GET['productID'];
    addToBasket($conn,1,$productID);
    //$val = $_GET['category'];
    $locatiion='location:prodct.php?bookid='.$productID;
    header($locatiion);

?>
