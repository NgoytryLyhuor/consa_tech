<?php
    include("./header.php");
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
                    <?php
                        $con = mysqli_connect('localhost', 'u243022743_root', '0965013885Lyhuor', 'u243022743_consa_tech');
                        $sql_select = "SELECT * FROM tbl_service WHERE id = 1";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                        echo '
                            <h1 style="color: #174c46;">'.$row['title'].'</h1>
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
                            <div class="carousel-inner img_border_radius">
                                <?php

                                    $array = explode("+",$row['json_data']);
                                    $temp = array_slice($array, 2);
                                    $temp_active = $array[1];

                                    echo '
                                        <div class="carousel-item active">
                                            <img src="./backend/assets/images/service/'.$temp_active.'" class="d-block w-100" alt="...">
                                        </div>
                                    ';

                                    for($i=0 ; $i<count($temp) ; $i++){
                                        echo '
                                            <div class="carousel-item">
                                                <img src="./backend/assets/images/service/'.$temp[$i].'" class="d-block w-100" alt="...">
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
        </div>
    </div>


<?php
    include("./footer.php");
?>