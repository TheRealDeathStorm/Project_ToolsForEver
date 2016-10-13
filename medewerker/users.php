<?php
include "DBconnect.php";
session_start();

// checking the user

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $sel_user = "select * from werknemer_login where Username='$username' AND Password='$password'";
    $run_user = mysqli_query($db, $sel_user);
    $check_user = mysqli_num_rows($run_user);

    if($check_user>0){
        $_SESSION['user']=$username;
        echo "<script>window.open('medewerker.php','_self')</script>";
    }

    else {
        echo "<script>alert('Email or password is not correct, try again!')</script>";
    }
}

?>