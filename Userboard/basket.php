<?php
require_once('config.php');
    include('function.php');
    $productID = $_GET['productID'];
    addToBasket($conn,3,$productID);
    //$val = $_GET['category'];
    $locatiion='location:prodct.php?bookid='.$productID;
    header($locatiion);

?>
