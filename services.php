<?php
    include("./header.php");
    include('./backend/connection.php')
?>
    <style>
        .main_service ul{
            padding-left: 20px !important;
        }
    </style>
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
                        echo '<h1 style="color: '.$row_color['color'].' !important;">Our Services</h1>';
                    ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <?php

                        $sql_select = "SELECT * FROM tbl_main_service WHERE id = 1";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                    
                        echo '
                            <div class="card">
                                <div class="card-icon">
                                    <img src="./images/service_1.jpg" width="110px" alt="">
                                </div>
                                <div class="card-body">
                                    <a href="./service_1.php" class="text-decoration-none">
                                        <h5 class="card-title" style="color: '.$row_color['color'].' !important;">'.$row['title'].'</h5>
                                    </a>
                                    <div class="main_service" style="color: #174c46 !important;">
                                        '.$row['description'].'
                                    </div>
                                </div>
                                <br>
                                <span class="nav-item">
                                    <a class="btn-solid-sm w-100 text-center" href="./service_1.php" >Learn more</a>
                                </span>
                            </div>
                        ';
                    
                    ?>

                    <?php

                        $sql_select = "SELECT * FROM tbl_main_service WHERE id = 2";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                    
                        echo '
                            <div class="card">
                                <div class="card-icon">
                                    <img src="./images/service_2.jpg" width="110px" alt="">
                                </div>
                                <div class="card-body">
                                    <a href="./service_2.php" class="text-decoration-none">
                                        <h5 class="card-title" style="color: '.$row_color['color'].' !important;">'.$row['title'].'</h5>
                                    </a>
                                    <div class="main_service" style="color: #174c46 !important;">
                                        '.$row['description'].'
                                    </div>
                                </div>
                                <br>
                                <span class="nav-item">
                                    <a class="btn-solid-sm w-100 text-center" href="./service_2.php" >Learn more</a>
                                </span>
                            </div>
                        ';
                    
                    ?>

                    <?php

                        $sql_select = "SELECT * FROM tbl_main_service WHERE id = 3";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                    
                        echo '
                            <div class="card">
                                <div class="card-icon">
                                    <img src="./images/service_3.jpg" width="110px" alt="">
                                </div>
                                <div class="card-body">
                                    <a href="./service_3.php" class="text-decoration-none">
                                        <h5 class="card-title" style="color: '.$row_color['color'].' !important;">'.$row['title'].'</h5>
                                    </a>
                                    <div class="main_service" style="color: #174c46 !important;">
                                        '.$row['description'].'
                                    </div>
                                </div>
                                <br>
                                <span class="nav-item">
                                    <a class="btn-solid-sm w-100 text-center" href="./service_3.php" >Learn more</a>
                                </span>
                            </div>
                        ';
                    
                    ?>

                    <?php

                        $sql_select = "SELECT * FROM tbl_main_service WHERE id = 4";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                    
                        echo '
                            <div class="card">
                                <div class="card-icon">
                                    <img src="./images/service_4.png" width="110px" alt="">
                                </div>
                                <div class="card-body">
                                    <a href="./service_4.php" class="text-decoration-none">
                                        <h5 class="card-title" style="color: '.$row_color['color'].' !important;">'.$row['title'].'</h5>
                                    </a>
                                    <div class="main_service" style="color: #174c46 !important;">
                                        '.$row['description'].'
                                    </div>
                                </div>
                                <br>
                                <span class="nav-item">
                                    <a class="btn-solid-sm w-100 text-center" href="./service_4.php" >Learn more</a>
                                </span>
                            </div>
                        ';
                    
                    ?>

                    <?php

                        $sql_select = "SELECT * FROM tbl_main_service WHERE id = 5";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                    
                        echo '
                            <div class="card">
                                <div class="card-icon">
                                    <img src="./images/service_5.png" width="110px" alt="">
                                </div>
                                <div class="card-body">
                                    <a href="./service_5.php" class="text-decoration-none">
                                        <h5 class="card-title" style="color: '.$row_color['color'].' !important;">'.$row['title'].'</h5>
                                    </a>
                                    <div class="main_service" style="color: #174c46 !important;">
                                        '.$row['description'].'
                                    </div>
                                </div>
                                <br>
                                <span class="nav-item">
                                    <a class="btn-solid-sm w-100 text-center" href="./service_5.php" >Learn more</a>
                                </span>
                            </div>
                        ';
                    
                    ?>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>


<?php
    include("./footer.php");
?>