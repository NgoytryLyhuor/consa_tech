<?php
include("function.php");
$id = $_SESSION['id'];
include("header.php");
$update_id = $_GET['id'];
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
                    <h4 class="mb-sm-0">Update News</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <?php
                                        $sql_select = "SELECT * FROM tbl_news WHERE id = $update_id";
                                        $result = $con->query($sql_select);
                                        $row = mysqli_fetch_assoc($result);
                                        echo '
                                            <input class="form-control" type="hidden" value="'.$row['id'].'" name="id">
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
                                                    <input class="form-control image1" type="file" id="image" name="new_banner">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="hidden" value="'.$row['banner'].'" name="old_banner">
                                                    <img class="rounded me-2 showImage1" alt="200x200" height="200" src="./assets/images/news_banner/'.$row['banner'].'" data-holder-rendered="true">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <button type="submit" name="btn_news_update" class="btn btn-success waves-effect waves-linght">Update News Data</button>
                                                </div>
                                            </div>
                                        ';
                                    ?>
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