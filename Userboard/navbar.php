
<html>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-primary bg-secondary ">
            <div class="container-xxl ">
               

                <!-- toggle button for mobile nav -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <!-- navbar links -->
                <div class="col-sm-10  text-white">
                    <div class="row ">
                        <div class="collapse navbar-collapse justify-content-start align-center" id="main-nav">
                          <ul class="navbar-nav">
                              <li class="nav-item">
                                <a href="index.php" class="nav-link text-light"><p class="fs-5 fw-bold">Home</p></a>  
                              </li>
                              <li class="nav-item">
                                <a href="categoriesUI.php" class="nav-link text-light"><p class="fs-5 fw-bold">Categories</p></a>  
                              </li>
                             
                              <li class="nav-item">
                                <a href="searchUI.php" class="nav-link text-light"><p class="fs-5 fw-bold">Search</p></a>  
                              </li>
                             
                              <li class="nav-item">
                                <a href="#contact" class="nav-link text-light"><p class="fs-5 fw-bold">Contact</p></a>  
                              </li>
                              <li class="nav-item">
                                <a href="about.php" class="nav-link text-light"><p class="fs-5 fw-bold">About</p></a>  
                              </li>
                           </ul>
                           
                            <div class="position-absolute top-0 end-0">
                            <a href="basketUI.php" class="btn btn-primary btn-sm end-0 top-0 mt-3 me-3 b-2 fw-bold fs-5 text-light">
                              <span class="bi bi-cart3"></span> Basket</a>
                             <?php
                                if (!showContent()) {
                                  echo " 
                              <a href='login.php' class='btn btn-primary btn-sm end-0 top- mt-3 me-3 fw-bold fs-5 text-light'>Log in </a> 
                              <a href='signup.php' class='btn btn-primary btn-sm end-0 top-0 mt-3 me-3 fw-bold fs-5 text-light'>Sign up </a> 
                              ";
                                }
                              
                                if(showContent())
                                echo " 
                                <a href='logout.php' class='btn btn-primary btn-sm end-0 top- mt-3 me-3 fw-bold fs-5 text-light'>Log Out </a> 
                                <a href='profile.php' class='btn btn-primary btn-sm end-0 top-0 mt-3 me-3 fw-bold fs-5 text-light'> <span class='bi bi-person-circle'></span></a>  ";
                              ?>
                            </div>
                        </div> 
                     </div>
                        
                        
                  </div>
            </div>
        </nav>
    </body>
</html>