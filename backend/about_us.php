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
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-w"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-w"></i></span> Who We Are</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-v"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-v"></i></span> Vision</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab" aria-selected="false">
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-m"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-m"></i></span> Mission</span>    
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#customer" role="tab" aria-selected="false">
                                        <span style="color:#f99b21" class="d-block d-sm-none"><i class="fa-solid fa-o"></i></span>
                                        <span class="d-none d-sm-block"><span style="color:#f99b21"><i class="fa-solid fa-o"></i></span> Our Customer</span>    
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

                                        <div class="tab-pane" id="customer" role="tabpanel">
                                            <label for="description" class="col-sm-12 col-form-label"></label>
                                            <input class="form-control" type="file" name="customer" id="">

                                            <fieldset class="border rounded-3 p-3 mt-4">
                                                <legend class="float-none w-auto h5 px-3" >All Customer Image</legend>
                                                <div class="row">
                                                <input type="hidden" name="delete_img" id="remove_image" class="form-control">

                                ';

                                        $temp_array = explode('+',$row['customer']);
                                        for($i=0 ; $i < count($temp_array) ; $i++){
                                            if($temp_array[$i] != ''){
                                                echo '
                                                    <div class="col-lg-2 mb-2" id="'.$temp_array[$i].'">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img class="rounded me-2 showImage1" style="border-radius: 0px !important" alt="200x200" width="100%" src="./assets/images/our_customer_image/'.$temp_array[$i].'" data-holder-rendered="true">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button type="button" onclick="delete_image(\'' . $temp_array[$i] . '\')" class="btn btn-danger w-100" style="border-radius: 0px !important">Remove</button>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                ';
                                            }
                                        }

                                echo '
                                                </div>
                                            </fieldset>

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

    function delete_image(value) {
        var temp = value;

        document.getElementById('remove_image').value = document.getElementById('remove_image').value + '+' + temp;

        document.getElementById(value).style.display='none';
    }

</script>

</script>