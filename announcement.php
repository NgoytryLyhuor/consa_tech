<?php
    include("./backend/function.php");
    include("./header.php");
?>
    
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light extra-page" aria-label="Main navigation">
        <?php
            include("./navbar.php");
            $sql_select_color = "SELECT * FROM tbl_color WHERE id = 1";
            $result_color = $con->query($sql_select_color);
            $row_color = mysqli_fetch_assoc($result_color);
        ?>
    </nav>


    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 text-center">
                    <?php echo'<h1 style="color: '.$row_color['color'].' !important;">Announcements</h1></h1>'; ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5 ">
        <div class="container">
            <div class="row">

                <?php
                    $sql_select = "SELECT * FROM tbl_announcement WHERE status = 1";
                    $result = $con->query($sql_select);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $dateString = $row['dateline'];
                        $dateTimestamp = strtotime($dateString);
                        $formattedDate = date("F j Y", $dateTimestamp);

                        $dateString = $row['date'];
                        $dateTimestamp = strtotime($dateString);
                        $formattedDate1 = date("F j Y", $dateTimestamp);
                        echo '
                            <div class="col-lg-4 announcement_col_4">
                                <div class="container-fluid announce_container">
                                    <div class="row announce_box mx-1">
                                        <div class="col-md-12 position-relative">
                                            <div class="container-fluid p-0 overflow-hidden" style="border-radius: 10px;">
                                                <img  height="100%" width="100%" class="img_border_radius" height="200px" src="./backend/assets/images/announcement/'.$row['banner'].'" alt="">
                                                <span class="time">'.$formattedDate1.'</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 position-relative mt-3">
                                            <h5 class="card-title announce_title">
                                                '.$row['title'].'
                                            </h5> 
                                            <p class="announce_des">'.$row['description'].'</p>
                                            <p class="announce_date" style="text-transform:uppercase">dateline : '.$formattedDate.'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>

                
            
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

<?php
    include("./footer.php");
?>