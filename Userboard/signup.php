<!DOCTYPE html>
<head?>
    <title>Sign UP</title>
</head>
<body>
    <!-- contact form -->
    <div class="container-lg">
        <div class="text-center">
            <h2> Sign up</h2>
            <p class="lead">Unlimited Library</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <form  id="register" name="Register" method="post" action="#"  >
                    <!--Tooltip Name-->
                    <span class="toolt" data-bs-parent="bottom" title="Enter Your Name">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                                <input id="name" name="Name" class="form-control" type="text"    placeholder="Name"> 
                        </div>
                    </span>

                     <!--Tooltip Emall-->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Email">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                                <input id="email" name="Email" class="form-control" type="text"    placeholder="Email"> 
                        </div>
                    </span>

                     <!--Tooltip Phone Number -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Phone">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                 <i class="bi bi-telephone-inbound-fill"></i> 
                            </span>
                            <input id="number" name="Number" class="form-control" type="Phone"    placeholder="Phone Number"> 
                        </div>
                    </span>

                     <!--Tooltip Gender-->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Gender">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-gender-ambiguous">Gender</i>
                            </span>
                            <div class="form-check form-check-inline ms-5 me-5 mt-2">
                                <input class="form-check-input" type="radio" name="Gender" id="genderm" value="Male" >
                                <label class="form-check-label" for="genderm">Male</label>
                            </div>
                            <div class="form-check form-check-inline ms-5 me-5 mt-2">
                                <input class="form-check-input" type="radio" name="Gender" id="genderf" value="Female">
                                <label class="form-check-label" for="genderf">Female</label>
                            </div> 
                       </div>
                    </span>

                     <!--Tooltip Pass 1 -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Password">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                                <input id="pass1" name="Pass1" class="form-control" type="password"    placeholder="Password"> 
                        </div>
                    </span>

                     <!--Tooltip Pass 2 -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Password again">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-shield-lock-fill"></i>
                            </span>
                                <input id="pass2" name="Pass2" class="form-control" type="password"    placeholder="Password again"> 
                        </div>
                    </span>

                     <!--Tooltip agree -->
                    <div class="form-check mb-2 ">
                        <span class="toolt"  data-bs-parent="top" title="Agree Policy">
                            <input class="form-check-input ms-3 " type="checkbox" value="Agree" id="agree" name="Agree" onclick="submetChecker();">
                            <label class="form-check-label ms-2" for="agree">
                                By signing up, you agree to our
                                    <a href="#" class=" ">Terms</a>,
                                    <a href="#"> Data Policy</a> and 
                                    <a href="#">Cookies Policy</a> . 
                            </label>
                        </span>    
                    </div>

                      <!--Log in Option -->
                    <label class="form-check-label ms-5  mt-3">
                            By signing up, you agree to our
                                <a href="#" class=" ">Log in</a> 
                        </label>

                    <!--Submit Button and cancel -->
                    <div class="mb-4 text-center mt-3">
                            <button type="submit" class="btn btn-primary col-lg-3" id="signup" name="Signup" disabled >Sign up  </button>
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
    <!--connect sign up with js -->
    <script src="js/sign.up.js"></script>

</body>
