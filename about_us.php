<?php
    include("./header.php");
    include('./backend/connection.php')
?>
    
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light extra-page" aria-label="Main navigation">
        <?php
            include("./navbar.php");
            $sql_select_color = "SELECT * FROM tbl_color WHERE id = 1";
            $result_color = $con->query($sql_select_color);
            $row_color = mysqli_fetch_assoc($result_color);
        ?>
    </nav>


    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 text-center">
                    <?php
                        echo '<h1 style="color: '.$row_color['color'].' !important;">About Consa Tech</h1>';
                    ?>
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
                        <h2 class="mt-5 mb-3 text-uppercase"  style="color: #174C46 !important;">who we are</h2> <hr size="5px">
                        <p class="mb-5">'.$row['who'].'</p>
                        <h2 class="mt-5 mb-3 text-uppercase"  style="color: #174C46 !important;">VISION AND MISSION</h2> <hr size="5px">
                        <div class="text-box mb-5">
                            <h3  style="color: '.$row_color['color'].' !important;">OUR VISION</h3>
                            <p>'.$row['vision'].'</p>
                        </div>
                        <div class="text-box mb-5">
                            <h3  style="color: '.$row_color['color'].' !important;">OUR MISSION</h3>
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