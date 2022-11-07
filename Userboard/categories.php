<html>
    <body> 
        <!-- Categories -->
        <div class="container-lg">
            <div class="row">
            <h2 name="Title" class="text-center text-uppercase">categories</h2>
                <div class="col-3 bg-primary ">
                    <div class="list-group mt-3" id="list-tab" role="tablist">
                        <?php
                         require_once('config.php');
                         $sqlc="SELECT * FROM productcategory  ";
                         $resultc= mysqli_query($conn,$sqlc);
                         if (!$resultc ) {
                             die("Select error");
                         }

                         while($row=mysqli_fetch_assoc($resultc))
                         { 
                             $titalc=$row['name'];
                             $categoriesId=$row['productcategoryId'];
                            
                             echo " 
                             <a class='list-group-item list-group-item-action'  id='list-home-list' data-toggle='list' href='categoriesUI.php?category=$categoriesId' role='tab' aria-controls='home'>$titalc </a>
                             ";
                         }
                        ?>
                    
                    </div>
                </div>
                <div class="col-9 bg-secondary ">
                     <div class="d-flex flex-wrap text-center">
                    <?php

                        if ($_GET['category']=='') {
                            $val ="1";
                        }
                        else
                        {
                            $val = $_GET['category'];
                        }
                        $sql="SELECT * FROM product where productcategoryId like '$val' ";
                        $result= mysqli_query($conn,$sql);
                        if (!$result ) {
                            die("Select error");
                        }
                        
                        while($row=mysqli_fetch_assoc($result))
                        { 
                            $bookid=$row['productId'];
                            $title=$row['name'];
                            $price=$row['price'];
                            $image=$row['productImage'];

                            echo " 
                                    <div class='col-lg-3 col-md-4 '>
                                    <div class='card '>
                                        <div class='bg-image hover-zoom ripple ripple-surface ripple-surface-light'
                                        data-mdb-ripple-color='light'>
                                        <img src='img/$image'
                                            class='w-75 ' />
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
                                        <a href='prodct.php?bookid=$bookid' class='text-reset'>
                                            <h5 class='card-title mb-1'>$title</h5>
                                        </a>
                                        <a href='' class='text-reset'>
                                            <p>Human Developement</p>
                                        </a>
                                        <h6 class='mb-1'>$$price</h6>
                                        </div>
                                    </div>
                                    </div> ";
                        }
                           
                    ?> 
                     </div>  
                </div>

            </div>
        </div>
    </body>
</html>