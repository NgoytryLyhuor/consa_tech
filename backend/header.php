<?php
    $id = $_SESSION['id'];
    if(!$_SESSION['id']){
        header("location:login.php");
    }
?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- App favicon -->
        <title>Consa-Tech Dashboard</title>
        <link rel="icon" href="../images/logo.png">

        <!-- jquery.vectormap css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Kantumruy:wght@300;400;700&family=Lato:wght@100;300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">

    </head>
    <style>
        *{
            font-family: Roboto,Hanuman;
        }
        .main_service ol, ul {
            padding-left: 20px !important;
        }
    </style>
    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="./index.php" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/small-logo.png" height="40px" style="margin-top: -7px;margin-left: -6px;" alt="logo-light" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/big-logo.png" height="30px" style="margin-top: -7px;" alt="logo-light" height="20">
                                    </span>
                                </a>
                
                                <a href="index.php" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/small-logo.png" height="40px" style="margin-top: -7px;margin-left: -6px;" alt="logo-light" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/big-logo.png" height="30px" style="margin-top: -7px;" alt="logo-light" height="20">
                                    </span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                        
                        <div class="d-flex">
                            <div class="dropdown d-none d-lg-inline-block ms-1">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="ri-fullscreen-line"></i>
                                </button>
                            </div>
                            <div class="dropdown d-inline-block user-dropdown">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                    $sql_select = "SELECT * FROM tbl_admin WHERE id = 1";
                                    $result = $con->query($sql_select);
                                    $row = mysqli_fetch_assoc($result);
                                    echo '    
                                        <img class="rounded-circle header-profile-user" src="assets/images/users/'.$row['profile'].'" alt="Header Avatar">
                                        <span class="d-none d-xl-inline-block ms-1">'.$row['username'].'</span>
                                    ';
                                ?>
                                        
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="./profile.php"><i class="fa-solid fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="./lock_screen_function.php"><i class="fa-solid fa-lock"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="./logout.php"><i class="fa-solid fa-power-off"></i> Logout</a>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
            </header>

            <!-- The Modal -->
            <div class="modal" id="show_image" style="z-index: 10000000000000;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal footer -->
                        <div class="modal-body">
                            <?php
                                echo '
                                    <img style="object-fit:cover" width="100%" class="rounded " src="./assets/images/users/'.$row['profile'].'" alt="">
                                ';
                            ?>
                        </div>

                    </div>
                </div>
            </div>