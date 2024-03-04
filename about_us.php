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
                    <h1 style="color: #f8981d;">About <span style="color: #174c46;">Consa Tech</span></h1>
                </div>
            </div>
        </div>
    </header>


    <div class="ex-basic-1 pt-5 pb-5 ">
        <div class="container">
            <div class="row">
            <?php
                $sql_select = "SELECT * FROM tbl_about_us WHERE id = 1";
                $result = $con->query($sql_select);
                $row = mysqli_fetch_assoc($result);
                echo '
                    <div class="col-xl-10 offset-xl-1">
                        <h2 class="mt-5 mb-3 text-uppercase" style="color: #174c46;">who <span style="color: #f8981d;">we are</span></h2> <hr size="5px">
                        <p class="mb-5">'.$row['who'].'</p>
                        <h2 class="mt-5 mb-3 text-uppercase" style="color: #174c46;">VISION <span style="color: #f8981d;">AND</span> MISSION</h2> <hr size="5px">
                        <div class="text-box mb-5">
                            <h3 style="color: #174c46;">OUR <span style="color: #f8981d;">VISION</span></h3>
                            <p>'.$row['vision'].'</p>
                        </div>
                        <div class="text-box mb-5">
                            <h3 style="color: #174c46;">OUR <span style="color: #f8981d;">MISSION</span></h3>
                            <p>'.$row['mission'].'</p>
                        </div>
                    </div>
                ';
            ?>
            </div>
        </div>
    </div>

<?php
    include("./footer.php");
?>