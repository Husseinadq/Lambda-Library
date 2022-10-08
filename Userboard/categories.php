<html>
    <body> 
        <!-- Categories -->
        <div class="container-lg">
            <div class="row">

                <div class="col-3 bg-primary ">
                    <div class="list-group mt-3" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="index.php?category=1" role="tab" aria-controls="home">Novels And Literary Stories</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="index.php?category=2" role="tab" aria-controls="profile">Human Development </a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="index.php?category=3" role="tab" aria-controls="messages">Islamic Religion</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="index.php?category=4" role="tab" aria-controls="settings">History</a>
                    </div>
                </div>
                <div class="col-9 bg-secondary ">
                     <div class="d-flex flex-wrap text-center">
                    <?php

                        require_once('config.php');
                        $val = $_GET['category'];
                        $sql="SELECT * FROM product where productcategoryId like '$val' ";
                        $result= mysqli_query($conn,$sql);
                        if (!$result ) {
                            die("Select error");
                        }
                        
                        while($row=mysqli_fetch_assoc($result))
                        { 
                            $title=$row['name'];
                            $price=$row['price'];

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
                                            <h5 class='card-title mb-1'>$title</h5>
                                        </a>
                                        <a href='' class='text-reset'>
                                            <p>Human Developement</p>
                                        </a>
                                        <h6 class='mb-1'>$$price</h6>
                                        </div>
                                    </div>
                                    </div> ";
                        }
                           
                    ?> 
                     </div>  
                </div>

            </div>
        </div>
    </body>
</html>