<?php
include("function.php");
$id = $_SESSION['id'];
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
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Production Planing & Consulting</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <?php

                                            $sql_select = "SELECT * FROM tbl_service WHERE id = 4";
                                            $result = $con->query($sql_select);
                                            $row = mysqli_fetch_assoc($result);
                                            $apple = explode("+",$row['json_data']);

                                            $array = array();
                                        
                                            foreach ($apple as $key => $value) {
                                                if (!empty($value)) {
                                                    $array[$key] = str_replace("z_image", "+z_image", $value);
                                                }
                                            }

                                            echo '
                                                <div class="container">
                                                
                                                    <div class="row mb-3">
                                                        <label for="title" class="col-sm-12 col-form-label">Title</label>
                                                        <div class="col-sm-12">
                                                            <input class="form-control" type="text" value="'.$row['title'].'" id="title" name="title" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="description" class="col-sm-12 col-form-label">Description</label>
                                                        <div class="col-sm-12">
                                                            <textarea name="description" id="elm1">'.$row['description'].'</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="image" class="col-sm-12 col-form-label">Banner</label>
                                                        <div class="col-sm-12">
                                                            <input type="hidden" name="old_image" class="form-control" value="'.$row['json_data'].'">
                                                            <input class="form-control image1" type="file" id="image" multiple name="image[]">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="image" class="col-sm-12 col-form-label"></label>
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <input type="hidden" name="delete_img" id="remove_image" class="form-control">
                                                    ';

                                                    if (count($array) > 0) {
                                                        foreach ($array as $value) {
                                                            echo '
                                                                <div class="col-lg-2 mb-2" id="' . $value . '">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <img class="rounded me-2 showImage1" style="border-radius: 0px !important" alt="200x200" width="100%" src="./assets/images/service/' . $value . '" data-holder-rendered="true">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <button type="button" onclick="delete_image(\'' . $value . '\')" class="btn btn-danger w-100" style="border-radius: 0px !important">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ';
                                                        }
                                                    }
                                                    
                                                    
                                                echo '
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="image" class="col-sm-12 col-form-label"></label>
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="btn_service_four" class="btn btn-info waves-effect waves-light">Insert News Data</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            ';
                                        ?>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- End Page-content -->
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
    function delete_image(value) {
        var temp = value;

        document.getElementById('remove_image').value = document.getElementById('remove_image').value + '+' + temp;

        document.getElementById(value).style.display='none';
        document.getElementById('btn'+value).style.display='none';


    }
</script>