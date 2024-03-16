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
                            <h4 class="mb-sm-0">Announcement Insert Page</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <div class="container">
                                            <div class="row mb-3">
                                                <label for="title" class="col-sm-12 col-form-label">Title</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" id="title" name="title" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="description" class="col-sm-12 col-form-label">Description</label>
                                                <div class="col-sm-12">
                                                    <textarea name="description" id="elm1"></textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label">Banner</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control image1" type="file" id="image" name="banner"required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <img class="rounded me-2 showImage1" alt="200x200" height="200" src="./assets/images/no_image.png" data-holder-rendered="true">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label">Date</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="date" name="date"required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <button type="submit" name="btn_announcement_insert" class="btn btn-info waves-effect waves-light">Insert Data</button>
                                                </div>
                                            </div>
                                        </div>

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

    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>