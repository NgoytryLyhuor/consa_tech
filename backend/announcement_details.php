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
                    <h4 class="mb-sm-0">All Activities</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php
                                if (isset($_GET['success']) && $_GET['success'] == 1) {
                                    echo '
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Insert successful <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        ';
                                }
                                if (isset($_GET['deleted']) && $_GET['deleted'] == 1) {
                                    echo '
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Delete successful <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        ';
                                }
                                if (isset($_GET['update']) && $_GET['update'] == 1) {
                                    echo '
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Update successful <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        ';
                                }
                            ?>

                            <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Banner</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $sql_select = "SELECT * FROM tbl_announcement WHERE status = 1";
                                    $result = $con->query($sql_select);

                                    if ($result != '') {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '
                                                <tr>
                                                    <td>
                                                        <img width="100px" src="./assets/images/announcement/' . $row['banner'] . '" alt="">
                                                    </td>
                                                    <td align="left">
                                                        ' . $row['title'] . '
                                                    </td>
                                                    <td align="left">
                                                        ' . $row['description'] . '
                                                    </td>
                                                    <td align="left" style="width:100px">
                                                        ' . $row['date'] . '
                                                    </td>
                                                    <td style="width:150px">
                                                        <a class="btn btn-info waves-effect waves-linght" href="./announcement_update.php?id=' . $row['id'] . '">Update</a>
                                                        <button onclick="item_delete(`' . $row['id'] . '`)" class="btn btn_delete btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Delete</button>
                                                    </td>
                                                </tr>
                                            ';
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
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
                                            <form action="" method="post">
                                                <input type="hidden" name="delete_id" id="delete_id">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" name="btn_announcement_delete" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
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
    function item_delete(delete_id) {
        document.getElementById("delete_id").value = delete_id;
    }
</script>