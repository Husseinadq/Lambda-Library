<!DOCTYPE html>
<head>
    <title>About</title>
</head>
<body>
    <?php
         require_once('header.php');

    ?>
<div class="container-lg">
    <div class="row justify-content-center my-5">
    <?php
                         require_once('config.php');
                         $sql="SELECT * FROM aboutus  ";
                         $result= mysqli_query($conn,$sql);
                         if (!$result ) {
                             die("Select error");
                         }
                         $text="";

                         while($row=mysqli_fetch_assoc($result))
                         { 
                             
                             $text=$row['text'];
                    
                         }
                        ?>
        <div class="col-lg-6 mt-4 ">
            <h2 class="text-center  fst-normal">About </h2>
            <?php echo "<p class='text-center fs-4 fst-normal mb-5'>$text</p>";?>
        </div>   
    </div>
</div>
</body>