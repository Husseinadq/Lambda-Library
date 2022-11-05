<?php
require_once('header.php');
require_once('nav.php');
if(empty($_SESSION['userId'])||$_SESSION['userId']==null)
{ 
  session_destroy();
  goToDashboard("login");
}


?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>
    <a href="addUser.php"class="btn btn-primary  " tabindex="-1" role="button" aria-disabled="true">Add New</a>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Password</th>
          <th scope="col">Type</th>
          <th scope="col" > 
          Function
        
          </th>
        </tr>
      </thead>
      <tbody>
      <?php
      require_once('../Userboard/config.php');
      $sql = "select * from user order by userId desc";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        die("Selected Erorr" . mysqli_error($conn));
      }
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['userId'];
        $name = $row['firstName'];
        $email = $row['userEmail'];
        $phone = $row['telephone'];
        $pass = $row['password'];
        $type = $row['admin'];
      echo "
        <tr>
          <td>$id</td>
          <td>$name</td>
          <td>$email</td>
          <td>$phone</td>
          <td>$pass</td>
          <td>$type</td>
          <td>
            <a href='editUser.php?id=$id' class='btn btn-primary  ms-0' tabindex='-1' role='button' aria-disabled='true'>Edit</a>
            <a href='deleteUser.php?id=$id' class='btn btn-secondary   ms-0' tabindex='-1' role='button' aria-disabled='true'>Delete</a>
          </td>
         
        </tr>
      ";
      }
      mysqli_close($conn);
      ?>
      </tbody>
    </table>
  </div>
</main>
<!-- end main  -->
<?php require_once('footer.php');
?>