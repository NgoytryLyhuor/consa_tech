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
                    <h4 class="mb-sm-0">Services</h4>
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
                                    <a class="nav-link active" data-bs-toggle="tab" href="#service_1" role="tab" aria-selected="false">
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-1"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-1"></i></span> Products Research & Development</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#service_2" role="tab" aria-selected="false">
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-2"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-2"></i></span> Technical Staffing Solution Service</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#service_3" role="tab" aria-selected="false">
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-3"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-3"></i></span> Packaging & Label Design Consulting</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#service_4" role="tab" aria-selected="false">
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-4"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-4"></i></span> Production Planing & Consulting</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#service_5" role="tab" aria-selected="false">
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-5"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-5"></i></span> Equipment Selection & Raw Materials Consulting</span>    
                                    </a>
                                </li>
                            </ul>

                            <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    ${"sql_select_" . $i} = "SELECT * FROM tbl_main_service WHERE id = $i";
                                    ${"result_" . $i} = $con->query(${"sql_select_" . $i});
                                    ${"row_" . $i} = mysqli_fetch_assoc(${"result_" . $i});
                                }
                                
                                echo '

                                    <div class="tab-content p-3">

                                        <div class="tab-pane active" id="service_1" role="tabpanel">
                                            <div class="row mb-3">
                                                <label for="title" class="col-sm-12 col-form-label">Title</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" id="title" name="title_1" value="'.$row_1['title'].'" required>
                                                </div>
                                            </div>
                                            <label for="description" class="col-sm-12 col-form-label">Description</label>
                                            <div class="col-sm-12">
                                                <textarea name="description_1" id="elm1">'.$row_1['description'].'</textarea>
                                            </div>

                                            <div class="row mb-3 mt-3">
                                                <label for="image" class="col-sm-12 col-form-label">Banner</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control image1" type="file" id="image" name="banner_1">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="hidden" value="'.$row_1['banner'].'" name="old_banner_1">
                                                    <img class="rounded me-2 showImage1" alt="200x200" height="200" src="./assets/images/service_banner/'.$row_1['banner'].'" data-holder-rendered="true">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane" id="service_2" role="tabpanel">
                                            <div class="row mb-3">
                                                <label for="title" class="col-sm-12 col-form-label">Title</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" id="title" name="title_2" value="'.$row_2['title'].'" required>
                                                </div>
                                            </div>
                                            <label for="description" class="col-sm-12 col-form-label">Description</label>
                                            <div class="col-sm-12">
                                                <textarea name="description_2" id="elm2">'.$row_2['description'].'</textarea>
                                            </div>

                                            <div class="row mb-3 mt-3">
                                                <label for="image" class="col-sm-12 col-form-label">Banner</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control image2" type="file" id="image" name="banner_2">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="hidden" value="'.$row_2['banner'].'" name="old_banner_2">
                                                    <img class="rounded me-2 showImage2" alt="200x200" height="200" src="./assets/images/service_banner/'.$row_2['banner'].'" data-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="service_3" role="tabpanel">
                                            <div class="row mb-3">
                                                <label for="title" class="col-sm-12 col-form-label">Title</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" id="title" name="title_3" value="'.$row_3['title'].'" required>
                                                </div>
                                            </div>
                                            <label for="description" class="col-sm-12 col-form-label">Description</label>
                                            <div class="col-sm-12">
                                                <textarea name="description_3" id="elm3">'.$row_3['description'].'</textarea>
                                            </div>

                                            <div class="row mb-3 mt-3">
                                                <label for="image" class="col-sm-12 col-form-label">Banner</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control image3" type="file" id="image" name="banner_3">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="hidden" value="'.$row_3['banner'].'" name="old_banner_3">
                                                    <img class="rounded me-2 showImage3" alt="200x200" height="200" src="./assets/images/service_banner/'.$row_3['banner'].'" data-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="service_4" role="tabpanel">
                                            <div class="row mb-3">
                                                <label for="title" class="col-sm-12 col-form-label">Title</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" id="title" name="title_4" value="'.$row_4['title'].'" required>
                                                </div>
                                            </div>
                                            <label for="description" class="col-sm-12 col-form-label">Description</label>
                                            <div class="col-sm-12">
                                                <textarea name="description_4" id="elm4">'.$row_4['description'].'</textarea>
                                            </div>

                                            <div class="row mb-3 mt-3">
                                                <label for="image" class="col-sm-12 col-form-label">Banner</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control image4" type="file" id="image" name="banner_4">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="hidden" value="'.$row_4['banner'].'" name="old_banner_4">
                                                    <img class="rounded me-2 showImage4" alt="200x200" height="200" src="./assets/images/service_banner/'.$row_4['banner'].'" data-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="service_5" role="tabpanel">
                                            <div class="row mb-3">
                                                <label for="title" class="col-sm-12 col-form-label">Title</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="text" id="title" name="title_5" value="'.$row_5['title'].'" required>
                                                </div>
                                            </div>
                                            <label for="description" class="col-sm-12 col-form-label">Description</label>
                                            <div class="col-sm-12">
                                                <textarea name="description_5" id="elm5">'.$row_5['description'].'</textarea>
                                            </div>
                                            
                                            <div class="row mb-3 mt-3">
                                                <label for="image" class="col-sm-12 col-form-label">Banner</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control image5" type="file" id="image" name="banner_5">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-12 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" type="hidden" value="'.$row_5['banner'].'" name="old_banner_5">
                                                    <img class="rounded me-2 showImage5" alt="200x200" height="200" src="./assets/images/service_banner/'.$row_5['banner'].'" data-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>  
                                ';
                            ?>

                            <div class="row mb-3 p-3">
                                <label for="image" class="col-sm-12 col-form-label"></label>
                                <div class="col-sm-12">
                                    <button type="submit" name="btn_main_service" class="btn btn-info waves-effect waves-light">Update Data</button>
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
        $(".image2").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage2").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $(".image3").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage3").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $(".image4").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage4").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        $(".image5").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage5").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>