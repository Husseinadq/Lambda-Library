<?php
  session_start();
  ob_start("ob_gzhandler");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="bg-secondary">
        <?php
          require_once('header.php');
        ?>
    </div>
</head>
<body>
    <?php
    require_once('config.php');
    $val = $_GET['bookid'];
    $sql="SELECT * FROM product where productId like '$val' ";
   // $sql="SELECT p.* ,r.* FROM product p INNER JOIN reviews r on p.productId=r.productId WHERE p.productId like '$val'";
    $result= mysqli_query($conn,$sql);
        if (!$result ) {
            die("Select error");
            }
            while($row=mysqli_fetch_assoc($result))
            { 
                $bookid=$row['productId'];
                $title=$row['name'];
                $price=$row['price'];
                $descr=$row['descr'];
                $author=$row['author'];
                $image=$row['productImage'];

            }
    ?>
     <!-- main  and intro -->

     <section class="intro bg-light">
        <div class="container-lg">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="display-3 text-uppercase"><?php echo"$title";?></div>
                        <div class="display-5 text-muted text-uppercase">For <?php echo"$author";?></div>
                    </h1>
                    <p class="lead my-4 text-muted">Lorem ipsum dolor sit amet consectetur 
                         consequuntur.</p>
                   <?php 
                        
                         echo "<a href='basket.php?productID=$bookid' class='btn btn-primary btn-lg'>Buy Now</a>";?>

                        <!-- open sidebar / offcanvas-->
                        <a href="#sidebar" class="d-block mt-3" data-bs-toggle="offcanvas"
                            role="button" aria-controls="sidebar">
                            Explore my other books
                        </a>
                </div>
               

                <div class="col-md-5 text-center d-none d-md-block">
                     <!-- tooltip --> 
                    <span class="toolt" data-bs-placement="bottom" title="Net Ninga Book Cover">
                       <?php echo "<img class='img-fluid' src='img/$image' alt='ebook cover'>"?>
                    </span>
                </div> 
            </div>
        </div>
    </section>


     <!-- reviews list-->
     <section id="reviews" class=" bg-secondary">
        <div class="container-lg">
            <div class="text-center">
                <h2> <i class="bi bi-stars"></i> Book Reviews </h2>
                <p class="lead">What my students have said about the book ...</p>
            </div>
        
            
            <div class="row justify-content-center my-5">
                <div class="col-lg-g">
                    <div class="list-group">

                    <?php
                    
                    require_once('config.php');
                    $val = $_GET['bookid'];
                    $sql2="SELECT u.firstName ,r.* FROM user u INNER JOIN reviews r on u.userId=r.userId WHERE r.productId like '$val'";
                    $reviews= mysqli_query($conn,$sql2);
                        if (!$result ) {
                            die("Select error");
                            }
                            
                            
                while($review=mysqli_fetch_assoc($reviews))
                    { 
                                $username=$review['firstName'];
                                $revTitle=$review['title'];
                                $text=$review['text'];
                                ?>
                        <div class="list-group0item py-3">
                            <div class="pb-2">
                                <?php
                                    for ($i=$review['stars']; $i >0; $i--) { 
                                      ?>
                                       <i class="bi bi-star-fill"></i>
                                      <?php
                                    }
                                ?>
                               
                              
                            </div>
                            <h5 class="mb-1"><?php echo "$revTitle";?></h5>
                            <p class="mb-1"><?php echo "$text";?></p> 
                            <small>Review by <?php echo "$username";?></small>
                        </div>
                    <?php
                }
                ?>
                        


                       

                       
                    </div>
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