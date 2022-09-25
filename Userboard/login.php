<!DOCTYPE html>
<head?>
    <title>Login</title>
</head>
<body>
     <!-- login form -->
    <div class="container-lg">
        <div class="text-center">
            <h2> Log IN</h2>
            <p class="lead">Unlimited Library</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-4">
                <form  id="login" name="Login" method="post" action="#"  >
                   
                    <!--Tooltip Emall-->
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
                                <a href="#" class=" ">Restore Password</a> 
                        </label>

                    
                    <!--Submit Button  -->
                    <div class="mb-4 text-center mt-3">
                            <button type="submit" class="btn btn-primary col-lg-3" id="signup" name="Signup"  > 
                                <i class="bi bi-box-arrow-in-right"> </i>
                                Log in  </button>
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