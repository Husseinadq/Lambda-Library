<?php
session_start();
ob_start("ob_gzhandler");

?>
<html>
    <body> 
    <div class="bg-secondary">
        <?php
          require_once('header.php');
          sessionMange();
        ?>
    </div>
        <!-- Categories -->
        <div class="bg-light">
        <div class="container-lg">
            <div class="row">

                <?php
                    require_once('config.php');
                ?>
                <div class="col-12 bg-light ">
                     <div class="d-flex flex-wrap text-center">
                    <?php
                        $val =  $_SESSION['userId'];//$_GET['SearchText'];
                        $sqlBas="SELECT * FROM cart where `userId` like '$val'";
                        $resultBas= mysqli_query($conn,$sqlBas);
                        if (!$resultBas ) {
                            die("Select error");
                        }
                        
                        while($row=mysqli_fetch_assoc($resultBas))
                        {   
                            $cartid=$row['cartId'];
                           // $title=$row['name'];SELECT * FROM `cartitem_`
                           // $price=$row['price'];
                           $sql="SELECT * FROM cartitem_ where `cartId` like '$cartid'";
                           $result= mysqli_query($conn,$sql);
                           if (!$result ) {
                               die("Select error");
                           }
                           while($row2=mysqli_fetch_assoc($result))
                            {   
                                $productid=$row2['productId'];
                                $sql2="SELECT * FROM product where `productId` like '$productid'";
                                $result2= mysqli_query($conn,$sql2);
                                if (!$result2 ) {
                               die("Select error");
                                 }
                           while($row3=mysqli_fetch_assoc($result2))
                            {   
                                $bookid=$row3['productId'];
                                $title=$row3['name'];
                                $cateId=$row3['productcategoryId'];
                                $cateName=" ";
                                $image=$row3['productImage'];
                                $price=$row3['price'];

                                $sql3="SELECT * FROM productcategory where `productcategoryId` like '$cateId'";
                                $result3= mysqli_query($conn,$sql3);
                                if (!$result3 ) {
                               die("Select error");
                                 }
                                 while($row4=mysqli_fetch_assoc($result3))
                                 {  
                                    $cateName=$row4['name'];
                                  }

                            echo " 
                                    <div class='col-lg-3 col-md-4 mt-4 me-2'>
                                    <div class='card mt-4 bg-secondary'>
                                        <div class='bg-image hover-zoom ripple ripple-surface ripple-surface-light'
                                        data-mdb-ripple-color='light'>
                                        <img src='img/$image'
                                            class='w-75 mt-4' />
                                        <a href='#!'>
                                            <div class='mask'>
                                            <div class='d-flex justify-content-start align-items-end h-100'>
                                                <h6><span class='badge bg-primary ms-2 mt-2'>$cateName</span></h6>
                                            </div>
                                            </div>
                                            <div class='hover-overlay'>
                                            <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                                            </div>
                                        </a>
                                        </div>
                                        <div class='card-body'>
                                        <a href='prodct.php?bookid=$bookid' class=''>
                                            <h5 class='card-title mb-1 text-light text-uppercase fw-bold w-100'>$title</h5>
                                        </a>
                                        
                                        <h6 class='mb-1 text-light text-uppercase fw-bold w-100'>$$price</h6>
                                        </div>
                                    </div>
                                    </div> ";
                            }
                            }
                        }
                           
                    ?> 
                     </div>  
                </div>

            </div>
            <div class="row">
            <div class="col-12 bg-light ">
                   
                        <form action="" name="Buy" method="post" >
                        <div class="mb-4 text-center mt-3">
                            <button type="submit" class="btn btn-primary col-lg-3" id="buy" name="botBuy"  >Buy </button>
                        </div>
                        </form>
                        <?php
                    if(isset($_POST['botBuy']))
                    {
                        require_once('config.php');
                        require_once('function.php');

                        buy($conn, $_SESSION['userId']);
                    }
                    
               ?>
                    
                </div>
            </div>
        </div>
        </div>
        <div class="bg-light " id="contact"> 
        <?php        
       
        require_once('footer.php');
    
        ?> 
    </div>
    </body>

</html>