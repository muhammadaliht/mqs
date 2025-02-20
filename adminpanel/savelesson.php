<?php
session_start();
require_once('login_session.php');
require_once("../connection.php");




    
   if(isset($_POST['btn_submit'])){
	$fname = $_POST['fname'];
	$rollno = $_POST['rollno'];
	$page = $_POST['page'];
	$course = $_POST['course'];
	$msg = $_POST['msg'];

	
$qu = "INSERT INTO `savelesson_db` (`fname_db`,`rollno_db`,`page_db`,`course_db`,`msg_db`) VALUES ('$fname','$rollno','$page','$course','$msg')";
	
	$res = mysqli_query($conn,$qu);
	
	if($res){ 
	echo "";
    }
	else{
		echo "not-inserted";
	}
	
   }
?>

<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Save Lesson Record - Muhammadan Quran School</title>
    <link rel="icon" href="../pictures/logo.png">
    <link rel="stylesheet" href="../files/reset.css">
    <link rel="stylesheet" href="../files/bootstrap.min.css">
    <link rel="stylesheet" href="../files/font_os/css/font-awesome.min.css">
</head>
<body>
    
    <div class="container-fluid p-0">
        <p class="bg-primary p-3 h3 text-white font-weight-bold  text-center">Save Lesson Record</p>
        
        
       	<a href="?action=logout" class="col-lg-2 ml-3  col-4 btn btn-outline-primary btn-info text-white">log out</a>
       
       
   
   <div class="col-lg-6 offset-lg-3">
   <form action="savelesson.php" enctype="multipart/form-data" method="post">





<p class="mb-1 ">Full Name</p>
<input type="name" name="fname" autocomplete="off" placeholder="Enter Student Name" class="form-control text-capitalize">

      
 <p class="mb-1 ">Roll Number</p>
<input type="text" name="rollno" autocomplete="off" placeholder="Enter Roll Number" class="form-control text-capitalize">

<p class="mb-1 ">Page</p>
<input type="text" name="page" autocomplete="off" placeholder="Enter page number" class="form-control text-capitalize">




    <p class="mb-1 mt-2">Course</p>
<select name="course" id="" class="form-control" required>
  
 <option value="" disabled selected>--Select Course--</option>
    <option value="Noorani Qaida Course">Noorani Qaida Course</option>
    <option value="Learn Arabic Online">Learn Arabic Online</option>
    <option value="Quran Memorization Program">Quran Memorization Program</option>
    <option value="Online Tafseer Course Quran Translation">Online Tafseer Course (Quran Translation)</option>
    <option value="Islamic Courses for Women">Online Islamic Courses for Ladies</option>
    <option value="Learn Tajweed Quran Online">Learn Tajweed Quran Online</option>
    <option value="Online Islamic Courses for Ladies">Online Islamic Courses for Ladies</option>
    <option value="How to Pray Salah">How to Pray Salah</option>
    <option value="Islamic Studies for Kids">Islamic Studies for Kids</option>
    <option value="Learn 6 Kalmay  Islamic Duas">Learn 6 Kalmay & Islamic Duas</option>
    
</select>   
       
       

     

<p class="mb-1 mt-2">Remarks</p>
<textarea placeholder="Remarks" class="form-control" name="msg" id="" cols="20" rows="5"></textarea>
 
             <input type="submit" name="btn_submit" class="btn btn-info col-3 mt-3 mb-3">
 
  </form>
  
   </div>
        
        
    </div>
    
      
      
      
      
      
      
      
        
    <?php

			if(isset($_POST["btn_del"])){
			$id = $_POST["id"];
			$qu = "DELETE FROM savelesson_db WHERE id = '$id'";
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
			 $q = " SELECT * FROM `savelesson_db` WHERE `fname_db` LIKE '%$search%' OR `rollno_db` LIKE '%$search%' ORDER BY `id` DESC";
		}
			else{
				 $q = "SELECT * FROM `savelesson_db`";
			}
?>
   
   
   
   
   
<form action="" method="post">
    

<div class="input-group mb-2 container-fluid mt-2 ">
  <input type="text" pattern="[A-Za-z0-9]{,40}$" name="search" class="form-control  col-lg-3" placeholder="Search Name or Roll no." aria-label="Search Name or Roll no." aria-describedby="button-addon2" autocomplete="off">
  <div class="input-group-append">
    <button class="btn text-white btn-outline-warning btn-success " type="submit" name="btn_search" id="button-addon2">Search</button>
  </div>
</div>
	
</form>
	
                    <div class="col-lg-12">
        <table class="table table-striped table-bordered table-hove">
            <thead class="thead-dark">
                <tr>
                
                    <th scope="col">Name</th>
                    <th scope="col">Roll No.</th>
                    <th scope="col">Page</th>
               
                 
                    <th scope="col">Course</th>
                 
                    <th scope="col">Message</th>
                   
                   
                    <th scope="col">Delete</th>
                                 <th scope="col">Edit</th>

                 
                </tr>
            </thead>
            
            
                     <?php
		

			

    $res = mysqli_query($conn,$q);
    if(mysqli_num_rows($res) > 0){
     while($row = mysqli_fetch_assoc($res)){
        
    
    ?>  
        
             
                  
                       
                                                  
         
                
                
<tr>
<th scope="row"><?php echo $row["fname_db"];?></th>
   <td><?php echo $row["rollno_db"]; ?></td>
   <td><?php echo $row["page_db"]; ?></td>
  
    <td><?php echo $row["course_db"]; ?></td>
   
    <td><?php echo $row["msg_db"]; ?> </td>



 
   
   <td>
   
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"];?>"> 
  <input  type="submit" value="Delete"  name="btn_del" class=" text-white col-lg-12 bg-danger form-control" >

    </form>  
   
  
   	  
   
   </td>
   
   
   <td>
       <form action="update-slesson.php" class="" method="get">
  	  <input type="hidden"  name="id" value="<?php echo $row["id"];?>">
   	  <input type="submit" class="text-white col-lg-12 btn btn-primary form-control " value="Edit">
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