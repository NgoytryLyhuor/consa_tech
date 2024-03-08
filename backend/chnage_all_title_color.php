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
                                <h4 class="mb-sm-0">Change Title Color</h4>
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

                                                    $sql_select_1 = "SELECT * FROM tbl_color WHERE id = 1";
                                                    $result_1 = $con->query($sql_select_1);
                                                    $row_1 = mysqli_fetch_assoc($result_1);

                                                    $apple = explode("+",$row['json_data']);
                                                    $array = array();
                                                    foreach ($apple as $key => $value) {
                                                        if (!empty($value)) {
                                                            $array[$key] = str_replace("z_image", "+z_image", $value);
                                                        }
                                                    }
                                                    
                                                    echo '
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <label for="title" class="col-sm-12 col-form-label">Select the color</label>
                                                                <div class="col-sm-12">
                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="radio" name="color" value="F8981D" onclick="changeColor(\'#F8981D\')">
                                                                        <label class="form-check-label w-100" for="color"> Orange <br>
                                                                            <input type="color" name="other" class="form-control form-control-color w-100" id="example-color-input-1" value="#F8981D" title="Choose your color">
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="radio" name="color" onclick="changeColor(\'#174C46\')">
                                                                        <label class="form-check-label w-100" for="formRadios2"> Green <br>
                                                                            <input type="color" name="other" class="form-control form-control-color w-100" id="example-color-input-2" value="#174C46" title="Choose your color">
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="radio" name="color" onclick="changeColor()">
                                                                        <label class="form-check-label w-100" for="other"> Select color you want <br>
                                                                            <input type="color" name="other" class="form-control form-control-color w-100" id="example-color-input" title="Choose your color">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="title" class="col-sm-12 col-form-label">Sample</label>
                                                                <div class="col-sm-12">
                                                                    <input type="hidden" name="color" id="apple">
                                                                    <h1 style="font-weight:800;color:'.$row_1['color'].'" id="consaTech">CONSA TECH</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';

                                                    ?>
                                                <div class="row mb-3">
                                                    <label for="image" class="col-sm-12 col-form-label"></label>
                                                    <div class="col-sm-12">
                                                        <button type="submit" name="btn_title_color" class="btn btn-info waves-effect waves-light">Update Data</button>
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
    // Get the color input and the h3 element
    var colorInput = document.getElementById('example-color-input');
    var consaTech = document.getElementById('consaTech');

    // Add an event listener to the color input
    colorInput.addEventListener('input', function() {
        // Update the text color of the h3 element
        consaTech.style.color = colorInput.value;
    });

    document.getElementById('example-color-input-1').addEventListener('click', function(event) {
        event.preventDefault();
    });
    document.getElementById('example-color-input-2').addEventListener('click', function(event) {
        event.preventDefault();
    });

    function changeColor(color) {
        document.getElementById('consaTech').style.color = color;
        document.getElementById('apple').value = color;

    }
</script>