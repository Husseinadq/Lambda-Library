<?php
require_once('header.php');
require_once('nav.php');
sessionMange();

?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>About Us</h2>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                <form  id="contact" name="Contact" method="post" action="#" >
                        <textarea name="text" id="editor" cols="100" rows="6"></textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#editor'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                         
                        <div class="mb-4 text-center mt-4">
                            <button type="submit"  name="About" id="about" class="btn btn-primary"> <i class="bi bi-plus-circle"> ADD</i> </button>
                        </div>              
                </form>

                   
                    <?php
                    if(isset($_POST['About'])){
                        require_once('../Userboard/config.php');
                        $text = $_POST['text'];
                        if (!empty($text)) {
                            
                        $textr = str_replace("'", "''", "$text");
                        $sql = "INSERT INTO `aboutus` (`id`, `text`) VALUES (NULL, '$textr')";
                        $result = mysqli_query($conn,$sql);
                        if(!$result){
                            echo "Inserted Error" . mysqli_error($conn);
                        }
                        else {
                            echo "<script>alert('Success')</script>";
                        }
                            }
                        mysqli_close($conn);
                    }
                    ?>
                </div>
            </div> 
        </div>
    </div>  
</main>
<!-- end main  -->
<?php
require_once('footer.php');
?>