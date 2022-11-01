<html>
    <body> 
        <!-- Categories -->
        <div class="container-lg">
            <div class="row">

                <?php require_once('header.php');
                      require_once('search.php');  
                ?>
                <div class="col-12 bg-secondary ">
                     <div class="d-flex flex-wrap text-center">
                    <?php
                         require_once('config.php');
                        $val = $_GET['SearchText'];
                        $sql="SELECT * FROM product where `name` like '%$val%'";
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
                                    <div class='col-lg-3 col-md-4 '>
                                    <div class='card'>
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