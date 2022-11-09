<?php

session_start();
ob_start("ob_gzhandler");
?>
<div class="bg-secondary">
<?php require_once('header.php');
?>
</div>
<?php 
sessionMange();


    $id=$_GET['id'];
    $name="";
    $pass="";
    $email="";
    $phone="";
    $type="";
    $E_pass="";

    
    

    require_once('config.php');
    $sql = "select * from user where userId like $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("Selected Erorr" . mysqli_error($conn));
    }
    while($row = mysqli_fetch_assoc($result)){
      $name = $row['firstName'];
      $pass = $row['password'];
      $email = $row['userEmail'];
      $phone = $row['telephone'];
      $type = $row['admin'];
    }
    

    if(isset($_POST['Add']))
    {  
       
        if( $_POST['Pass2']== $_POST['Pass1'])
        {   $newName = $_POST['Name'];
            $newPass =  md5($_POST['Pass2']);
             $newEmail = $_POST['Email'];
            $newPhone = $_POST['Number'];
            $newType = '0';
            $name = $newName;
            $pass = $newPass;
            $email = $newEmail;
            $phone = $newPhone;
            $type = $newType;
      
          $sql= "UPDATE `user` SET `password` = '$newPass', `firstName` = '$newName', `lastName` = ' ', `telephone` = '$newPhone', `userEmail` = '$newEmail' WHERE `user`.`userId` = $id";
          $result= mysqli_query($conn,$sql);
          if(!$result)
          {
          echo "Error : ". $sql ;
          }
          else
          {
            echo "<script>alert('Success')</script>";
            goToPage("profile");
          }
          mysqli_close($conn);
          

        }
        else{
            $E_pass="password is no true";
        }
        

       

    


    }
                     
       
  ?>
  <!-- main change -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div   class="text-center mt-5">    
              <h2> Edit User</h2>
      </div>
      
  
  
      <div class="row mt-5">
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
                                  <input id="name" name="Name" class="form-control" type="text"    placeholder="Name" value="<?php echo $name; ?>"> 
                          </div>
                          <h5></5>
                      </span>
  
                       <!--Tooltip Emall-->
                       <span class="toolt" data-bs-parent="bottom" title="Enter User Email">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                  <i class="bi bi-envelope-fill"></i>
                              </span>
                                  <input id="email" name="Email" class="form-control" type="text"    placeholder="Email"  value="<?php echo $email; ?>"> 
                          </div>
                      </span>
  
                       <!--Tooltip Phone Number -->
                       <span class="toolt" data-bs-parent="bottom" title="Enter Your Phone">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                   <i class="bi bi-telephone-inbound-fill"></i> 
                              </span>
                              <input id="number" name="Number" class="form-control" type="Phone"    placeholder="Phone Number"  value="<?php echo $phone; ?>"> 
                          </div>
                      </span>
  
                     
  
                       <!--Tooltip Pass 1 -->
                       <span class="toolt" data-bs-parent="bottom" title="Enter Your Password">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                  <i class="bi bi-key-fill"></i>
                              </span>
                                  <input id="pass1" name="Pass1" class="form-control" type="password"    placeholder="Password"  value="<?php echo $pass; ?>"> 
                          </div>
                      </span>
  
                       <!--Tooltip Pass 2 -->
                       <span class="toolt" data-bs-parent="bottom" title="Enter Your Password again">
                          <div class="mb-4 input-group">
                              <span class="input-group-text">
                                  <i class="bi bi-shield-lock-fill"></i>
                              </span>
                                  <input id="pass2" name="Pass2" class="form-control" type="password"    placeholder="Password again"  value="<?php echo $pass; ?>"> 
                          </div>
                          <h2><?php echo $E_pass; ?></h2>
                      </span>
  
                       
  
  
                      <!--Submit Button and cancel -->
                      <div class="mb-4 text-center mt-3">
                              <button type="submit" class="btn btn-primary col-lg-3" id="add" name="Add"  > Edit</button>
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