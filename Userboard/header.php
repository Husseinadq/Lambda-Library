<!DOCTYPE html>
<html long="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <title>Lambda</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
              rel="stylesheet" 
              integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
              crossorigin="anonymous">
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
                        <a href="#home" class="navbar-brand">
                            <span class="fw-bold text-scondary">
                                <i class="bi bi-book"></i>
                                Lambda
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-10">
                          <div class="row">
                            <div class="position-relative">
                                <div class="position-absolute top-0 end-0">
                                    <button name="login" id="login" type="button" class="btn btn-outline-primary btn-sm end-0 top-0 m-2 ">Log in</button>
                                    <button name="signup" id="signup" type="button" class="btn btn-outline-primary btn-sm end-0 top-0  m-2">Sign up</button>
                                </div> 
                            </div>
                        </div>
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