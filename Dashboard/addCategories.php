<?php
require_once('header.php');
require_once('nav.php');
sessionMange();


    $E_Name="";
    $E_Desc="";
    $OK=1;
    

                   if(isset($_POST['Add']))
                    {  
                       if (isset($_POST['Name']) && isset($_POST['Description'])) {  
                        $Name=$_POST['Name'];
                        $Desc=$_POST['Description'];
                     
                      
                        if (empty($Name) ) {
                            $E_Name="pleas enter correct categories name ";
                            $OK=0;
                        }
                        if (empty( $Desc) ) {
                            $E_Desc="pleas enter correct categories Desc ";
                            $OK=0;
                        }
                        
                        
                        if ($OK==1) {
                            
                            require_once('../Userboard/config.php');

                           
                            $sql= "INSERT INTO `productcategory` (`productcategoryId`, `name`, `descr`) VALUES (NULL, '$Name', '$Desc')";
                            $result= mysqli_query($conn,$sql);
                            if(!$result)
                            {
                                echo "Error : ". $sql ;
                            }
                             mysqli_close($conn);
                            
                           
                           
                        }
                     
                        
                       }
                     
                    }
                    
               ?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div   class="text-center">    
            <h2> Add Categories</h2>
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
                                <input id="name" name="Name" class="form-control" type="text"    placeholder="Categories Name"> 
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