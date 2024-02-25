    <!-- Footer -->
    <div class="footer bg-gray">
        <img class="decoration-city" src="images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="container mb-3 footer-details w-25">
                        <div class="row">
                            <div class="col-4 p-0 m-0 text-uppercase"><a class="text-decoration-none footer-1" href="">follow us</a></div>
                            <div class="col-4 p-0 m-0 text-uppercase"><a data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-decoration-none border-0" href="">opening hours</a></div>
                            <div class="col-4 p-0 m-0 text-uppercase"><a class="text-decoration-none footer-2" href="./index.php">homepage</a></div>
                        </div>
                    </div>
                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="container-fluid footer-content p-3" style="background-color: rgba(255, 255, 255); border-radius: 8px; backdrop-filter: blur(5px);">
                                            <div class="text-container">
                                                <center>
                                                    <img src="./images/open_hour.png" alt="" class="mb-3 footer_img">
                                                    <hr>
                                                </center>
                                                
                                                <p class="p-medium">
                                                    <strong>Opening Hours:</strong>
                                                    <span class="d-block d-sm-inline">Mon-Sat, 9:00 am-6:30 pm</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Modal -->

                    <center>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled li-space-lg p-small">
                                    <li>© Consa-Tech Since 2023</li>
                                </ul>
                            </div> <!-- end of col -->
                        </div> <!-- enf of row -->  
                    </center>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/profile.php?id=100081471549843&amp;mibextid=LQQJ4d">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://t.me/Consatechinfos">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-telegram fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <div class="loading" id="preloader">
        <div class="loadingspinner">
            <div id="square1"></div>
            <div id="square2"></div>
            <div id="square3"></div>
            <div id="square4"></div>
            <div id="square5"></div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    
</body>
</html>

<style>
    .modal{
        margin-top: -100px;
    }

    @media (max-width: 768px){
        .modal{
            margin-top: 0px;
        }
    }
</style>

