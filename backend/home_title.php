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
                                <h4 class="mb-sm-0">Home Title</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">

                                            <div class="container">
                                                <?php
                                                    $sql_select = "SELECT * FROM tbl_home_title WHERE id = 1";
                                                    $result = $con->query($sql_select);
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo '
                                                        <div class="row mb-3">
                                                            <label for="title" class="col-sm-12 col-form-label">Title</label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="text" id="title" value="'.$row['title'].'" name="title" required>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="description" class="col-sm-12 col-form-label">Description</label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="text" value="'.$row['description'].'" name="description" required>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="image" class="col-sm-12 col-form-label">Banner</label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control image1" type="file" id="image" name="new_banner">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="image" class="col-sm-12 col-form-label"></label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="hidden" value="'.$row['banner'].'" name="old_banner">
                                                                <img class="rounded me-2 showImage1" alt="200x200" height="200" src="./assets/images/home/'.$row['banner'].'"data-holder-rendered="true">
                                                            </div>
                                                        </div>
                                                        ';
                                                    ?>
                                                <div class="row mb-3">
                                                    <label for="image" class="col-sm-12 col-form-label"></label>
                                                    <div class="col-sm-12">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-info waves-effect waves-light">Update Data</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- The Modal -->
                                            <div class="modal" id="myModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Are you sure ?</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" name="btn_home_title" class="btn btn-info waves-effect waves-light">Update</button>
                                                        </div>

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