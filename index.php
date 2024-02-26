<?php
    include("./header.php");
?>
    
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <?php
            include("./navbar.php");
        ?>
    </nav>
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="section-title col-3 d-flex align-items-center justify-content-center" style="cursor: pointer;">ភាសាខ្មែរ</div> &nbsp;&nbsp;&nbsp;
                            <div class="section-title col-3 d-flex align-items-center justify-content-center" style="cursor: pointer;">English</div>
                        </div>
                        <?php
                            $con = mysqli_connect('localhost', 'u243022743_root', '0965013885Lyhuor', 'u243022743_consa_tech');
                            $sql_select1 = "SELECT * FROM tbl_home_title WHERE id = 1";
                            $result1 = $con->query($sql_select1);
                            $row1 = mysqli_fetch_assoc($result1);
                            echo '
                                <h1 class="h1-large text-center" style="color: #174c46;">'.$row1['title'].'</h1>
                                <p class="p-large text-center">'.$row1['description'].'</p>
                            
                        <center>
                            <a class="btn-solid-lg" href="./contact.php">Contact Us</a>
                        </center>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="./backend/assets/images/home/'.$row1['banner'].'" alt="alternative">
                    </div>
                </div>
                ';
            ?>
            </div>
        </div>
    </header>


    <!-- Projects -->
	<div id="projects" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading" style="color: #174c46;">Latest News</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid">
                        <?php
                            $sql_select = "SELECT * FROM tbl_news WHERE status = 1";
                            $result = $con->query($sql_select);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '    
                                    <div class="element-item development">
                                        <a href="">
                                            <img class="img-fluid" src="./backend/assets/images/news_banner/'.$row['banner'].'" alt="alternative">
                                            <p><strong style="font-size: 22px;color: #174c46;">'.$row['title'].'</strong> <br> '.$row['description'].'</p>
                                        </a>
                                    </div>
                                ';
                            }
                            ?>
                    </div>
                    
                </div>
            </div>
		</div>
    </div>


<?php
    include("./footer.php");
?>