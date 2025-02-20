<?php
session_start();
require_once('login_session.php');
require_once('../connection.php');



?>
<html lang="en">
<head>
    
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Requests - Muhammadan Quran School</title>
    <link rel="icon" href="../pictures/logo.png">
    <link rel="stylesheet" href="../files/reset.css">
    <link rel="stylesheet" href="../files/bootstrap.min.css">
    <link rel="stylesheet" href="../files/font_os/css/font-awesome.min.css">

<style>
    .mian{
		height: auto;
	}

	
	
    
    
    </style>
</head>
<body>
   
   <?php

			if(isset($_POST["btn_del"])){
			$id = $_POST["id"];
			$qu = "DELETE FROM registrationinfo_db WHERE id = '$id'";
				$res = mysqli_query($conn,$qu);
				if($res){
				
				}
			else{
				echo "not delete";
				
			}	
				
			}
		if(isset($_POST["btn_search"])){
			$search = mysqli_real_escape_string($conn,$_POST["search"]);
			$search = htmlentities($search);
			 $q = " SELECT * FROM `registrationinfo_db` WHERE `fname_db` LIKE '%$search%' OR `id` LIKE '%$search%' ORDER BY `id` DESC";
		}
			else{
				 $q = "SELECT * FROM `registrationinfo_db`";
			}
?>
   
   
   
   
   <p class="bg-primary text-center text-white h3 p-3 font-weight-bold">
	  Registration Requests
</p>
   	<a href="?action=logout" class="col-lg-2 ml-3  col-4 btn btn-outline-primary btn-info text-white">log out</a>
<form action="" method="post">
    

<div class="input-group mb-2 container-fluid mt-2 ">
  <input type="text" pattern="[A-Za-z0-9]{,40}$" name="search" class="form-control  col-lg-3" placeholder="Search Name or id" aria-label="Search Name or id" aria-describedby="button-addon2" autocomplete="off">
  <div class="input-group-append">
    <button class="btn text-white btn-outline-warning btn-success " type="submit" name="btn_search" id="button-addon2">Search</button>
  </div>
</div>
	
</form>
	
                    <div class="col-lg-12">
        <table class="table table-striped table-bordered table-hove">
            <thead class="thead-dark">
                <tr>
                
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                   
                    <th scope="col">Email</th>
                    <th scope="col">Whatsapp Number</th>
                    <th scope="col">Conutry Name</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Course</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Days</th>
                    <th scope="col">Message</th>
                   
                   
                    <th scope="col">Delete</th>
             
                 
                </tr>
            </thead>
            
            
                     <?php
		

			

    $res = mysqli_query($conn,$q);
    if(mysqli_num_rows($res) > 0){
     while($row = mysqli_fetch_assoc($res)){
        
    
    ?>  
      
                
                
<tr>
<th scope="row"><?php echo $row["id"];?></th>
   <td><?php echo $row["fname_db"]; ?></td>
  
    <td><?php echo $row["email_db"]; ?></td>
    <td><?php echo $row["whatsappn_db"]; ?></td>
    <td><?php echo $row["countryn_db"]; ?></td>
    <td><?php echo $row["cityn_db"]; ?></td>
    <td><?php echo $row["gender_db"]; ?></td>
    <td><?php echo $row["course_db"]; ?></td>
    <td><?php echo $row["plan_db"]; ?></td>
     <td><?php echo $row["gname_db"]; ?></td>
    <td><?php echo $row["msg_db"]; ?></td>



 
   
   <td>
   
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"];?>"> 
  <input  type="submit" value="Delete"  name="btn_del" class=" text-white col-lg-12 bg-danger form-control  " >

    </form>  
   
  
   	  
   
   </td>
   
  
    
</tr>
<?php }}?>  
            
            
			  </table>
	</div>
   
   
    
     <script src="../files/jquery-3.3.1.min.js"></script>
<script src="../files/bootstrap.bundle.min.js"> </script>
<script src="../files/bootstrap.min.js"></script> 

   <script>if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
    

</body>
</html>