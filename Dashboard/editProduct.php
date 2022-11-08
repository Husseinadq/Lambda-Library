<?php
require_once('header.php');
require_once('nav.php');
sessionMange();


    $id=$_GET['id'];
    $name="";
    $desc="";
    $sku="";
    $price="";
    $cateId="";
    $author="";
    $image="";
    $quantity="";
    $cateName="not";

    
    

    require_once('../Userboard/config.php');
    $sql = "select * from product where  productId like $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("Selected Erorr" . mysqli_error($conn));
    }
    while($row = mysqli_fetch_assoc($result)){
      $name = $row['name'];
      $desc = $row['descr'];
      $sku = $row['sku'];
      $price = $row['price'];
      $cateId = $row['productcategoryId'];
      $author = $row['author'];
      $image = $row['productImage'];
      $quantity = $row['Quantity'];

    }

    $sqlCate="SELECT * FROM productcategory where productcategoryId = $cateId ";
    $resultCate= mysqli_query($conn,$sqlCate);
    if (!$resultCate ) {
        die("Select error");
    }

    while($row=mysqli_fetch_assoc($resultCate))
    {  
        $cateName=$row['name'];
    }


    if(isset($_POST['Edit']))
    {      
            $newName = $_POST['Name'];
            $newDesc = $_POST['Description'];
            $newSku = $_POST['SKU'];
            $newPrice = $_POST['Price'];
            $newCateId = $_POST['Categories'];
            $newAuthor = $_POST['Author'];
            $newQuantity = $_POST['Quantity'];
           
      
       
        if( isset( $_FILES['Images'])&& empty($_FILES['Images']['tmp_name']))
        {  
          $sql= "UPDATE `product` SET `name` = '$newName', `descr` = '$newDesc', `sku` = '$newSku', `price` = '$newPrice', `productcategoryId` = '$newCateId', `author` = '$newAuthor', `productImage` = 'defalt.png', `Quantity` = '$newQuantity' WHERE `product`.`productId` = $id";
          $result= mysqli_query($conn,$sql);
          if(!$result)
          {
          echo "Error : ". $sql ;
          }
          mysqli_close($conn);
          

        }
        else{
            $folder="../Userboard/img/";
            $img=$_FILES['Images']['name'];
            $tmp=$_FILES['Images']['tmp_name'];
            $sql= "UPDATE `product` SET `name` = '$newName', `descr` = '$newDesc', `sku` = '$newSku', `price` = '$newPrice', `productcategoryId` = '$newCateId', `author` = '$newAuthor', `productImage` = '$img', `Quantity` = '$newQuantity' WHERE `product`.`productId` = $id";
            $result= mysqli_query($conn,$sql);
            if(!$result)
            {
            echo "Error : ". $sql ;
            }
            move_uploaded_file($tmp,$folder.$img);
            echo "<script>alert('Success')</script>";
            mysqli_close($conn);
            
  
        }
        

       

    


    }
                     
       
  ?><!-- main change -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div   class="text-center">    
              <h2> Edit Product</h2>
          </div>
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
                                  <input id="name" name="Name" class="form-control" type="text"    placeholder="Book Name" value="<?php echo $name;?>"> 
                          </div>
                      </span>
  
                       <!--Tooltip Descr-->
                       <span class="toolt" data-bs-parent="bottom" title="Enter Book Description">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                   <i class="bi bi-pencil-square"></i>                            </span>
                                  <input id="description" name="Description" class="form-control" type="text"    placeholder="Description" value="<?php echo $desc;?>"> 
                          </div>
                      </span>
  
                       <!--Tooltip SKU Number -->
                       <span class="toolt" data-bs-parent="bottom" title="Enter Book SKU">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                  <i class="bi bi-upc-scan"></i>
                              </span>
                              <input id="sku" name="SKU" class="form-control" type="Phone"    placeholder="Book SKU" value="<?php echo $sku;?>"> 
                          </div>
                      </span>
  
                       
  
                       <!--Tooltip Price -->
                       <span class="toolt" data-bs-parent="bottom" title="Enter The Price">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                              <i class="bi bi-cash-coin"></i>
                              </span>
                                  <input id="price" name="Price" class="form-control" type="text"    placeholder="Price" value="<?php echo $price;?>"> 
                          </div>
                      </span>
  
                      <!--Tooltip Quantity -->
                       <span class="toolt" data-bs-parent="bottom" title="Enter The Quantity">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                  <i class="bi bi-123"></i>
                              </span>
                                  <input id="quantity" name="Quantity" class="form-control" type="Number"    placeholder="Quantity" value="<?php echo $quantity;?>"> 
                          </div>
                      </span>
  
                      <!--Tooltip Author  -->
                      <span class="toolt" data-bs-parent="bottom" title="Enter Book Author">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                  <i class="bi bi-person-plus"></i>
                              </span>
                                  <input id="author" name="Author" class="form-control" type="text"    placeholder="Book Author" value="<?php echo $author;?>"> 
                          </div>
                      </span>
  
                       <!--Tooltip Categories 2 -->
                       <span class="toolt" data-bs-parent="bottom" title="Select Book Images">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                  <i class="bi bi-tags"></i>
                              </span>
                                  <select class="form-select" id="categories" name="Categories" aria-label="Floating label select example">
                                  <option selected value="<?php$cateId;?>"><?php echo $cateId;?>  </option>
                                  <?php
                                       $sqlc="SELECT * FROM productcategory  ";
                                       $resultc= mysqli_query($conn,$sqlc);
                                       if (!$resultc ) {
                                           die("Select error");
                                       }
              
                                       while($row=mysqli_fetch_assoc($resultc))
                                       { 
                                           $titalc=$row['name'];
                                           $categoriesId=$row['productcategoryId'];
                                           if ($categoriesId==$cateId) {
                                                $cateName=$titalc;
                                              
                                           }
                                          
                                           echo "<option value='$categoriesId'>$titalc</option>";
                                       }
                                  ?>
                              </select>                        
                          </div>
                          
                      </span>
  
                       <!--Tooltip Image -->
                       <span class="toolt" data-bs-parent="bottom" title="Enter Book Images">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                  <i class="bi bi-images"></i>
                              </span>
                                  <input id="image" name="Images" class="form-control" type="file"    > 
                          </div>
                      </span>
  
                      
  
                      
                      <!--Submit Button and cancel -->
                      <div class="mb-4 text-center mt-3">
                              <button type="submit" class="btn btn-primary col-lg-3" id="edit" name="Edit"  >Edit </button>
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