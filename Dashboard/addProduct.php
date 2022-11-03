<?php
require_once('header.php');
require_once('nav.php');

    $E_Name="";
    $E_Desc="";
    $E_SKU="";
    $E_Price="";
    $E_Quan="";
    $E_Author="";
    $E_Categories="";
    $E_Image="";
    $OK=1;
    

                   if(isset($_POST['Add']))
                    {  
                       if (isset($_POST['Name']) && isset($_POST['Description']) && isset($_POST['SKU'])&&
                       isset($_POST['Price']) && isset($_POST['Quantity']) && isset($_POST['Categories'])&& isset($_POST['Author']) 
                      ) {  
                        $Name=$_POST['Name'];
                        $Desc=$_POST['Description'];
                        $SKU=$_POST['SKU'];
                        $Price=$_POST['Price'];
                        $Quan=$_POST['Quantity'];
                        $Categories=$_POST['Categories'];
                        $Author=$_POST['Author'];
                      
                        if (empty($Name) ) {
                            $E_Name="pleas enter correct book name ";
                            $OK=0;
                        }
                        if (empty( $Desc) ) {
                            $E_Desc="pleas enter correct book Desc ";
                            $OK=0;
                        }
                        if (empty($SKU) ) {
                            $E_SKU="pleas enter correct book SKU ";
                            $OK=0;
                        }
                        if (empty($Price)) {
                            $E_Price="pleas enter correct book Price ";
                            $OK=0;
                        }
                        if (empty($Quan)) {
                            $E_Quan="pleas enter correct book Quantity ";
                            $OK=0;
                        }
                        if ($Categories=="-1") {
                            $E_Categories="pleas chose correct Categories  ";
                            $OK=0;
                        }
                        if (empty($Author)) {
                            $E_Author="pleas enter correct book Author ";
                            $OK=0;
                        }
                        
                        if ($OK==1) {
                            
                            require_once('../Userboard/config.php');

                            if (isset($_FILES['Images']) && empty($_FILES['Images']['tmp_name'])) {
                            $sql= "INSERT INTO `product` (`productId`, `name`, `descr`, `sku`, `price`, `productcategoryId`, `author`,`productImage`,`Quantity`) VALUES (NULL, '$Name', '$Desc', '$SKU', '$Price', '$Categories', '$Author','defalt.png','$Quan')";
                            $result= mysqli_query($conn,$sql);
                            if(!$result)
                            {
                                echo "Error : ". $sql ;
                            }
                             mysqli_close($conn);
                            }
                            else
                            {
                                $folder="../Userboard/img/";
                                $img=$_FILES['Images']['name'];
                                $tmp=$_FILES['Images']['tmp_name'];
                                $sql= "INSERT INTO `product` (`productId`, `name`, `descr`, `sku`, `price`, `productcategoryId`, `author`,`productImage`,`Quantity`) VALUES (NULL, '$Name', '$Desc', '$SKU', '$Price', '$Categories', '$Author','$img','$Quan')";
                                $result= mysqli_query($conn,$sql);
                                if(!$result)
                                {
                                    echo "Error : ". $sql ;
                                }

                                move_uploaded_file($tmp,$folder.$img);
                                

                                 mysqli_close($conn);

                            }
                           
                        }
                     
                        
                       }
                     
                    }
                    
               ?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div   class="text-center">    
            <h2> Add Product</h2>
        </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                <div class="row justify-content-center my-1">
            <div class="col-lg-6">
                <form  id="addPro" name="AddPro" method="post" action="#" enctype="multipart/form-data">
                    <!--Tooltip Name-->
                    <span class="toolt  " data-bs-parent="bottom" title="Enter Book Name">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-book"></i>
                            </span>
                                <input id="name" name="Name" class="form-control" type="text"    placeholder="Book Name"> 
                        </div>
                        <h5><?php echo $E_Name;?></h5>
                    </span>

                     <!--Tooltip Descr-->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Book Description">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                 <i class="bi bi-pencil-square"></i>                            </span>
                                <input id="description" name="Description" class="form-control" type="text"    placeholder="Description"> 
                        </div>
                        <h5><?php echo $E_Desc;?></h5>
                    </span>

                     <!--Tooltip SKU Number -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Book SKU">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-upc-scan"></i>
                            </span>
                            <input id="sku" name="SKU" class="form-control" type="Phone"    placeholder="Book SKU"> 
                        </div>
                        <h5><?php echo $E_SKU;?></h5>
                    </span>

                     

                     <!--Tooltip Price -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter The Price">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                            <i class="bi bi-cash-coin"></i>
                            </span>
                                <input id="price" name="Price" class="form-control" type="text"    placeholder="Price"> 
                        </div>
                        <h5><?php echo $E_Price;?></h5>
                    </span>

                    <!--Tooltip Quantity -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter The Quantity">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-123"></i>
                            </span>
                                <input id="quantity" name="Quantity" class="form-control" type="Number"    placeholder="Quantity"> 
                        </div>
                        <h5><?php echo $E_Quan;?></h5>
                    </span>

                    <!--Tooltip Author  -->
                    <span class="toolt" data-bs-parent="bottom" title="Enter Book Author">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-plus"></i>
                            </span>
                                <input id="author" name="Author" class="form-control" type="text"    placeholder="Book Author"> 
                        </div>
                        <h5><?php echo $E_Author;?></h5>
                    </span>

                     <!--Tooltip Categories 2 -->
                     <span class="toolt" data-bs-parent="bottom" title="Select Book Images">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-tags"></i>
                            </span>
                                <select class="form-select" id="categories" name="Categories" aria-label="Floating label select example">
                                <option selected value="-1">  Categories</option>
                                <?php
                                     require_once('../Userboard/config.php');
                                     $sqlc="SELECT * FROM productcategory  ";
                                     $resultc= mysqli_query($conn,$sqlc);
                                     if (!$resultc ) {
                                         die("Select error");
                                     }
            
                                     while($row=mysqli_fetch_assoc($resultc))
                                     { 
                                         $titalc=$row['name'];
                                         $categoriesId=$row['productcategoryId'];
                                        
                                         echo "<option value='$categoriesId'>$titalc</option>";
                                     }
                                   
                                ?>
                            </select>                        
                        </div>
                        <h5><?php echo $E_Categories;?></h5>
                        
                    </span>

                     <!--Tooltip Image -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Book Images">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-images"></i>
                            </span>
                                <input id="image" name="Images" class="form-control" type="file"    > 
                        </div>
                        <h5><?php echo $E_Image;?></h5>
                    </span>

                    

                    
                    <!--Submit Button and cancel -->
                    <div class="mb-4 text-center mt-3">
                            <button type="submit" class="btn btn-primary col-lg-3" id="add" name="Add"  >ADD </button>
                        </div>
                </form>

               <!--Insert into database -->
              
                
            </div>
        </div>
                    
                </div>
            </div> 
        </div>
    </div>  
</main>
<!-- end main  -->
 <!--for toolt -->
 <script>
        const tooltip=document.querySelectorAll('.toolt')
        tooltip.forEach(t=>{ new bootstrap.Tooltip(t)
        })
    </script>
    <!--connect sign up with js -->
    <script src="js/add_product.js"></script>
<?php
require_once('footer.php');
?>