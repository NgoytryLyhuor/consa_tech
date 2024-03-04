<?php
    include("./function.php") 
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Lock screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="icon" href="../images/logo.png">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<style>
    @media (max-width: 767px) {
        .wrapper-page {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    }
    @media (min-width: 768px) {
        .wrapper-page {
            display: block;
            height: auto;
        }
    }
</style>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <img src="assets/images/big-logo.png" height="30" class="logo-dark mx-auto" alt="">
                        </div>
                    </div>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" action="" method="post">
                            <?php
                                $sql_select = "SELECT * FROM tbl_admin WHERE id = 1";
                                $result = $con->query($sql_select);
                                $row = mysqli_fetch_assoc($result);
                                echo '    
        
                                    <div class="text-center mb-4">
                                        <img src="assets/images/users/'.$row['profile'].'" class="rounded-circle avatar-lg img-thumbnail" alt="thumbnail">
                                    </div>
        
                                    <div class="form-group mb-3 row">
                                        <div class="col-12">
                                            <input class="form-control" type="password" required name="password" placeholder="Password">
                                        </div>
                                    </div>
        
                                    <div class="form-group text-center row mt-3">
                                        <div class="col-12">
                                            <button name="btn_lock_screen" class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
        
                                    <div class="form-group mt-4 mb-0 row">
                                        <div class="col-12 text-center">
                                            <a href="./login.php" class="text-muted">Not you?</a>
                                        </div>
                                    </div>
                                    ';
                                ?>
                        </form>
                    </div>

                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
    </div>

</body>

</html>