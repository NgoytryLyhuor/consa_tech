<?php
include("./header.php");
include('./backend/connection.php')

?>

<!-- Navigation -->
<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <?php
    include("./navbar.php");
    ?>
</nav>
<!-- end of navigation -->


<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-xl-12 main_slide">
                <div id="carouselExampleControls" class="carousel slide carousel-fade sub_slide h-100 w-100" data-bs-ride="carousel" style="border-radius: 10px;overflow: hidden;">
                    <div class="carousel-inner">
                        <?php

                        $sql_select = "SELECT * FROM tbl_home_title WHERE id = 1";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                        $apple = explode("+",$row['json_data']);

                        $array = array();

                        foreach ($apple as $key => $value) {
                            if (!empty($value)) {
                                $array[$key] = str_replace("z_image", "+z_image", $value);
                            }
                        }

                        $firstElement = reset($array);

                        $temp_all_img = array_slice($array, 1, null, true);

                        echo '
                            <div class="carousel-item active">
                                <img src="./backend/assets/images/home/'.$firstElement.'" class="d-block w-100" alt="...">
                            </div>
                        ';

                        foreach ($temp_all_img as $value) {
                            echo '
                                <div class="carousel-item">
                                    <img src="./backend/assets/images/home/'.$value.'" class="d-block w-100" alt="...">
                                </div>
                            ';
                        }
                            
                        ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-12 center_index">
                        <div class="text-container">
                            <!-- <div class="row d-flex align-items-center justify-content-center">
                                <div class="section-title col-2 d-flex align-items-center justify-content-center" style="cursor: pointer;">ភាសាខ្មែរ</div> &nbsp;&nbsp;&nbsp;
                                <div class="section-title col-2 d-flex align-items-center justify-content-center" style="cursor: pointer;">English</div>
                            </div> -->
                            <?php 

                                $sql_select = "SELECT * FROM tbl_home_title WHERE id = 1";
                                $result = $con->query($sql_select);
                                $row = mysqli_fetch_assoc($result);

                                echo'
                                    <h1 class="h1-large text-center" style="color: #174c46;">'.$row['title'].'</h1>
                                    <p class="p-large text-center">'.$row['description'].'</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-solid-lg" href="./contact.php">Contact Us</a>
                                    </div>
                                ';
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 center_index mb-3">
                        <img src="./images/left.png" class="w-100 img_border_radius" alt="" style="border: 1px solid #174C46;">
                    </div>
                    <div class="col-lg-6 center_index mb-3">
                        <img src="./images/right.png" class="w-100 img_border_radius" alt="" style="border: 1px solid #174C46;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>


<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading" style="color: #174c46;">Our Activities</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="grid">
                    <?php
                    $sql_select = "SELECT * FROM tbl_news WHERE status = 1";
                    $result = $con->query($sql_select);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '    
                            <div class="element-item development">
                                <img class="img-fluid" src="./backend/assets/images/news_banner/' . $row['banner'] . '" alt="alternative">
                                <p><strong style="font-size: 22px;color: #174c46;">' . $row['title'] . '</strong> <br> ' . $row['description'] . '</p>
                            </div>
                        ';
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>


<?php
include("./footer.php");
?>