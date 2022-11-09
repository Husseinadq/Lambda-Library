
<!DOCTYPE html>
<head?>
    <title>Sign UP</title>
</head>
<body>
    <!--include header-->
    <div class="bg-secondary">
        <?php
          require_once('header.php');
        ?>
    </div>

    <!--contact form-->
    <div class="container-lg bg-secondary ">
        <div class="text-center text-uppercase text-light  ">
            <h2 class=" fw-bold m-5 "> Get in Touch</h2>
            <p class="lead m-5">Questions to ask? Fill out the form to contact us directly...</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <form  id="contact" name="Contact" method="post" action="#" >
                        <!--Tooltip User Email-->
                        <span class="toolt" data-bs-parent="bottom" title="Enter Your Email">
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" name="Email" id="email" class="form-control" placeholder="Enter your Email"> 
                            </div>
                        </span>
                         <!--Tooltip User Name-->
                        <span  class="toolt" data-bs-parent="bottom" title="Enter Your Name">
                            <div class="mab-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" class="form-control" name="Name" id="name"placeholder="Enter your Name">
                            </div>
                        </span>
                         <!--Tooltip ContactText-->
                        <span  class="toolt" data-bs-parent="bottom" title="Enter Your Question">
                            <div class="form-floating mb-4 mt-4">
                                <textarea name="ContactText" id="contactText"  class="form-control" style="height: 140px;"></textarea>
                                <label for="query" >Your question ...</label>
                            </div>
                        </span>
                         
                        <div class="mb-4 text-center">
                            <button type="submit"  name="Contact" id="contact" class="btn btn-primary">Submit  </button>
                        </div>              
                </form>

                 <!--Insert into database -->
               <?php
                    if(isset($_POST['Contact']))
                    {
                        require_once('config.php');
                        $name=$_POST['Name'];
                        $email=$_POST['Email'];
                        $text=$_POST['ContactText'];

                        // to fixe single quote
                        $textReplace= str_replace("'","''","$text");

                        $sql= "INSERT INTO `contact` (`id`, `name`, `text`,`email`) VALUES (NULL, '$name', '$textReplace','$email');";
                        $result= mysqli_query($conn,$sql);
                        if(!$result)
                        {
                            echo "Error : ". $sql ;
                        }
                        echo "<script>alert('Success')</script>";
                        mysqli_close($conn);
                    }
                    
               ?>
            </div>

        </div>
    </div>


    <!--include footer-->
    
</body>