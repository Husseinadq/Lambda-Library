<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/slider.css">
    <title>Document</title>
</head>
<body>
  
    
<head>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
        <h2 name="Title" class="text-center">New Book</h2>
        <div class="clearfix">
            <?php 
             require_once('config.php');
             $sql="SELECT * FROM `product` ORDER by productId DESC";
             $result= mysqli_query($conn,$sql);
             if (!$result ) {
                 die("Select error");
                
             }
             
            $counter=0;
             $counter=mysqli_num_rows($result);
             
            ?>
            <div id="thumbcarousel" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                    <?php 
                    while ($counter>0 ) {
                     if ($counter>4) {
                    ?>
                    <div class="item active">
                    <?php
                           
                                
                            
                                for ($i=$counter; $i > $counter-4 ; $i--) { 
                                    $row=mysqli_fetch_assoc($result);
                                    $rowCat=$row['productcategoryId'];
                                    $sqlCat="SELECT name FROM `productcategory` where "."$rowCat"." = productcategoryId";
                                    $exe= mysqli_query($conn,$sqlCat);
                                   
                                    $rowCat=mysqli_fetch_assoc($exe);
                                    
                                    $title=$row['name'];
                                    $price=$row['price'];
                                    $category=$rowCat['name'];
                                     echo " 
                                <div data-target='#carousel' data-slide-to='$i' class='thumb'>   
                                <div class='col-lg-12 '>
                                        <div class='card'>
                                            <div class='bg-image hover-zoom ripple ripple-surface ripple-surface-light'
                                            data-mdb-ripple-color='light'>
                                            <img src='img/miracle.png'
                                                class='w-75' />
                                            <a href='#!'>
                                                <div class='mask'>
                                                <div class='d-flex justify-content-start align-items-end h-100'>
                                                    <h5><span class='badge bg-primary ms-2'>NEW</span></h5>
                                                </div>
                                                </div>
                                                <div class='hover-overlay'>
                                                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                                                </div>
                                            </a>
                                            </div>
                                            <div class='card-body'>
                                            <a href='' class='text-reset'>
                                                <h5 class='card-title mb-1'>$title</h5>
                                            </a>
                                            <a href='' class='text-reset'>
                                                <p>$category</p>
                                            </a>
                                            <h6 class='mb-1'>$$price</h6>
                                            </div>
                                        </div>
                                </div> 
                            </div>
                                ";
                            }
                          
                           ?> 
                           </div>
                           <?php 
                            }
                           $counter-=4;
                           if ($counter>4) {
                                    
                           ?>
                            
                        <!-- /item -->
                    <div class="item" >
                    <?php
                                for ($i=$counter; $i > $counter-4 ; $i--) { 
                                    $row=mysqli_fetch_assoc($result);
                                    $rowCat=$row['productcategoryId'];
                                    $sqlCat="SELECT name FROM `productcategory` where "."$rowCat"." = productcategoryId";
                                    $exe= mysqli_query($conn,$sqlCat);
                                   
                                    $rowCat=mysqli_fetch_assoc($exe);
                                    
                                    $title=$row['name'];
                                    $price=$row['price'];
                                    $category=$rowCat['name'];
                                     echo "
                                <div data-target='#carousel' data-slide-to='$i' class='thumb'>   
                                <div class='col-lg-12 '>
                                        <div class='card'>
                                            <div class='bg-image hover-zoom ripple ripple-surface ripple-surface-light'
                                            data-mdb-ripple-color='light'>
                                            <img src='img/miracle.png'
                                                class='w-75' />
                                            <a href='#!'>
                                                <div class='mask'>
                                                <div class='d-flex justify-content-start align-items-end h-100'>
                                                    <h5><span class='badge bg-primary ms-2'>New</span></h5>
                                                </div>
                                                </div>
                                                <div class='hover-overlay'>
                                                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                                                </div>
                                            </a>
                                            </div>
                                            <div class='card-body'>
                                            <a href='' class='text-reset'>
                                                <h5 class='card-title mb-1'>$title</h5>
                                            </a>
                                            <a href='' class='text-reset'>
                                                <p>$category</p>
                                            </a>
                                            <h6 class='mb-1'>$$price</h6>
                                            </div>
                                        </div>
                                </div> 
                            </div>
                                ";
                            }
                              
                           ?> 
                        
                    </div><?php
                           }
                            $counter-=4;     
                          } 
                        ?><!-- /item -->
                </div><!-- /carousel-inner -->
                <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div> <!-- /thumbcarousel -->
        </div><!-- /clearfix -->
    </div> <!-- /col-sm-6 -->
  </div> <!-- /row -->
</div> <!-- /container -->

</body>
</html>