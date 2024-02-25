<?php
    include("./header.php");
?>
    
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light extra-page" aria-label="Main navigation">
        <?php
            include("./navbar.php");
        ?>
    </nav>


    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 text-center">
                    <h1 style="color: #f8981d;">Packaging <span style="color: #174c46;">And</span> Label Design Consulting</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/service_3.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-6">
                    <div class="text-container" style="color: #174c46;">
                        <h2 style="color: #174c46;"><span style="color: #f8981d;">Captivate  </span><br>your audience</h2>
                        <p>Our design experts create visually stunning and sustainable packaging and labels that resonate with your brand and comply with industry standards.</p>
                        <p>After working with us, our clients are now able to:</p>
                        <ul class="list-unstyled li-space-lg mb-5" style="margin-top: -15px;">
                            <li class="d-flex">
                                <i class="p-1 fa-solid fa-angles-right" style="color: #f8981d;"></i>
                                <div class="flex-grow-1"><strong>&nbsp;Visual, functional, and sustainable designs.</strong></div>
                            </li>
                            <li class="d-flex">
                                <i class="p-1 fa-solid fa-angles-right" style="color: #f8981d;"></i>
                                <div class="flex-grow-1"><strong>&nbsp;Brand-centric customization.</strong></div>
                            </li><li class="d-flex">
                                <i class="p-1 fa-solid fa-angles-right" style="color: #f8981d;"></i>
                                <div class="flex-grow-1"><strong>&nbsp;Regulatory compliance focus.</strong></div>
                            </li>
                        </ul>
                    
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <!-- Plan -->
    <div id="details" class="basic-1 bg-gray service_table">
        <div class="container">
            <h2>Compare package</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Basic</th>
                        <th>Standard</th>
                        <th>Premium</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Design label</td>
                        <td>
                            <i class="fa-solid fa-check"></i> <br>
                            <input type="radio" name="1212" id="" class="form-checked-input"> + Packaging (+$25)
                        </td>
                        <td>
                            <i class="fa-solid fa-check"></i> <br>
                            <input type="radio" name="1212" id="" class="form-checked-input"> + Packaging (+$25)
                        </td>
                        <td>
                            <i class="fa-solid fa-check"></i> <br>
                            <input type="radio" name="1212" id="" class="form-checked-input"> + Packaging (+$25)
                        </td>
                    </tr>
                    <tr>
                        <td>Mockups</td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Mockups product poster</td>
                        <td></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Source copy file</td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Report</td>
                        <td></td>
                        <td></td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Number of revision</td>
                        <td>5</td>
                        <td>10</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td>Lead time</td>
                        <td>
                            <input type="radio" name="11" id="" class="form-checked-input"> 5 Days <br>
                            <input type="radio" name="11" id="" class="form-checked-input"> + 3 Days (+$50)
                        </td>
                        <td>
                            <input type="radio" name="11" id="" class="form-checked-input"> 7 Days <br> 
                            <input type="radio" name="11" id="" class="form-checked-input"> + 3 Days (+$50)
                        </td>
                        <td>
                            <input type="radio" name="11" id="" class="form-checked-input"> 10 Days <br> 
                            <input type="radio" name="11" id="" class="form-checked-input"> + 5 Days (+$50) <br>
                            <input type="radio" name="11" id="" class="form-checked-input"> + 3 Days (+$100) 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- end of container -->
    </div>

<?php
    include("./footer.php");
?>