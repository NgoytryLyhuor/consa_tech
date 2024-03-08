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
                        $sql_select = "SELECT * FROM tbl_service WHERE id = 2";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                        echo '
                            <h1 style="color: '.$row_color['color'].' !important;">'.$row['title'].'</h1>
                        ';

                    ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="image-container">
                        
                        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php

                                    $sql_select = "SELECT * FROM tbl_service WHERE id = 2";
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
                                            <img src="./backend/assets/images/service/'.$firstElement.'" class="d-block w-100" alt="...">
                                        </div>
                                    ';

                                    foreach ($temp_all_img as $value) {
                                        echo '
                                            <div class="carousel-item">
                                                <img src="./backend/assets/images/service/'.$value.'" class="d-block w-100" alt="...">
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
                </div>
                <div class="col-lg-6 col-xl-6" style="color: #174C46 !important;">
                    <?php
                        echo $row['description']
                    ?>
                </div>
            </div>
        </div> <!-- end of container -->
    </div>

    <!-- Plan -->
    <div id="details" class="basic-1 bg-gray service_table">
        <div class="container">
            <h2>Compare package</h2>
            <table class="table table-bordered table-striped table-responsive-md">
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Basic</th>
                        <th>Standard</th>
                        <th>Premium</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Announcement Poster</td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Interview</td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Contact Making</td>
                        <td></td>
                        <td></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Training</td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Coaching</td>
                        <td></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Mentoring</td>
                        <td></td>
                        <td></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- end of container -->
    </div>


<?php
    include("./footer.php");
?>