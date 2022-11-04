<?php
require_once('header.php');
require_once('nav.php');

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories</h1>
    <a href="addCategories.php"class="btn btn-primary  " tabindex="-1" role="button" aria-disabled="true">Add New</a>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
      <?php
      require_once('../Userboard/config.php');
      $sql = "select * from productcategory order by productcategoryId desc";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        die("Selected Erorr" . mysqli_error($conn));
      }
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['productcategoryId'];
        $name = $row['name'];
        $descr = $row['descr'];
    
      echo "
        <tr>
          <td>$id</td>
          <td>$name</td>
          <td>$descr</td>
          <td>
            <a href='editCategories.php?id=$id' class='btn btn-primary  ms-0' tabindex='-1' role='button' aria-disabled='true'>Edit</a>
            <a href='deletCategories.php?id=$id' class='btn btn-secondary   ms-0' tabindex='-1' role='button' aria-disabled='true'>Delete</a>
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
<?php require_once('footer.php');?>