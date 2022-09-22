<!DOCTYPE html>
<head?>
    <title>Sign UP</title>
</head>
<body>
    <!--include header-->
    <?php
        require_once('header.php');
    ?>

    <!--contact form-->
    <div class="container-lg">
        <div class="text-center mt-3">
            <h2> Get in Touch</h2>
            <p class="lead">Questions to ask? Fill out the form to contact us directly...</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <form  id="contact" name="Contact" method="post" action="#" >
                        <!--Tooltip-->
                        <span class="toolt" data-bs-parent="bottom" title="Enter Your Email">
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" name="Email" id="email" class="form-control" placeholder="Enter your Email"> 
                            </div>
                        </span>
                        <span  class="toolt" data-bs-parent="bottom" title="Enter Your Name">
                            <div class="mab-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" class="form-control" name="Name" id="name"placeholder="Enter your Name">
                            </div>
                        </span>
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
            </div>

        </div>
    </div>


    <!--include footer-->
    <?php
        require_once('footer.php');
    ?>
</body>