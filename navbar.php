<?php
global $basePath; // Make $basePath accessible in this file
?>
<div class="container">

    <a class="navbar-brand logo-image d-flex align-items-center text-decoration-none" href="./index.php">
        <h4 class="m-0 p-0 text-uppercase" style="color: #174c46;"><img src="./images/main_logo.png" alt=""></h4>
    </a>

    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <i class="fa fa-bars p-1" style="color: #f99b21;font-size: 24px;"></i>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ms-auto navbar-nav-scroll">
            <li class="nav-item">
                <a style="color: #174c46;" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
            <a style="color: #174c46;" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'about_us.php') echo 'active'; ?>" href="./about_us.php">About Us</a>

            </li>
            <li class="nav-item dropdown">
                <a style="color: #174c46;" class="nav-link dropdown-toggle 
                    <?php if (
                        basename($_SERVER['PHP_SELF']) == 'services.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_1.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_2.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_3.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_4.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_5.php') echo 'active'; 
                    ?>" 
                    href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Services
                </a>
                <ul class="dropdown-menu
                    <?php if (
                        basename($_SERVER['PHP_SELF']) == 'services.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_1.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_2.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_3.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_4.php' || 
                        basename($_SERVER['PHP_SELF']) == 'service_5.php') echo 'show'; 
                    ?>
                    " aria-labelledby="dropdown01">
                    <li><a style="color: #174c46;" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'services.php') echo 'temp_active'; ?>" href="./services.php">All Services</a></li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li><a style="color: #174c46;" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'service_1.php') echo 'temp_active'; ?>" href="./service_1.php">
                        Products research and Development
                    </a></li>
                    <li><a style="color: #174c46;" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'service_2.php') echo 'temp_active'; ?>" href="./service_2.php">
                        Technical Staffing Solution and Training
                    </a></li>
                    <li><a style="color: #174c46;" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'service_3.php') echo 'temp_active'; ?>" href="./service_3.php">
                        Packaging and Labelling Design consulting
                    </a></li>
                    <li><a style="color: #174c46;" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'service_4.php') echo 'temp_active'; ?>" href="./service_4.php">
                        Production Planning and Stock management consulting
                    </a></li>
                    <li><a style="color: #174c46;" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'service_5.php') echo 'temp_active'; ?>" href="./service_5.php">
                        Production Equipment Selection & Raw Materials Consulting
                    </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a style="color: #174c46;" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'under_construction.php') echo 'active'; ?>" href="./under_construction.php">Announcements</a>
            </li>
        </ul>
        <span class="nav-item">
            <a class="btn-solid-sm" href="contact.php">Contact Us</a>
        </span>
    </div>
</div>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    var timeout;

    // Enable Bootstrap dropdowns on hover (for desktop) and on click (for mobile)
    $('.nav-item.dropdown').on('mouseenter focus', function() {
        var dropdownMenu = $(this).find('.dropdown-menu');
        if (!dropdownMenu.is(':visible')) {
            $(this).addClass('show');
            dropdownMenu.stop(true, true).fadeIn(200);
        }
    }).on('mouseleave blur', function() {
        var dropdownMenu = $(this).find('.dropdown-menu');
        if (dropdownMenu.is(':visible')) {
            // Use setTimeout to add a delay before hiding the dropdown
            timeout = setTimeout(function() {
                $('.nav-item.dropdown').removeClass('show');
                dropdownMenu.stop(true, true).fadeOut(200);
            }, 200); // 2000 milliseconds (2 seconds)
        }
    });

    // Prevent dropdown menu from closing when hovering over it
    $('.dropdown-menu').on('mouseenter', function() {
        clearTimeout(timeout); // Clear the timeout to prevent hiding the menu
        $(this).stop(true, true).addClass('show');
        $(this).closest('.nav-item.dropdown').addClass('show');
    }).on('mouseleave', function() {
        var dropdownMenu = $(this);
        timeout = setTimeout(function() {
            dropdownMenu.stop(true, true).removeClass('show');
            dropdownMenu.closest('.nav-item.dropdown').removeClass('show');
        }, 200); // 2000 milliseconds (2 seconds)
    });
});

</script>
