<?php
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