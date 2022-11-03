
<?php
require_once('function.php');
$id=$_GET['id'];
    deleteCategories($id);
    $locatiion='location:categories.php';
    header($locatiion);
?>