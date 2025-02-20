<?php  
if(isset($_GET['action']) && $_GET['action']=='logout'){
    session_destroy();
    header("location:login-form.php");
}

if(!isset($_SESSION['isLogedIn'])){
    header('location:login-form.php');
}

?>