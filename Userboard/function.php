<?php
    
    function sessionMange()
    {
    if(empty($_SESSION['userName'])||$_SESSION['userName']==null)
    { 
        session_destroy();
        goToPage("login");
    }
    else
    {
    if ((time()-$_SESSION['start_time'])> $_SESSION['destroy_time']) {
        session_destroy();
        goToPage("login");
    }
    }
    }

    function goToPage($page)
    {
        header('location:'.$page.'.php');
    }


    function addToBasket($conn,$userId,$itemId)
    {
        $sqlCode= "INSERT INTO `cart` (`cartId`, `total`, `userId`) VALUES (NULL, '0', '$userId')";
        $cardResult= mysqli_query($conn,$sqlCode);
        if(!$cardResult)
        {
            echo "Error : ". $sqlCode ;
        }else{

            $sqlCard="select cartId from cart where $userId like userId";
            $exe= mysqli_query($conn,$sqlCard);
            $row=mysqli_fetch_assoc($exe);
            $cardID=$row['cartId']; 
            $sqlCode2= "INSERT INTO `cartitem_` (`cartItemId`, `cartId`, `productId`) VALUES (NULL, '$cardID', '$itemId')";
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
    
    function checkEmail($email)
    {
        try{
            try {
                 //check for "yahoo" email address 
                 if(strpos($email,"yahoo")!==FALSE)
                 {
                     throw new Exception($email);
                 }
             return true;
                } catch (Exception $e) {
                    throw new CustomException($email);        
                }
            } catch(CustomException $e)
            {
                echo $e->errorMessage();
            }
    }
                
                   
                
?>

<?php
class CustomException extends Exception 
{
    public function errorMessage()
    {
        $errorMsg= $this->getMessage().' is not a valid E-Mail address.';
        return $errorMsg;
    }
}

  

?>