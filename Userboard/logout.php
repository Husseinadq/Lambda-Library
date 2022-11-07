<?php
 session_start();
 ob_start("ob_gzhandler");
require_once('header.php');
session_destroy();
goToPage("login");
    ?>