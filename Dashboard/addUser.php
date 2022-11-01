<?php
require_once('header.php');
require_once('nav.php');

    $E_Name="";
    $E_Email="";
    $E_Number="";
    $E_Pass1="";
    $E_Pass2="";
    $OK=1;
    

                   if(isset($_POST['Add']))
                    {  
                       if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Number'])&&
                       isset($_POST['Pass1']) && isset($_POST['Pass1'])&& isset($_POST['Pass2'])) {  
                        $Name=$_POST['Name'];
                        $Email=$_POST['Email'];
                        $Number=$_POST['Number'];
                        $Pass1=$_POST['Pass1'];
                        $Pass2=$_POST['Pass2'];
                        $type=$_POST['Admin'];
                       
                      
                        if (empty($Name) ) {
                            $E_Name="pleas enter user name ";
                            $OK=0;
                        }
                        if (empty( $Email) ) {
                            $E_Email="pleas enter user email ";
                            $OK=0;
                        }
                        if (empty($Number) ) {
                            $E_Number="pleas enter user phone number ";
                            $OK=0;
                        }
                        if (empty($Pass1)) {
                            $E_Pass1="pleas enter user password ";
                            $OK=0;
                        }
                        if (empty($Pass2) || $Pass1!==$Pass2) {
                            $E_Pass2="pleas enter confirm user password ";
                            $OK=0;
                        }
                        
                        
                        if ($OK==1) {
                            
                            require_once('../Userboard/config.php');

                           $sql="INSERT INTO `user` (`userId`, `password`, `firstName`, `lastName`, `telephone`, `userEmail`, `admin`) VALUES (NULL, '$Pass2', '$Name', ' ', '$Number', '$Email', '$type')";
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
            <h2> Sign up</h2>
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
                    <span class="toolt" data-bs-parent="bottom" title="Enter User Name">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                                <input id="name" name="Name" class="form-control" type="text"    placeholder="Name"> 
                        </div>
                        <h5><?php echo $E_Name; ?></5>
                    </span>

                     <!--Tooltip Emall-->
                     <span class="toolt" data-bs-parent="bottom" title="Enter User Email">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                                <input id="email" name="Email" class="form-control" type="text"    placeholder="Email"> 
                        </div>
                        <h5><?php echo $E_Email; ?></5>
                    </span>

                     <!--Tooltip Phone Number -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Phone">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                 <i class="bi bi-telephone-inbound-fill"></i> 
                            </span>
                            <input id="number" name="Number" class="form-control" type="Phone"    placeholder="Phone Number"> 
                        </div>
                        <h5><?php echo $E_Number; ?></5>
                    </span>

                   

                     <!--Tooltip Pass 1 -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Password">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                                <input id="pass1" name="Pass1" class="form-control" type="password"    placeholder="Password"> 
                        </div>
                        <h5><?php echo $E_Pass1; ?></5>
                    </span>

                     <!--Tooltip Pass 2 -->
                     <span class="toolt" data-bs-parent="bottom" title="Enter Your Password again">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-shield-lock-fill"></i>
                            </span>
                                <input id="pass2" name="Pass2" class="form-control" type="password"    placeholder="Password again"> 
                        </div>
                        <h5><?php echo $E_Pass2; ?></5>
                    </span>

                      <!--Tooltip Admin-->
                      <span class="toolt" data-bs-parent="bottom" title="Enter Your Gender">
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person"> Type</i>
                            </span>
                            <div class="form-check form-check-inline ms-5 me-5 mt-2">
                                <input class="form-check-input" type="radio" name="Admin" id="admin" value="0" checked>
                                <label class="form-check-label" for="genderm">User</label>
                            </div>
                            <div class="form-check form-check-inline ms-5 me-5 mt-2">
                                <input class="form-check-input" type="radio" name="Admin" id="admin" value="1">
                                <label class="form-check-label" for="genderf">Admin</label>
                            </div> 
                       </div>
                    </span>


                    <!--Submit Button and cancel -->
                    <div class="mb-4 text-center mt-3">
                            <button type="submit" class="btn btn-primary col-lg-3" id="add" name="Add"  > ADD</button>
                        </div>
                </form>              
                
                    
                
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