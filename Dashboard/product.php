<?php
require_once('header.php');
require_once('nav.php');

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product</h1>
    <a href="addProduct.php"class="btn btn-primary  " tabindex="-1" role="button" aria-disabled="true">Add New</a>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Categories</th>
          <th scope="col">Author</th>
          <th scope="col">Price</th>
          <th scope="col">sku</th>
          <th scope="col">Quantity</th>
          <th scope="col" > Function</th>
        </tr>
      </thead>
      <tbody>
      <?php
      require_once('../Userboard/config.php');
      $sql = "select * from product order by productId desc";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        die("Selected Erorr" . mysqli_error($conn));
      }
      else{
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['productId'];
            $name = $row['name'];
            $desc = $row['descr'];
            $sku = $row['sku'];
            $price = $row['price'];
            $categories = $row['productcategoryId'];
            $author = $row['author'];
            $quantity = $row['Quantity'];
            $categoriesName = "";

                $sqlCat = "select * from productcategory Where productcategoryId like $categories";
                $resultCat = mysqli_query($conn, $sqlCat);
                if (!$resultCat) {
                die("Selected Erorr" . mysqli_error($conn));

                }
                while($rowCat = mysqli_fetch_assoc($resultCat))
                {
                    $categoriesName=$rowCat['name'];
                }
        
          echo "
            <tr>
              <td>$id</td>
              <td>$name</td>
              <td>$desc</td>
              <td>$categoriesName</td>
              <td>$author</td>
              <td>$price</td>
              <td>$sku</td>
              <td>$quantity</td>

              <td>
                <a href='#' class='btn btn-primary  ms-0' tabindex='-1' role='button' aria-disabled='true'>Edit</a>
                <a href='deleteProduct.php?id=$id' class='btn btn-secondary   ms-0' tabindex='-1' role='button' aria-disabled='true'>Delete</a>
              </td>
             
            </tr>
          ";
          }
      }
     
      mysqli_close($conn);
      ?>
      </tbody>
    </table>
  </div>
</main>
<!-- end main  -->
<?php require_once('footer.php');?>