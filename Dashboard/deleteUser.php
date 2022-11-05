<?php
require_once('function.php');
$id=$_GET['id'];
    deleteUser($id);
    $locatiion='location:User.php';
    header($locatiion);
?>
