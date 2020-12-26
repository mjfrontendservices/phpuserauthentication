<?php
    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_fname']);
    unset($_SESSION['user_mname']);
    unset($_SESSION['user_lname']);
    unset($_SESSION['user_uname']);
    unset($_SESSION['user_pass']);
    header('Location: index.php');
?>