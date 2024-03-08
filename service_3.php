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
                    <h1 style="color: #f8981d;">Packaging <span style="color: #174c46;">And</span> Label Design Consulting</h1>
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

                                    $sql_select = "SELECT * FROM tbl_service WHERE id = 3";
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
            <table class="table table-bordered table-striped">
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
                        <td>Design label</td>
                        <td>
                            <i class="fa-solid fa-check"></i> <br>
                            <input type="radio" name="1212" id="" class="form-checked-input"> + Packaging (+$25)
                        </td>
                        <td>
                            <i class="fa-solid fa-check"></i> <br>
                            <input type="radio" name="1212" id="" class="form-checked-input"> + Packaging (+$25)
                        </td>
                        <td>
                            <i class="fa-solid fa-check"></i> <br>
                            <input type="radio" name="1212" id="" class="form-checked-input"> + Packaging (+$25)
                        </td>
                    </tr>
                    <tr>
                        <td>Mockups</td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Mockups product poster</td>
                        <td></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Source copy file</td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Report</td>
                        <td></td>
                        <td></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Number of revision</td>
                        <td>5</td>
                        <td>10</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td>Lead time</td>
                        <td>
                            <input type="radio" name="11" id="" class="form-checked-input"> 5 Days <br>
                            <input type="radio" name="11" id="" class="form-checked-input"> + 3 Days (+$50)
                        </td>
                        <td>
                            <input type="radio" name="11" id="" class="form-checked-input"> 7 Days <br> 
                            <input type="radio" name="11" id="" class="form-checked-input"> + 3 Days (+$50)
                        </td>
                        <td>
                            <input type="radio" name="11" id="" class="form-checked-input"> 10 Days <br> 
                            <input type="radio" name="11" id="" class="form-checked-input"> + 5 Days (+$50) <br>
                            <input type="radio" name="11" id="" class="form-checked-input"> + 3 Days (+$100) 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- end of container -->
    </div>

<?php
    include("./footer.php");
?>