<?php
include("function.php");

include("header.php");
?>

<!-- ========== Left Sidebar Start ========== -->
<?php
include("left_side_bar.php");
?>
<!-- Left Sidebar End -->
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Profile</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="card">
                    <?php
                        if (isset($_GET['success']) && $_GET['success'] == 1) {
                            echo '
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Update successful <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            ';
                        }
                        if (isset($_GET['error']) && $_GET['error'] == 1) {
                            echo '
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Old password invalid <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            ';
                        }
                        if (isset($_GET['error']) && $_GET['error'] == 2) {
                            echo '
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Your password not match <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            ';
                        }
                    ?>

                    <?php
                        $sql_select = "SELECT * FROM tbl_admin WHERE id = 1";
                        $result = $con->query($sql_select);
                        $row = mysqli_fetch_assoc($result);
                        echo '
                            <div class="row p-0">
                                <div class="col-lg-2">
                                    <div class="card-body">
                                        <img class="rounded me-2 showImage1" alt="200x200" width="100%" src="./assets/images/users/' . $row['profile'] . '" data-holder-rendered="true">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                                            <input type="hidden" value="' . $row['id'] . '" name="id">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Username</label>
                                                        <input type="text" name="username" class="form-control" value="' . $row['username'] . '" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" name="email"  class="form-control" value="' . $row['email'] . '" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Profile</label>
                                                        <input type="file" name="new_profile" class="form-control image1">
                                                        <input type="hidden" name="old_profile" value="' . $row['profile'] . '" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Old Password</label>
                                                        <div class="input-group">
                                                            <input type="hidden" name="database_password" value="' . $row['password'] . '" class="form-control">
                                                            <input type="password" name="old_password" class="form-control" id="old_password">
                                                            <div class="input-group-prepend">
                                                                <button onclick="togglePasswordVisibility(`old_password`,`btn_old_password`)" id="btn_old_password" type="button" class="input-group-text h-100"><i class="fa-solid fa-eye-low-vision"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">New Password</label>
                                                        <div class="input-group">
                                                            <input type="password" name="new_password" class="form-control" id="new_password">
                                                            <div class="input-group-prepend">
                                                                <button type="button" onclick="togglePasswordVisibility(`new_password`,`btn_new_password`)" id="btn_new_password" type="btn_new_password" class="input-group-text h-100"><i class="fa-solid fa-eye-low-vision"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Confirm Password</label>
                                                        <div class="input-group">
                                                            <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                                                            <div class="input-group-prepend">
                                                                <button type="button" onclick="togglePasswordVisibility(`confirm_password`,`btn_confirm_password`)" id="btn_confirm_password" class="input-group-text h-100"><i class="fa-solid fa-eye-low-vision"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label"></label>
                                                        <button class="btn btn-info w-100" name="btn_user_update" style="margin-top: 8px;" type="submit">Edit</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        ';
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<?php
include("right_side_bar.php");
?>
<!-- /Right-bar -->
</body>

</html>

<script>

    $(document).ready(function(){

        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

    });

    function togglePasswordVisibility(inputId, buttonId) {
        var passwordInput = document.getElementById(inputId);
        var passwordButton = document.getElementById(buttonId);

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordButton.innerHTML = '<i class="fa-solid fa-eye"></i>';
        } else {
            passwordInput.type = "password";
            passwordButton.innerHTML = '<i class="fa-solid fa-eye-low-vision"></i>';
        }
    }

</script>