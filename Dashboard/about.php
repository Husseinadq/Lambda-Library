<?php
require_once('header.php');
require_once('nav.php');
?>
<!-- main change -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>About Us</h2>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <form name="about_us" id="add_about_us" action="#" method="post">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><label>About Us Text:</label></td>
                                    <td><textarea name="about_text" id="editor" cols="100" rows="5"></textarea>
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
                                    </td>
                                </tr>
                                        <tr>
                                                <td></td>
                                            <td>
                                                <input class="btn btn-success" type="submit" value="Add" name="add_about">
                                            </td>
                                        </tr>
                            </table>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['add_about'])){
                        require_once('../Userboard/config.php');
                        $text = $_POST['about_text'];
                        if (!empty($text)) {
                            
                        
                        $textr = str_replace("'", "''", "$text");
                        $sql = "insert into aboutus(text)values('$textr')";
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