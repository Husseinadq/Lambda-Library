<?php
    
   
    require_once('function.php');
           ?>
<!DOCTYPE html>
<html long="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <title>Lambda</title>
        <!-- CSS only -->
        <link href="../css/main.min.css"
              rel="stylesheet" 
             >
        <!-- Bootstrap icon -->      
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <style>
        section{
            padding: 60px;
        }
    </style>
    </head>
    <body>
        <header>

            <div class="container">
                <div class="row">
                    <div class="col-sm-2 mt-3 ">
                        <a href="index.php" class="navbar-brand">
                            <span class="fw-bold text-scondary">
                                <i class="bi bi-book"></i>
                                Lambda
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-10">                       
                        <div class="row">
                            <?php
                                require_once('navbar.php');
                            ?>
                        </div>
                    </div>
                      
                 </div>
            </div>
                

            
        </header>
    </body>