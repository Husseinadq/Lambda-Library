<body>
    <!-- search form -->
    <div class="container-lg">
        <div class="text-center mt-3 mb-3">
            <h2> Lambda Library</h2>
            <p class="lead mt-3">Artificial intelligence search engine for books</p>
        </div>
        <form action="result.php" method="GET">
            <div class="row justify-content-center my-6">
            
                <div class="col-lg-6">
                    <div class="input-group mb-3  rounded-5 border-primary mt-3 mb-5">
                            <input id="searchText" name="SearchText" type="text" class="form-control" placeholder="Search" >
                            <button id="search" name="Search"  class="btn btn-primary w-30 p-3 " type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                    </div>
                </div>  
            </div>
        </form>
        <?php
         if (isset($_GET['Search'])) {

        }
        ?>
    </div>

</body>