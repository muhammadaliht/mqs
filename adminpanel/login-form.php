<?php 
session_start();
if(isset($_SESSION['isLogedIn'])){
    header('location:admin.php');
}
?>




<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel - Muhammadan Quran School</title>
    <link rel="icon" href="../pictures/logo.png">
<link rel="stylesheet" href="../files/reset.css">
<link rel="stylesheet" href="../files/bootstrap.min.css">

<style>
		.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
 
     padding-right: 0px; 
     padding-left: 0px;
}
	.container,.container-fluid{
		margin: 0px;
		padding: 0px;
	}
	.row{
		margin: 0px;
	}
    
	.img-div{
	height: 100%;	
		background-image: url(../pictures/loginbg.jpg);
	background-size: cover;
		    padding-top: 80px;
	}
	.login-form{
		height: 425px;
    background: rgba(158, 158, 158, 0.57);
    border: 2px solid white;
    border-radius: 11px;
	}
	
</style>
</head>
<body>
   
   <?php
    require_once('../connection.php');
  if(isset($_POST['btn_login'])){  
    $name = $_POST['name'];
    $pass = $_POST['password'];
    
    $qu  ="SELECT * FROM `login_db` WHERE `name_db` = '$name' AND `password_db` = '$pass'";
      
    $res = mysqli_query($conn,$qu);
      
    if(mysqli_num_rows($res) > 0){
    $row = mysqli_fetch_assoc($res);
        
        $_SESSION['isLogedIn'] = true;
	    header('Location:admin.php');
    }
    else{
        echo "Not Login";
    }
  }
    ?>




<div class="container-fluid img-div">

<div class="col-lg-6 offset-lg-3 login-form pt-5">
			
   <div class="container-fluid mt-5">
				
		<form method="post">
  <div class="form-group col-lg-5 offset-lg-3">
    <label for="exampleInputEmail1">Admin Username</label>
    <input type="text" class="form-control" placeholder="Enter Admin Username" autocomplete="off" name="name" >
    
  </div>
  <div class="form-group col-lg-5  offset-lg-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" autocomplete="off">
  </div>
 
  <button type="submit" name="btn_login" class="btn  offset-lg-3 col-lg-2 mt-lg-2 btn-primary">Submit</button>
</form>
			</div>
	</div>
</div>
<script src="../files/jquery-3.3.1.min.js"></script>
<script src="../files/bootstrap.bundle.min.js"> </script>
<script src="../files/bootstrap.min.js"></script>

 <script>if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
</body>
</html>