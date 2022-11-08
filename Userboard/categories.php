
<html>
    <body> 
        <!-- Categories -->
    <div class="bg-light">
        <?php
          require_once('search.php');
        ?>
    </div>
    <div class="bg-secondary">
        <div class="container-lg ">
            <div class="row">
            <h2 name="Title" class="text-center text-uppercase text-primary mt-5 mb-3 fw-bold ">categories</h2>
                <div class="col-3 bg-secondary ">
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
                             <a class='list-group-item list-group-item-action bg-light text-primary'  id='list-home-list' data-toggle='list' href='categoriesUI.php?category=$categoriesId' role='tab' aria-controls='home'>$titalc </a>
                             ";
                         }
                        ?>
                    
                    </div>
                </div>
                <div class="col-9 bg-secondary ">
                     <div class="d-flex flex-wrap text-center">
                    <?php
                        try {
                        
                        if ($_GET['category']==0) {
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
                            $cateName=" ";

                            $sql="SELECT `name` FROM productcategory where productcategoryId like '$val' ";
                            $result2= mysqli_query($conn,$sql);
                            if (!$result2 ) {
                            die("Select error");
                            }
                            while ($row2=mysqli_fetch_assoc($result2)) {
                                $cateName=$row2['name'];
                            }


                            echo " 
                                    <div class='col-lg-3 col-md-4 ' >
                                    <div class='card bg-light mt-3 mb-3 me-2' style='height: 4 50px; background-color: rgba(255,0,0,.1);'>
                                        <div class='bg-image hover-zoom ripple ripple-surface ripple-surface-light'
                                        data-mdb-ripple-color='light'>
                                        <img src='img/$image'
                                            class='w-75  mt-4'style='height: 250px; background-color: rgba(255,0,0,.1);' />
                                        
                                        </div>
                                        <div class='mask'>
                                            <div class='d-flex justify-content-start align-items-end h-100'>
                                                <h5><span class='badge bg-primary ms-2'>$cateName</span></h5>
                                            </div>
                                            </div>
                                        <div class='card-body'>
                                        <a href='prodct.php?bookid=$bookid' >
                                            <h6 class='card-title mb-0 text-primary text-uppercase fw-bold w-100'>$title</h6>
                                        </a>
                                        <a href='' class='text-reset'>
                                            <p class=' text-primary text-uppercase w-100'></p>
                                        </a>
                                        <h6 class='mb-1  text-primary text-uppercase w-100'>$$price</h6>
                                        
                                        </div>
                                    </div>
                                    </div> ";
                        }

                    } catch (Exception $th) {
                        echo $th;
                    }
                           
                    ?> 
                     </div>  
                </div>

            </div>
        </div>
        </div>
    </body>
</html>