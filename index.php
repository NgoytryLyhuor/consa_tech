<?php
include("./header.php");
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
                <div id="carouselExampleIndicators" class="carousel slide h-100 w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner h-100 w-100">
                        <div class="carousel-item active w-100 h-100">
                            <img src="./images/test1.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item w-100 h-100">
                            <img src="./images/test2.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item w-100 h-100">
                            <img src="./images/test3.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-12 col-xl-12">
                <div class="text-container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="section-title col-3 d-flex align-items-center justify-content-center" style="cursor: pointer;">ភាសាខ្មែរ</div> &nbsp;&nbsp;&nbsp;
                        <div class="section-title col-3 d-flex align-items-center justify-content-center" style="cursor: pointer;">English</div>
                    </div>
                    <?php
                    $con = mysqli_connect('localhost', 'u243022743_root', '0965013885Lyhuor', 'u243022743_consa_tech');
                    $sql_select1 = "SELECT * FROM tbl_home_title WHERE id = 1";
                    $result1 = $con->query($sql_select1);
                    $row1 = mysqli_fetch_assoc($result1);
                    echo '
                                <h1 class="h1-large text-center" style="color: #174c46;">' . $row1['title'] . '</h1>
                                <p class="p-large text-center">' . $row1['description'] . '</p>
                            
                        <center>
                            <a href="./contact.php">
                                <img height="300px" src="./images/contact_us.jpg" alt="">
                            </a>
                        </center>
                    </div>
                </div>
                ';
                    ?>
                </div>
            </div>
</header>


<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading" style="color: #174c46;">Latest News</h2>
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
                                        <a href="">
                                            <img class="img-fluid" src="./backend/assets/images/news_banner/' . $row['banner'] . '" alt="alternative">
                                            <p><strong style="font-size: 22px;color: #174c46;">' . $row['title'] . '</strong> <br> ' . $row['description'] . '</p>
                                        </a>
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