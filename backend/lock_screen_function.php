<?php
    session_start();
    unset($_SESSION['id']);
    header("location:lock_screen.php");
?>