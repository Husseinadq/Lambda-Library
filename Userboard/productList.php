<html>
    <body> 
        <!-- Categories -->
        <div class="bk-light mb-5" id="ProductList">
        <div class="container-lg">
            <div class="row">
            <h2 name="Title" class="text-center text-uppercase text-primary mt-5 mb-3 fw-bold ">New Books</h2>
                <div class="col-12 bk-light ">
                     <div class="d-flex flex-wrap text-center">
                    <?php
                         require_once('config.php');
                    
                        $sql="SELECT * FROM product ORDER BY `product`.`productId` ASC";
                        $result= mysqli_query($conn,$sql);
                        if (!$result ) {
                            die("Select error");
                        }
                        
                        while($row=mysqli_fetch_assoc($result))
                        { 
                            $title=$row['name'];
                            $price=$row['price'];
                            $bookid=$row['productId'];
                            $image=$row['productImage'];

                            echo " 
                                    <div class='col-lg-3 col-md-4 me-3 mt-3 '>
                                    <div class='card bg-secondary' >
                                        <div class='bg-image hover-zoom ripple ripple-surface ripple-surface-light'
                                        data-mdb-ripple-color='light'>
                                        <img src='img/$image'
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
                                        <a href='prodct.php?bookid=$bookid' class='text-reset'>
                                            <h5 class='card-title mb-1 text-primary text-uppercase fw-bold'>$title</h5>
                                        </a>
                                        <a href='' class='text-reset'>
                                            <p class='text-primary text-uppercase'>Human Developement</p>
                                        </a>
                                        <h6 class='mb-1 text-primary text-uppercase '>$$price</h6>
                                        </div>
                                    </div>
                                    </div> ";
                        }
                           
                    ?> 
                     </div>  
                </div>

            </div>
        </div>
        </div>
    </body>
</html>