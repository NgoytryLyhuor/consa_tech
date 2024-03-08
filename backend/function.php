<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body> </body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

function print_arrays($apple) {
    print_r($apple);
    die();
}

function print_array($apple) {
    print_r($apple);
}

function login(){
    global $con;
    session_start();
    if(isset($_POST['btn_login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $sql_select = "SELECT * FROM tbl_admin WHERE email = '$email' && password = '$password'";
        $result = $con->query($sql_select);
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        if(mysqli_num_rows($result) > 0){
            $_SESSION['id'] = $id;
            header("location:index.php");
        }
        else{
            header("location:login.php");
        }
    }
}login();

function lock_screen(){
    global $con;
    if(isset($_POST['btn_lock_screen'])){
        $password = md5($_POST['password']);
        
        $sql_select = "SELECT * FROM tbl_admin WHERE password = '$password'";
        $result = $con->query($sql_select);
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        if(mysqli_num_rows($result) > 0){
            $_SESSION['id'] = $id;
            header("location:index.php");
        }
        else{
            header("location:login.php");
        }
    }
}lock_screen();

// User Update
function user_update(){
    global $con;
    if (isset($_POST['btn_user_update'])) {

        $database_password = $_POST['database_password'];

        $old_password = md5($_POST['old_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        //profile validate
            if ($_FILES['new_profile']['size'] > 0) {
                $profile = rand(1, 999999999999) . '-' . $_FILES['new_profile']['name'];
                $parth_upload = "./assets/images/users/" . $profile;
                move_uploaded_file($_FILES['new_profile']['tmp_name'], $parth_upload);
                unlink("./assets/images/users/" . $_POST['old_profile']);
            } else {
                $profile = $_POST['old_profile'];
            }
        //profile validate

        //password
            if($_POST['old_password'] != ''){
                if($old_password == $database_password){
                    if($new_password == $confirm_password){
                        $password = $new_password;
                        $sql_update = "UPDATE tbl_admin SET password = '$password' WHERE id = $id";
                        $result = $con->query($sql_update);
                    }
                    else{
                        header("location:profile.php?error=2");
                        return 0;
                    }
                }
                else{
                    header("location:profile.php?error=1");
                    return 0;
                }
            }
        //password

        $sql_update = "UPDATE tbl_admin SET username = '$username', profile = '$profile', email = '$email' WHERE id = $id";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            ';
            return 0;
        }
    }
}user_update();

// Message Insert
function message_insert(){
    global $con;
    if (isset($_POST['btn_insert_message'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $telegram = $_POST['telegram'];
        $message = $_POST['message'];

        $sql_insert = "INSERT INTO tbl_message VALUES(null,'$name','$email','$telegram','$message','1')";
        $result = $con->query($sql_insert);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Your Message has been seen...",
                        showConfirmButton: false,
                        timer: 2500
                    });
                </script>
            ';
        }
    }
}message_insert();

// Message Delete
function message_delete(){
    global $con;
    if(isset($_POST['btn_delete_message'])){
        $id = $_POST['delete_id'];
        $sql_update = "UPDATE tbl_message SET status = 0 WHERE id = $id";
        $result = $con->query($sql_update);
        if($result == TRUE){
            header("location:tbl_message_view.php?deleted=1");
        }
    }
}message_delete();

// home-------------------------------------------

// News Insert
function news_insert() {
    global $con;

    if (isset($_POST['btn_news_insert'])) {
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);

        $banner = rand(1, 999999) . '-' . $_FILES['banner']['name'];
        $path_upload = "./assets/images/news_banner/" . $banner;
        move_uploaded_file($_FILES['banner']['tmp_name'], $path_upload);

        $sql_insert = "INSERT INTO tbl_news VALUES(null,'$title','$description','$banner','1')";
        $result = $con->query($sql_insert);

        if ($result == TRUE) {
            header("location:tbl_news_view.php?success=1");
        }
    }
}news_insert();

// News_Update
function news_update(){
    global $con;
    if (isset($_POST['btn_news_update'])) {

        $id = $_POST['id'];
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);

            if ($_FILES['new_banner']['size'] > 0) {
                $banner = rand(1, 999999) . '-' . $_FILES['new_banner']['name'];
                $parth_upload = "./assets/images/news_banner/" . $banner;
                move_uploaded_file($_FILES['new_banner']['tmp_name'], $parth_upload);
                unlink("./assets/images/news_banner" . $_POST['old_banner']);
            } else {
                $banner = $_POST['old_banner'];
            }
        
        $sql_update = "UPDATE tbl_news SET title='$title',description='$description',banner='$banner' WHERE id = $id";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            header("location:tbl_news_view.php?update=1");
        }
    }
}news_update();

// News Delete
function news_delete(){
    global $con;
    if(isset($_POST['btn_news_delete'])){
        $id = $_POST['delete_id'];
        $sql_update = "UPDATE tbl_news SET status = 0 WHERE id = $id";
        $result = $con->query($sql_update);
        if($result == TRUE){
            header("location:tbl_news_view.php?deleted=1") ;
        }
    }
}news_delete();

// home_title
function home_title(){
    global $con;
    if (isset($_POST['btn_home_title'])) {

        $image_delete = $_POST['delete_img'];
        $array = '';

        $img_data = "SELECT json_data FROM tbl_home_title WHERE id = 1";
        $sql_select = $con->query($img_data);
        $row = mysqli_fetch_assoc($sql_select);
        $string = $row['json_data'];
        $apple = '';

        if($image_delete != ''){
            $temp_delete_img = explode('+',$image_delete);
            $temp_img = explode('+',$row['json_data']);

            for($i=0 ; $i<=count($temp_img) ; $i++){
                for($j=0 ; $j<=count($temp_delete_img) ; $j++){
                    if (isset($temp_img[$i]) && isset($temp_delete_img[$j]) && $temp_img[$i] == $temp_delete_img[$j]){
                        $apple .= $temp_img[$i];
                    }
                }
            }
        }

        $substringsToRemove = str_replace("z_image", "+z_image", $apple);

        $substringsArray = explode('+', trim($substringsToRemove, '+'));
        $patterns = array_map('preg_quote', $substringsArray);
        $pattern = '/(' . implode('|', $patterns) . ')/';
        $result_apple = preg_replace($pattern, '', $string);

        $sql_update = "UPDATE tbl_home_title SET json_data='$result_apple' WHERE id = 1";
        $result = $con->query($sql_update);

        if ($_FILES['image']['size'][0] > 0) {

            for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $image = '+z_image_service_1_'.rand(1, 999999) . '-' . $_FILES['image']['name'][$i];
                $array .= '+'.$image;
                $path_upload = "./assets/images/home/" . $image;
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $path_upload);
            }

            $img = $array . $row['json_data'];
            $sql_update = "UPDATE tbl_home_title SET json_data='$img' WHERE id = 1";
            $result = $con->query($sql_update);
        }

        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        
        $sql_update = "UPDATE tbl_home_title SET title='$title',description='$description' WHERE id = 1";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.href = "home_title.php";
                    });
                </script>
            ';
        }
    }
}home_title();

// about_us-------------------------------------------

// about_us
function about_us(){
    global $con;
    if (isset($_POST['btn_about_us'])) {

        $who = trim($_POST['who']);
        $vision = trim($_POST['vision']);
        $mission = trim($_POST['mission']);
        
        $sql_update = "UPDATE tbl_about_us SET who='$who',vision='$vision',mission='$mission' WHERE id = 1";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            ';
        }
    }
}about_us();

// service-------------------------------------------

// service_one
function service_one(){
    global $con;
    if (isset($_POST['btn_service_one'])) {

        $array = '';
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $image_delete = $_POST['delete_img'];

        $img_data = "SELECT json_data FROM tbl_service WHERE id = 1";
        $sql_select = $con->query($img_data);
        $row = mysqli_fetch_assoc($sql_select);
        $string = $row['json_data'];
        $apple = '';

        if($image_delete != ''){
            $temp_delete_img = explode('+',$image_delete);
            $temp_img = explode('+',$row['json_data']);

            for($i=0 ; $i<=count($temp_img) ; $i++){
                for($j=0 ; $j<=count($temp_delete_img) ; $j++){
                    if (isset($temp_img[$i]) && isset($temp_delete_img[$j]) && $temp_img[$i] == $temp_delete_img[$j]){
                        $apple .= $temp_img[$i];
                    }
                }
            }
        }

        $substringsToRemove = str_replace("z_image", "+z_image", $apple);

        $substringsArray = explode('+', trim($substringsToRemove, '+'));
        $patterns = array_map('preg_quote', $substringsArray);
        $pattern = '/(' . implode('|', $patterns) . ')/';
        $result_apple = preg_replace($pattern, '', $string);

        // print_arrays($result_apple);


        $sql_update = "UPDATE tbl_service SET json_data='$result_apple' WHERE id = 1";
        $result = $con->query($sql_update);

        if ($_FILES['image']['size'][0] > 0) {

            for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $image = '+z_image_service_1_'.rand(1, 999999) . '-' . $_FILES['image']['name'][$i];
                $array .= '+'.$image;
                $path_upload = "./assets/images/service/" . $image;
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $path_upload);
            }

            $img = $array . $row['json_data'];
            $sql_update = "UPDATE tbl_service SET json_data='$img' WHERE id = 1";
            $result = $con->query($sql_update);
        }


        $sql_update = "UPDATE tbl_service SET title='$title',description='$description' WHERE id = 1";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            ';
        }

        

    }
}service_one();

// service_two
function service_two(){
    global $con;
    if (isset($_POST['btn_service_two'])) {

        $array = '';
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $image_delete = $_POST['delete_img'];

        $img_data = "SELECT json_data FROM tbl_service WHERE id = 2";
        $sql_select = $con->query($img_data);
        $row = mysqli_fetch_assoc($sql_select);
        $string = $row['json_data'];
        $apple = '';

        if($image_delete != ''){
            $temp_delete_img = explode('+',$image_delete);
            $temp_img = explode('+',$row['json_data']);

            for($i=0 ; $i<=count($temp_img) ; $i++){
                for($j=0 ; $j<=count($temp_delete_img) ; $j++){
                    if (isset($temp_img[$i]) && isset($temp_delete_img[$j]) && $temp_img[$i] == $temp_delete_img[$j]){
                        $apple .= $temp_img[$i];
                    }
                }
            }
        }

        $substringsToRemove = str_replace("z_image", "+z_image", $apple);

        $substringsArray = explode('+', trim($substringsToRemove, '+'));
        $patterns = array_map('preg_quote', $substringsArray);
        $pattern = '/(' . implode('|', $patterns) . ')/';
        $result_apple = preg_replace($pattern, '', $string);

        $sql_update = "UPDATE tbl_service SET json_data='$result_apple' WHERE id = 2";
        $result = $con->query($sql_update);

        if ($_FILES['image']['size'][0] > 0) {

            for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $image = '+z_image_service_1_'.rand(1, 999999) . '-' . $_FILES['image']['name'][$i];
                $array .= '+'.$image;
                $path_upload = "./assets/images/service/" . $image;
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $path_upload);
            }

            $img = $array . $row['json_data'];
            $sql_update = "UPDATE tbl_service SET json_data='$img' WHERE id = 2";
            $result = $con->query($sql_update);
        }

        // print_arrays(123);

        $sql_update = "UPDATE tbl_service SET title='$title',description='$description' WHERE id = 2";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            ';
        }

        

    }
}service_two();

// service_three
function service_three(){
    global $con;
    if (isset($_POST['btn_service_three'])) {

        $array = '';
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $image_delete = $_POST['delete_img'];

        $img_data = "SELECT json_data FROM tbl_service WHERE id = 3";
        $sql_select = $con->query($img_data);
        $row = mysqli_fetch_assoc($sql_select);
        $string = $row['json_data'];
        $apple = '';

        if($image_delete != ''){
            $temp_delete_img = explode('+',$image_delete);
            $temp_img = explode('+',$row['json_data']);

            for($i=0 ; $i<=count($temp_img) ; $i++){
                for($j=0 ; $j<=count($temp_delete_img) ; $j++){
                    if (isset($temp_img[$i]) && isset($temp_delete_img[$j]) && $temp_img[$i] == $temp_delete_img[$j]){
                        $apple .= $temp_img[$i];
                    }
                }
            }
        }

        $substringsToRemove = str_replace("z_image", "+z_image", $apple);

        $substringsArray = explode('+', trim($substringsToRemove, '+'));
        $patterns = array_map('preg_quote', $substringsArray);
        $pattern = '/(' . implode('|', $patterns) . ')/';
        $result_apple = preg_replace($pattern, '', $string);

        $sql_update = "UPDATE tbl_service SET json_data='$result_apple' WHERE id = 3";
        $result = $con->query($sql_update);

        if ($_FILES['image']['size'][0] > 0) {

            for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $image = '+z_image_service_1_'.rand(1, 999999) . '-' . $_FILES['image']['name'][$i];
                $array .= '+'.$image;
                $path_upload = "./assets/images/service/" . $image;
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $path_upload);
            }

            $img = $array . $row['json_data'];
            $sql_update = "UPDATE tbl_service SET json_data='$img' WHERE id = 3";
            $result = $con->query($sql_update);
        }

        // print_arrays(123);

        $sql_update = "UPDATE tbl_service SET title='$title',description='$description' WHERE id = 3";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            ';
        }

        

    }
}service_three();

// service_four
function service_four(){
    global $con;
    if (isset($_POST['btn_service_four'])) {

        $array = '';
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $image_delete = $_POST['delete_img'];

        $img_data = "SELECT json_data FROM tbl_service WHERE id = 4";
        $sql_select = $con->query($img_data);
        $row = mysqli_fetch_assoc($sql_select);
        $string = $row['json_data'];
        $apple = '';

        if($image_delete != ''){
            $temp_delete_img = explode('+',$image_delete);
            $temp_img = explode('+',$row['json_data']);

            for($i=0 ; $i<=count($temp_img) ; $i++){
                for($j=0 ; $j<=count($temp_delete_img) ; $j++){
                    if (isset($temp_img[$i]) && isset($temp_delete_img[$j]) && $temp_img[$i] == $temp_delete_img[$j]){
                        $apple .= $temp_img[$i];
                    }
                }
            }
        }

        $substringsToRemove = str_replace("z_image", "+z_image", $apple);

        $substringsArray = explode('+', trim($substringsToRemove, '+'));
        $patterns = array_map('preg_quote', $substringsArray);
        $pattern = '/(' . implode('|', $patterns) . ')/';
        $result_apple = preg_replace($pattern, '', $string);

        $sql_update = "UPDATE tbl_service SET json_data='$result_apple' WHERE id = 4";
        $result = $con->query($sql_update);

        if ($_FILES['image']['size'][0] > 0) {

            for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $image = '+z_image_service_1_'.rand(1, 999999) . '-' . $_FILES['image']['name'][$i];
                $array .= '+'.$image;
                $path_upload = "./assets/images/service/" . $image;
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $path_upload);
            }

            $img = $array . $row['json_data'];
            $sql_update = "UPDATE tbl_service SET json_data='$img' WHERE id = 4";
            $result = $con->query($sql_update);
        }

        // print_arrays(123);

        $sql_update = "UPDATE tbl_service SET title='$title',description='$description' WHERE id = 4";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            ';
        }

        

    }
}service_four();

// service_five
function service_five(){
    global $con;
    if (isset($_POST['btn_service_five'])) {

        $array = '';
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $image_delete = $_POST['delete_img'];

        $img_data = "SELECT json_data FROM tbl_service WHERE id = 5";
        $sql_select = $con->query($img_data);
        $row = mysqli_fetch_assoc($sql_select);
        $string = $row['json_data'];
        $apple = '';

        if($image_delete != ''){
            $temp_delete_img = explode('+',$image_delete);
            $temp_img = explode('+',$row['json_data']);

            for($i=0 ; $i<=count($temp_img) ; $i++){
                for($j=0 ; $j<=count($temp_delete_img) ; $j++){
                    if (isset($temp_img[$i]) && isset($temp_delete_img[$j]) && $temp_img[$i] == $temp_delete_img[$j]){
                        $apple .= $temp_img[$i];
                    }
                }
            }
        }

        $substringsToRemove = str_replace("z_image", "+z_image", $apple);

        $substringsArray = explode('+', trim($substringsToRemove, '+'));
        $patterns = array_map('preg_quote', $substringsArray);
        $pattern = '/(' . implode('|', $patterns) . ')/';
        $result_apple = preg_replace($pattern, '', $string);

        $sql_update = "UPDATE tbl_service SET json_data='$result_apple' WHERE id = 5";
        $result = $con->query($sql_update);

        if ($_FILES['image']['size'][0] > 0) {

            for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $image = '+z_image_service_1_'.rand(1, 999999) . '-' . $_FILES['image']['name'][$i];
                $array .= '+'.$image;
                $path_upload = "./assets/images/service/" . $image;
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $path_upload);
            }

            $img = $array . $row['json_data'];
            $sql_update = "UPDATE tbl_service SET json_data='$img' WHERE id = 5";
            $result = $con->query($sql_update);
        }

        // print_arrays(123);

        $sql_update = "UPDATE tbl_service SET title='$title',description='$description' WHERE id = 5";
        $result = $con->query($sql_update);
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            ';
        }

        

    }
}service_five();


// main_service

function main_service(){
    global $con;
    if (isset($_POST['btn_main_service'])) {

        $title_1 = trim($_POST['title_1']);
        $title_2 = trim($_POST['title_2']);
        $title_3 = trim($_POST['title_3']);
        $title_4 = trim($_POST['title_4']);
        $title_5 = trim($_POST['title_5']);

        $description_1 = trim($_POST['description_1']);
        $description_2 = trim($_POST['description_2']);
        $description_3 = trim($_POST['description_3']);
        $description_4 = trim($_POST['description_4']);
        $description_5 = trim($_POST['description_5']);
        
        $sql_update = "UPDATE tbl_main_service SET title='$title_1',description='$description_1' WHERE id = 1";
        $result = $con->query($sql_update);

        $sql_update = "UPDATE tbl_main_service SET title='$title_2',description='$description_2' WHERE id = 2";
        $result = $con->query($sql_update);

        $sql_update = "UPDATE tbl_main_service SET title='$title_3',description='$description_3' WHERE id = 3";
        $result = $con->query($sql_update);

        $sql_update = "UPDATE tbl_main_service SET title='$title_4',description='$description_4' WHERE id = 4";
        $result = $con->query($sql_update);

        $sql_update = "UPDATE tbl_main_service SET title='$title_5',description='$description_5' WHERE id = 5";
        $result = $con->query($sql_update);
        
        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 2500
                    });
                </script>
            ';
        }
    }
}main_service();


// title_color
function title_color(){
    global $con;
    if (isset($_POST['btn_title_color'])) {
        $color = $_POST['color'];
        $other = $_POST['other'];

        
        if($color == '' && $other == '#000000'){
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "Please select the color",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            ';
            return 0;
        }
        elseif($color != 'undefined' && $other == "#000000"){
            $sql_update = "UPDATE tbl_color SET color='$color' WHERE id = 1";
            $result = $con->query($sql_update);
        }

        else{
            $sql_update = "UPDATE tbl_color SET color='$other' WHERE id = 1";
            $result = $con->query($sql_update);

        }

        if ($result == TRUE) {
            echo '
                <script>
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Update Successful",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            ';
        }
    }
}title_color();














?>