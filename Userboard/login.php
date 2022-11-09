<?php
 session_start();
 ob_start("ob_gzhandler");

    ?>
<!DOCTYPE html>
<head?>
    <title>Login</title>
</head>
<body>
    

    <?php
    
    $E_email="";
    $E_pass="";
    $er="";
    $Ok=1;
   
    ?> 
    <div class="bg-light">
    <div class="bg-secondary">
        <?php require_once('header.php');?>
    </div>
     <!-- login form -->
    
    <div class="container-lg ">
        <div class="text-center">
            <h2 class=" mt-5 mb-3 text-primary text-uppercase  mb-3 fw-bold"> Log IN</h2>
            <p class="lead text-uppercase text-primary mt-1">Unlimited Library</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-4">
                <form  id="loginForm" name="LoginForm" method="post" action=""  >
                   
                    <!--Tooltip Email-->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Email">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                                <input id="email" name="Email" class="form-control" type="text"    placeholder="Email">   
                        </div>
                    </span>

                    <!--Tooltip Pass  -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Password">
                        <div class="mb-2 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                                <input id="pass" name="Pass" class="form-control" type="password"    placeholder="Password"> 
                        </div>
                    </span>

                    <!--Log in Option -->
                    <label class="form-check-label ms-3  mt-2">
                             Don't have an account?
                                <a href="signup.php" class=" ">Sign up</a> 
                        </label>

                    <!--Forgo pass -->
                    <label class="form-check-label ms-3  mt-2">
                            Forgot password?
                                <a href="RestorePassword.php" class=" ">Restore Password</a> 
                        </label>

                    
                    <!--Submit Button  -->
                         <div class="mb-4 text-center mt-5">
                            <button type="submit" class="btn btn-primary col-lg-3" id="login" name="Login"  > 
                                <i class="bi bi-box-arrow-in-right"> </i>
                                Log in  </button>
                        </div>
                </form>
                <?php
                 if(isset($_POST['Login']))
                 {   
                    require_once('config.php');
                     if (isset($_POST['Email']) && isset($_POST['Pass'])) {
                         $email=mysqli_real_escape_string($conn,$_POST['Email']);
                         $pass=md5(mysqli_real_escape_string($conn,$_POST['Pass']));
                         if (empty($email)) {
                             echo $E_email="pleas enter your email ";
                             $Ok=0;
                         }
                         if (empty($pass)) {
                             $E_pass="pleas enter your password ";
                             $Ok=0;
                         }
                         echo "<b>$Ok</b>";
                         if ($Ok==1) {
                             $sql="SELECT * FROM `user` where userEmail = '$email'";
                             $exe=mysqli_query($conn,$sql);
                             if (!$exe) {
                                echo" $sql is wrong";
                             }
                            
                             while($row=mysqli_fetch_assoc($exe))
                             {
                                  

                                 if ($email===$row['userEmail'] && $pass=== $row['password']) {
                                     $_SESSION['userId']=$row['userId'];
                                     $_SESSION['userName']=$row['firstName'];
                                     $_SESSION['start_time'] = time(); 
                                     $_SESSION['destroy_time'] =1800 /* (30*60 ) */; 
                                    goToPage("index");
                                 }
                             }
                             if(isset($_POST['Email']) && isset($_POST['Pass'])){
                                 $er='Error in email or pass';
                             }
                         }
                     }
                 }
                ?>
               
            </div>  
        </div>      
    </div>
    <div class="bg-light " id="contact"> 
        <?php        
       
        require_once('footer.php');
    
        ?> 
    </div>
    </div>  
    <!--for toolt -->
    <script>
        const tooltip=document.querySelectorAll('.toolt')
        tooltip.forEach(t=>{ new bootstrap.Tooltip(t)
        })
    </script>
      
    <!--connect log in with js -->
    <script src="js/log.in.js"></script>
</body>
<?php
    ob_end_flush();
?>