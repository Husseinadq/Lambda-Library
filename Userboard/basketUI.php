
<html>
    <body> 
        <!-- Categories -->
        <div class="container-lg">
            <div class="row">

                <?php require_once('header.php');
                    require_once('config.php');
                ?>
                <div class="col-12 bg-secondary ">
                     <div class="d-flex flex-wrap text-center">
                    <?php
                        $val = 1;//$_GET['SearchText'];
                        $sqlBas="SELECT * FROM cart where `userId` like '$val'";
                        $resultBas= mysqli_query($conn,$sqlBas);
                        if (!$resultBas ) {
                            die("Select error");
                        }
                        
                        while($row=mysqli_fetch_assoc($resultBas))
                        { 
                           // $title=$row['name'];
                           // $price=$row['price'];

                            echo " 
                                    <div class='col-lg-3 col-md-4 '>
                                    <div class='card'>
                                        <div class='bg-image hover-zoom ripple ripple-surface ripple-surface-light'
                                        data-mdb-ripple-color='light'>
                                        <img src='img/miracle.png'
                                            class='w-75' />
                                        <a href='#!'>
                                            <div class='mask'>
                                            <div class='d-flex justify-content-start align-items-end h-100'>
                                                <h5><span class='badge bg-primary ms-2'>New</span></h5>
                                            </div>
                                            </div>
                                            <div class='hover-overlay'>
                                            <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                                            </div>
                                        </a>
                                        </div>
                                        <div class='card-body'>
                                        <a href='' class='text-reset'>
                                            <h5 class='card-title mb-1'>title</h5>
                                        </a>
                                        <a href='' class='text-reset'>
                                            <p>Human Developement</p>
                                        </a>
                                        <h6 class='mb-1'>price</h6>
                                        </div>
                                    </div>
                                    </div> ";
                        }
                           
                    ?> 
                     </div>  
                </div>

            </div>
            <div class="row">
            <div class="col-12 bg-secondary ">
                   
                        <form action="" name="Buy" method="post" >
                        <div class="mb-4 text-center mt-3">
                            <button type="submit" class="btn btn-primary col-lg-3" id="buy" name="botBuy"  >Buy </button>
                        </div>
                        </form>
                        <?php
                    if(isset($_POST['botBuy']))
                    {
                        require_once('config.php');
                        require_once('function.php');

                        buy($conn,1);
                    }
                    
               ?>
                    
                </div>
            </div>
        </div>
    </body>
</html>