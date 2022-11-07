<?php
  session_start();
  ob_start("ob_gzhandler");

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php
   require_once('header.php');
   ?>
</head>

<body>
    <?php
    require_once('config.php');
    $val =  $_SESSION['userId'];
    $sql="SELECT * FROM user where userId like '$val' ";
    $result= mysqli_query($conn,$sql);
        if (!$result ) {
            die("Select error");
            }
            while($row=mysqli_fetch_assoc($result))
            { 
                
                $name=$row['firstName'];
                $email=$row['userEmail'];
                $phone=$row['telephone'];
                $pass=$row['password'];
             

            }
    ?>
     <!-- main  and intro -->

     <section class="intro">
        <div class="container-lg">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="fs-3 fw-bold "> Name :<?php echo"$name";?></div>
                        <div class="fs-5 fw-bold text-muted mt-4">Email :<?php echo"$email";?></div>
                        <div class="fs-5 fw-bold text-muted mt-4">Phone :<?php echo"$phone";?></div>
                        <div class="fs-5 fw-bold text-muted mt-4">Password :<?php echo"$pass";?></div>
                    </h1>
                    
                   <?php 
                        
                         echo "<a href='editProfile.php?id=$val' class='btn btn-primary btn-lg mt-5'>Edit</a>";?>

                        
                </div>
               

                <div class="col-md-5 text-center d-none d-md-block">
                     <!-- tooltip --> 
                    <span class="toolt" data-bs-placement="bottom" title="User profile Cover">
                       <?php echo "<img class='img-fluid' src='img/profile.jpg' alt='ebook cover'>"?>
                    </span>
                </div> 
            </div>
        </div>
    </section>


                        


                       

                       
     
<!-- offcanvas-->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" 
    aria-labelledby="sidebar-label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidevar-label">My Other Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias numquam nam repudiandae assumenda suscipit esse unde, nobis aperiam tempore maiores explicabo vero quam reprehenderit ratione quis vel deserunt dignissimos perspiciatis.</p>
            <!-- dropdown -->
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="book-dropdown" data-bs-toggle="dropdown">
                    Choose a book title
                </button>
                <ul class="dropdown-menu" aria-labelledby="book-dropdown">
                    <li><a href="#" class="dropdown-item">Become a React Superhero</a></li>
                    <li><a href="#" class="dropdown-item">Become a React Superhero</a></li>
                    <li><a href="#" class="dropdown-item">Become a React Superhero</a></li>
                </ul>
            </div>
        </div>

    </div>



   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>

    <script>
        const tooltip=document.querySelectorAll('.toolt')
        tooltip.forEach(t=>{ new bootstrap.Tooltip(t)
        })
    </script>

</body>
</html>