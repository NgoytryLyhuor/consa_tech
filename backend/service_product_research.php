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
                            <h4 class="mb-sm-0">Products Research & Development</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <?php

                                            $sql_select = "SELECT * FROM tbl_service WHERE id = 1";
                                            $result = $con->query($sql_select);
                                            $row = mysqli_fetch_assoc($result);

                                            $array = explode("+",$row['json_data']);
                                            $temp = array_slice($array, 1);

                                            // print_r($temp);

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
                                                    ';

                                                    for($i=0 ; $i<count($temp) ; $i++){
                                                        echo'
                                                            <div class="col-lg-2">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <img class="rounded me-2 showImage1" style="border-radius:0px !important" alt="200x200" width="100%" src="./assets/images/service/'.$temp[$i].'" data-holder-rendered="true">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <button type="submit" class="btn btn-danger w-100" style="border-radius:0px !important">Remove</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ';
                                                    }

                                                echo '
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="image" class="col-sm-12 col-form-label"></label>
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="btn_service_one" class="btn btn-info waves-effect waves-light">Insert News Data</button>
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