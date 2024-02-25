<div class="container">

    <a class="navbar-brand logo-image d-flex align-items-center text-decoration-none" href="index.php">
        <h4 class="m-0 p-0 text-uppercase" style="color: #174c46;">c<img style="width: 20px !important;margin-top: -10px;height: 25px;" src="./images/icon.png" alt="">nsa-tech</h4>
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
            <li class="nav-item">
                <a style="color: #174c46;" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'services.php') echo 'active'; ?>" href="./services.php">Services</a>
            </li>
            <li class="nav-item">
                <a style="color: #174c46;" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'announcement.php') echo 'active'; ?>" href="./announcement">Announcements</a>
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
            $(this).removeClass('show');
            dropdownMenu.stop(true, true).fadeOut(200);
        }
    });

    // Prevent dropdown menu from closing when hovering over it
    $('.dropdown-menu').on('mouseenter', function() {
        $(this).stop(true, true).addClass('show');
        $(this).closest('.nav-item.dropdown').addClass('show');
    }).on('mouseleave', function() {
        $(this).stop(true, true).removeClass('show');
        $(this).closest('.nav-item.dropdown').removeClass('show');
    });
});
</script>
