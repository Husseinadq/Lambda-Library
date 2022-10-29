<?php
    function addToBasket($conn,$userId,$itemId)
    {
        $sqlCode= "INSERT INTO `cart` (`cartID`, `total`, `userId`) VALUES (NULL, '0', '$userId')";
        $cardResult= mysqli_query($conn,$sqlCode);
        if(!$cardResult)
        {
            echo "Error : ". $sqlCode ;
        }else{

            $sqlCard="select cartID from cart where $userId like userId";
            $exe= mysqli_query($conn,$sqlCard);
            $row=mysqli_fetch_assoc($exe);
            $cardID=$row['cartID']; 
            $sqlCode2= "INSERT INTO `cartitem_` (`cartItemId`, `cartID`, `productId`) VALUES (NULL, '$cardID', '$itemId')";
            $cardIResult= mysqli_query($conn,$sqlCode2);

        }
        mysqli_close($conn);
    }
    function buy($conn,$userId)
    {
        $sqlCode= "DELETE FROM cart WHERE userId LIKE $userId";
        $cardResult= mysqli_query($conn,$sqlCode);
        if(!$cardResult)
        {
            echo "Error : ". $sqlCode ;
        }
        mysqli_close($conn);
    }
?>