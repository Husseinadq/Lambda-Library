<?php
require_once('function.php');
$id=$_GET['id'];
    deleteProduct($id);
    $locatiion='location:product.php';
    header($locatiion);
?>
