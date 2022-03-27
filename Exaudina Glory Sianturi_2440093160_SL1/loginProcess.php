<?php
    session_start();
    if(isset($_POST['login'])){
        if($_POST['username'] == $_SESSION['username'] && $_POST['password'] == $_SESSION['password1']){
            header("location:home.php");
        }else{
            header("location:login.php");
        }
    }
?>