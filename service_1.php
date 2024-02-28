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
                    <h1 style="color: #f8981d;">Products Research <span style="color: #174c46;">And</span> Development</h1>
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
                        
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./images/1_1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/1_2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/1_3.jpg" class="d-block w-100" alt="...">
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
                        
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-6">
                    <div style="color: #174c46;">
                        <h2 style="color: #174c46;"><span style="color: #f8981d;">Innovate </span><br>with confidence</h2>
                        <p>
                            Research and development (R&D) is our core service. We are proud as local business aim to support R&D and technology transfer with Local SME and industry, and at the same time increase their awareness about importance of investment in R&D service.
                        </p>
                        <p>Our R&D is mainly divided into 2 parts: </p>
                        <ul class="list-unstyled li-space-lg mb-5" style="margin-top: -15px;">
                            <li class="d-flex">
                                <i class="p-1 fa-solid fa-angles-right" style="color: #f8981d;"></i>
                                <div class="flex-grow-1"><strong>Product research:</strong>CONSA TECH consist of a small group of food and chemical engineers with big ambition to support various scale of food and cosmetic SME. We listened the SME’s problems/challenging/request from SME then collect information for assessment and analysis to conclude how we could help SME to create a new affordable product that can boost the SME’s sale demand. From our previous R&D achievement, we developed several products to introduce to customer such as: Blended essential oil, Body lotion, Body scrub, Dried pepper powder, Hair shampoo ect.</div>
                            </li>
                            <li class="d-flex">
                                <i class="p-1 fa-solid fa-angles-right" style="color: #f8981d;"></i>
                                <div class="flex-grow-1"><strong>Product development service:</strong>From days to days, Cambodian market becomes more competitive that in turn push the local SME to take more consideration to innovate their existing product for example: extend food shelf life, Improve odor of essential oil, improve quality of laundry detergent, transform normal Pick lime into another form product like Pickle lime powder to meet market need.,etc.</div>
                            </li>
                        </ul>
                    
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>


<?php
    include("./footer.php");
?>