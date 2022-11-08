<?php
require_once('header.php');
require_once('nav.php');
sessionMange();


    $id=$_GET['id'];
    $name="";
    $desc="";
    

    require_once('../Userboard/config.php');
    $sql = "select * from productcategory where  productcategoryId like $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("Selected Erorr" . mysqli_error($conn));
    }
    while($row = mysqli_fetch_assoc($result)){
      $name = $row['name'];
      $descr = $row['descr'];
    }
    

    if(isset($_POST['Add']))
    {  
        $newName=$_POST['Name'];
        $newDesc=$_POST['Description'];
        $name=$newName;
        $desc=$newDesc;

    $sql= "UPDATE `productcategory` SET `name` = '$newName ', `descr` = '$newDesc ' WHERE `productcategory`.`productcategoryId` = $id";
    $result= mysqli_query($conn,$sql);
    if(!$result)
    {
    echo "Error : ". $sql ;
    }
    echo "<script>alert('Success')</script>";
    mysqli_close($conn);


    }
                     
       
  ?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div   class="text-center">    
            <h2> Edit Categories</h2>
        </div>
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                <div class="row justify-content-center my-1">
            <div class="col-lg-6">
                <form  id="addCategories" name="AddCategories" method="post" action="#" enctype="multipart/form-data">
                    <!--Tooltip Name-->
                    <span class="toolt  " data-bs-parent="bottom" title="Enter Book Name">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-tags"></i>
                            </span>
                                <input id="name" name="Name" class="form-control" type="text"    placeholder="Categories Name" value="<?php echo $name; ?>"> 
                                
                        </div>
                        
                    </span>

                     <!--Tooltip Descr-->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Book Description">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                 <i class="bi bi-pencil-square"></i>                            </span>
                                <input id="description" name="Description" class="form-control" type="text"    placeholder="Description" value="<?php echo $descr; ?>"> 
                        </div>
                        
                    </span>

                    
                    <!--Submit Button and cancel -->
                    <div class="mb-4 text-center mt-3">
                            <button type="submit" class="btn btn-primary col-lg-3" id="add" name="Add"  >Edit </button>
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