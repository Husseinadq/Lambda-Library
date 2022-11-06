<?php
function sessionMange()
{
  if(empty($_SESSION['userId'])||$_SESSION['userId']==null)
{ 
  session_destroy();
  goToDashboard("login");
}
else
{
  if ((time()-$_SESSION['start_time'])> $_SESSION['destroy_time']) {
    session_destroy();
    goToDashboard("login");
  }
}
}
function goToDashboard($page)
{
  header('location:'.$page.'.php');
}

function deleteUser($id)
{
    require_once('../Userboard/config.php');
    $sql = "DELETE FROM `user` WHERE `user`.`userId` like $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("Selected Erorr" . mysqli_error($conn));
    }
    mysqli_close($conn);
}
function deleteCategories($id)
{
    require_once('../Userboard/config.php');
    $sql = "DELETE FROM `productcategory` WHERE `productcategory`.`productcategoryId` like $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("Selected Erorr" . mysqli_error($conn));
    }
    mysqli_close($conn);

}
function deleteProduct($id)
{
    require_once('../Userboard/config.php');
    $sql = "DELETE FROM `product` WHERE `product`.`productId` like $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("Selected Erorr" . mysqli_error($conn));
    }
    mysqli_close($conn);
}

?>