<?php
include("./backend/function.php");
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
                <h1 style="color: #174c46;">Our Contact</h1>
            </div>
        </div>
    </div>
</header>
<!-- end of header -->


<div id="services" class="cards-1">
    <div class="container contact">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <center>
                        <i class="fa-solid fa-phone"></i>
                    </center>
                    <div class="card-body">
                        <h5 class="card-title text-uppercase" align="center" style="color: #174c46;">phone number</h5>
                        <center>
                            <a href="tel:+855-16-959-492" class="text-decoration-none">+855-16-959-492</a>
                        </center>
                    </div>
                </div>

                <div class="card">
                    <center>
                        <i class="fa-solid fa-location-dot"></i>
                    </center>
                    <div class="card-body">
                        <h5 class="card-title text-uppercase" align="center" style="color: #174c46;">our address</h5>
                        <center>
                            <a href="https://maps.app.goo.gl/h3Nut4T4Dm74i1PBA" class="text-decoration-none">#119, St.29, Borey Piphup Thmey, NR3, Project III, Phnom Penh, Cambodia</a>
                        </center>
                    </div>
                </div>

                <div class="card">
                    <center>
                        <i class="fa-solid fa-envelope"></i>
                    </center>
                    <div class="card-body">
                        <h5 class="card-title text-uppercase" align="center" style="color: #174c46;">mail</h5>
                        <center>
                            <a href="mailto:consa.infos@gmail.com" class="text-decoration-none">consa.infos@gmail.com</a>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="pricing" class="cards-2 chat_with_us" style="margin-top: -180px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <h2 class="h2-heading contact_text text-uppercase" style="color: #174c46;">chat with us</h2>
                    </div>
                    <div class="col-lg-12 p-0" style="margin-top: -50px;">
                        <div class="container d-flex justify-content-center">
                            <a href="https://t.me/Consatechinfos" class="m-2" target="_blank">
                                <img src="./images/telegram.png" height="50px" alt="">
                            </a>
                            <a href="https://wa.me/qr/AFAW7ON7FL6XG1" class="m-2" target="_blank">
                                <img src="./images/whatsup.png" height="50px" alt="">
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=100081471549843&amp;mibextid=LQQJ4d" class="m-2" target="_blank">
                                <img src="./images/facebook.png" height="50px" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container d-flex justify-content-center">
                    <img src="./images/qr.png" alt="" width="340">
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-lg-6">
                <div class="container">
                    <h2 class="h2-heading contact_text w-100" style="color: #174c46;">SEND US A MESSAGE</h2>
                    <form style="margin-top: -50px;" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control-input" placeholder="Name" required name="name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" placeholder="Email" required name="email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control-input" placeholder="Telegram Number" required name="telegram">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" placeholder="Message" required name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn_insert_message" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 map">
                <div class="container">
                    <h2 class="h2-heading contact_text w-100" style="color: #174c46;">WE ARE HERE</h2>
                    <iframe style="margin-top: -50px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7819.8223634618635!2d104.813477!3d11.486332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310945c9d88ada09%3A0xd53d000370a984b8!2sConsa%20Tech%20(Cambodia)!5e0!3m2!1sen!2sus!4v1706974013610!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>







<?php
include("./footer.php");
?>