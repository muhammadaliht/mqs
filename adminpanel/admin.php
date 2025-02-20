<?php
session_start();
require_once('login_session.php');
require_once('../connection.php');

?>
<html lang="en">
<head>
    
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel - Muhammadan Quran School</title>
    <link rel="icon" href="../pictures/logo.png">
    <link rel="stylesheet" href="../files/reset.css">
    <link rel="stylesheet" href="../files/bootstrap.min.css">
    <link rel="stylesheet" href="../files/font_os/css/font-awesome.min.css">

<style>
    .icon{
        margin: 23px 0px 0px 34px;
    font-size:30px;
    }
    .section{
        border-radius: 20px;
    }
    
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
    
    
    </style>
</head>
<body>
   
    
     	
	
       
       <p class="p-3 bg-danger h3 text-white text-center font-weight-bold mb-0">ADMIN PANEL <span class="fa fa-user"></span></p>
       <div class="col-lg-12 mt-2">
          
          <div class="row">
         
         <div class="col-lg-3 bg-primary text-white section m-2">
            
            <div class="row">
                <p class="font-weight-bold mt-4 ml-4">Registration Request</p>
                <span class="fa fa-align-justify icon"></span>
            </div>
            <hr class="bg-white mb-0">
             <a href="registrationinfo.php" target="_blank" class="btn text-white">Open  <span class="fa fa-arrow-circle-right ml-1"></span></a>
             
         </div>
         
         
         <div class="col-lg-3 bg-success text-white section m-2">
            
            <div class="row">
                <p class="font-weight-bold mt-4 ml-4">Registered Client</p>
                <span class="fa fa-user-plus icon"></span>
            </div>
            <hr class="bg-white mb-0">
             <a href="registeredclient.php" target="_blank" class="btn text-white">Open  <span class="fa fa-arrow-circle-right ml-1"></span></a>
             
         </div>
         
         
         
             
         <div class="col-lg-3 bg-info text-white section m-2">
            
            <div class="row">
                <p class="font-weight-bold mt-4 ml-4">Save Lesson Record</p>
                <span class="fa fa-save icon"></span>
            </div>
            <hr class="bg-white mb-0">
             <a href="savelesson.php" target="_blank" class="btn text-white">Open  <span class="fa fa-arrow-circle-right ml-1"></span></a>
             
         </div>
         
            <div class="col-lg-3 bg-secondary text-white section m-2">
            
            <div class="row">
                <p class="font-weight-bold mt-4 ml-4">Reviews Information</p>
                <span class="fa fa-star-o icon"></span>
            </div>
            <hr class="bg-white mb-0">
             <a href="reviewinfo.php" target="_blank" class="btn text-white">Open  <span class="fa fa-arrow-circle-right ml-1"></span></a>
             
         </div>
         
         
         
          </div>
           
       </div>
       
       
       
       
       	<a href="?action=logout" class="col-lg-2 col-4 btn btn-outline-primary btn-info m-3 text-white">log out</a>
       
       
       

<script src="../files/jquery-3.3.1.min.js"></script>
<script src="../files/bootstrap.bundle.min.js"> </script>
<script src="../files/bootstrap.min.js"></script>     
</body>
</html>