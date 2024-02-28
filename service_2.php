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
                    <h1 style="color: #f8981d;">Technical <span style="color: #174c46;">Staffing</span> Solution</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 500px;height: 500px;">
                        <div class="carousel-inner w-100 h-100">
                            <div class="carousel-item active">
                                <img src="./images/2_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/2_2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/2_3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/2_4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/2_5.jpg" class="d-block w-100" alt="...">
                            </div>
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
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-6">
                    <div class="text-container" style="color: #174c46;">
                        <h2 style="color: #174c46;"><span style="color: #f8981d;">Elevate  </span><br>your team</h2>
                        <p>This service aims to support SME through:</p>
                        <ul class="list-unstyled li-space-lg" style="margin-top: -15px;">
                            <li class="d-flex">
                                <i class="p-1 fa-solid fa-angles-right" style="color: #f8981d;"></i>
                                <div class="flex-grow-1">Improve knowledge and competency of SME’s existing human resource through various technical training and coaching, for example: Food safety, Quality control, Production and stock management, other topics and so on.</div>
                            </li>
                            <li class="d-flex">
                                <i class="p-1 fa-solid fa-angles-right" style="color: #f8981d;"></i>
                                <div class="flex-grow-1">Assist SME by giving advices and recruiting technical/engineer staff that meet their current needs in daily production challenges.</div>
                            </li>
                        </ul>
                        <p>Our technical staffing solution: divide into 3 packages details as below table: </p>
                    
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
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