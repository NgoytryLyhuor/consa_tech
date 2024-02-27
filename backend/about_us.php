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
                    <h4 class="mb-sm-0">About Us</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                    <form action="" method="post" enctype="multipart/form-data">
                        <input class="form-control" type="hidden" value="'.$row['id'].'" name="id">

                        <div class="card-body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Who We Are</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Vision</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Mission</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="true">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Our Goal</span>    
                                    </a>
                                </li>
                            </ul>

                            <?php
                                $sql_select = "SELECT * FROM tbl_about_us WHERE id = 1";
                                $result = $con->query($sql_select);
                                $row = mysqli_fetch_assoc($result);
                                echo '

                                    <div class="tab-content p-3">

                                        <div class="tab-pane active" id="home" role="tabpanel">
                                            <label for="description" class="col-sm-12 col-form-label"></label>
                                            <div class="col-sm-12">
                                                <textarea name="who" id="elm1">'.$row['who'].'</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="profile" role="tabpanel">
                                            <label for="description" class="col-sm-12 col-form-label"></label>
                                            <div class="col-sm-12">
                                                <textarea name="vision" id="elm2">'.$row['vision'].'</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="messages" role="tabpanel">
                                            <label for="description" class="col-sm-12 col-form-label"></label>
                                            <div class="col-sm-12">
                                                <textarea name="mission" id="elm3">'.$row['mission'].'</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings" role="tabpanel">
                                            <label for="description" class="col-sm-12 col-form-label"></label>
                                            <div class="col-sm-12">
                                                <textarea name="goal" id="elm4">'.$row['goal'].'</textarea>
                                            </div>
                                        </div>
                                    </div>  
                                ';
                            ?>

                            <div class="row mb-3 p-3">
                                <label for="image" class="col-sm-12 col-form-label"></label>
                                <div class="col-sm-12">
                                    <button type="submit" name="btn_about_us" class="btn btn-info waves-effect waves-light">Update Data</button>
                                </div>
                            </div>

                        </div>
                    </form>
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