<?php
    include("./header.php");
    include('./backend/connection.php')

?>
    
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light extra-page" aria-label="Main navigation">
        <?php
            include("./navbar.php");
        ?>
    </nav>


    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 text-center">
                    <h1 style="color: #174c46;">Announcements</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <center>
                    <h1 style="color: #f99b21;">Coming Soon</h1><br><br>
                    <a class="btn-solid-sm" href="./index.php">Back Home</a>
                </center>
            </div>
        </div>
    </div>


<?php
    include("./footer.php");
?>