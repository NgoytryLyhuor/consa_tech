<?php
include("function.php");
$con = mysqli_connect('localhost', 'u243022743_root', '0965013885Lyhuor', 'u243022743_consa_tech');
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
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Message</h4>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php
                                if (isset($_GET['deleted']) && $_GET['deleted'] == 1) {
                                    echo '
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Delete successful <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    ';
                                }
                            ?>
                            <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Telegram Number</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        $sql_select = "SELECT * FROM tbl_message WHERE status = 1";
                                        $result = $con->query($sql_select);

                                        if ($result->num_rows  > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '
                                                    <tr>
                                                        <td>
                                                            ' . $row['name'] . '
                                                        </td>
                                                        <td>
                                                            ' . $row['email'] . '
                                                        </td>
                                                        <td>
                                                            ' . $row['telegram'] . '
                                                        </td>
                                                        <td>
                                                            ' . $row['message'] . '
                                                        </td>
                                                        <td>
                                                            <button onclick="item_delete(`' . $row['id'] . '`)" class="btn btn_delete btn-danger waves-effect waves-light"  data-bs-toggle="modal" data-bs-target="#myModal">Delete</button>
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

                                        <div class="modal-header">
                                            <h4 class="modal-title">Are you sure ?</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-footer">
                                            <form action="" method="post">
                                                <input type="hidden" name="delete_id" id="delete_id">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" name="btn_delete_message" class="btn btn-danger">Delete</button>
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