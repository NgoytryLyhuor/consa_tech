<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
$con = mysqli_connect('localhost', 'u243022743_root', '0965013885Lyhuor', 'u243022743_consa_tech');

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
            header("location:profile.php?success=1");
            return 0;
        }
    }
}user_update();

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


// News Update
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















?>