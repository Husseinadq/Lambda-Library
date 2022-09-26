<!DOCTYPE html>
<head?>
    <title>Restore</title>
</head>
<body>
     <!-- login form -->
    <div class="container-lg">
        <div class="text-center">
            <h2>Restore Password</h2>
            <p class="lead">Unlimited Library</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-4">
                <form  id="restorePassword" name="RestorePassword" method="post" action="#"  >
                   
                    <!--Tooltip Emall-->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Email">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                                <input id="email" name="Email" class="form-control" type="text"    placeholder="Email"> 
                        </div>
                    </span>

                    <!--sign up Option -->
                    <label class="form-check-label ms-3  mt-2">
                             Don't have an account?
                                <a href="signup.php" class=" ">Sign up</a> 
                        </label>

                    <!--log in option -->
                    <label class="form-check-label ms-3  mt-2">
                            I have an account?
                                <a href="login.php" class=" ">Log in</a> 
                        </label>

                    
                    <!--Submit Button  -->
                    <div class="mb-4 text-center mt-3">
                            <button type="submit" class="btn btn-primary col-lg-3" id="signup" name="Signup"  > 
                                <i class="bi bi-bootstrap-reboot"></i>
                                Restore  </button>
                        </div>
                </form>
            </div>  
        </div>      
    </div>

    <!--for toolt -->
    <script>
        const tooltip=document.querySelectorAll('.toolt')
        tooltip.forEach(t=>{ new bootstrap.Tooltip(t)
        })
    </script>
</body>