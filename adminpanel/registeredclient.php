<?php
session_start();
require_once('login_session.php');
require_once("../connection.php");

   
  
    
   if(isset($_POST['btn_submit'])){
       

	$adate = $_POST['adate'];
	$rollno = $_POST['rollno'];
	$fees = $_POST['fees'];
	$fname = $_POST['fname'];
	$gname = $_POST['gname'];
	$email = $_POST['email'];
	$whatsappn = $_POST['whatsappn'];
	$countryn = $_POST['countryn'];
	$cityn = $_POST['cityn'];
	$gender = $_POST['gender'];
	$course = $_POST['course'];
	$plan = $_POST['plan'];
	$msg = $_POST['msg'];
	
$qu = "INSERT INTO `registeredclient_db` (`adate_db`,`rollno_db`,`fees_db`,`fname_db`,`gname_db`,`email_db`,`whatsappn_db`,`countryn_db`,`cityn_db`,`gender_db`,
`course_db`,`plan_db`,`msg_db`) VALUES ('$adate','$rollno','$fees','$fname','$gname','$email','$whatsappn','$countryn','$cityn','$gender','$course','$plan','$msg')";
	
	$res = mysqli_query($conn,$qu);
	
	if($res){
		echo "inserted";
	}
	
	else{
		echo "not-inserted";
	}
	
}

?>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrated Clients - Muhammadan Quran School</title>
    <link rel="icon" href="../pictures/logo.png">
    <link rel="stylesheet" href="../files/reset.css">
    <link rel="stylesheet" href="../files/bootstrap.min.css">
    <link rel="stylesheet" href="../files/font_os/css/font-awesome.min.css">
    
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
    
    
    
    </style>
</head>
<body>
   
  

   
   
   
   <div class="container-fluid p-0">
   
   <p class="bg-info font-weight-bold p-3 text-white text-center h2">REGISTERED CLIENT</p>
 
       	<a href="?action=logout" class="col-lg-2 ml-3  col-4 btn btn-outline-primary btn-info text-white">log out</a>
       
       
   
   <div class="col-lg-6 offset-lg-3">
   <form action="registeredclient.php" enctype="multipart/form-data" method="post">

<p class="mb-1 ">Admission Date</p>
<input type="date" name="adate" autocomplete="off" placeholder="Enter Client Admission Date" class="form-control">

<p class="mb-1 ">Roll No</p>
<input type="text" name="rollno" autocomplete="off" placeholder="Enter Client Roll no." class="form-control text-capitalize">

<p class="mb-1 ">Fees</p>
<input type="text" name="fees" autocomplete="off" placeholder="Enter Client Fees" class="form-control text-capitalize">

<p class="mb-1 ">Full Name</p>
<input type="name" name="fname" autocomplete="off" placeholder="Enter Client Full Name" class="form-control text-capitalize">

<p class="mb-1 mt-2">Guardian's Name</p>
<input type="name" name="gname" autocomplete="off" placeholder="Enter Client Guardian's Name" class="form-control  text-capitalize">

<p class="mb-1 mt-2">Email</p>
<input type="email" name="email" autocomplete="off" placeholder="Enter Client Email" class="form-control">
  
     <p class="mb-1 mt-2">Whatsapp Number</p>
<input type="text" name="whatsappn" autocomplete="off" placeholder="Enter Client Whatsapp Number" class="form-control">
     
     <p class="mb-1 mt-2">Conutry Name</p>
<input type="text" name="countryn" autocomplete="off" placeholder="Enter Client Country Name" class="form-control  text-capitalize">
      
 
 <p class="mb-1 mt-2">City Name</p>
<input type="text" name="cityn" placeholder="Enter Client City Name" class="form-control  text-capitalize">


<p class="mb-1 mt-2">Gender</p>
<select name="gender" id="" class="form-control" required>
  
   <option value="" disabled selected>--Select Client Gender--</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    
</select>

    <p class="mb-1 mt-2">Course</p>
<select name="course" class="form-control" required>
  
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
       
       

       <p class="mb-1 mt-2">Select fees Plan</p>
<select name="plan" id="" class="form-control" required>
  
   <option value="" disabled selected>--Select Plan--</option>
    <option value="2 days in a week">2 days in a week</option>
    <option value="3 days in a week">3 days in a week</option>
    <option value="4 days in a week">4 days in a week</option>
    <option value="5 days in a week">5 days in a week</option>
    <option value="Weekend Classes">Weekend Classes</option>
    
</select>

<p class="mb-1 mt-2">Which weekday(s) are most suitable for your classes?</p>
<input type="name" name="gname" autocomplete="off" placeholder="Choose Days" class="form-control  text-capitalize">


<p class="mb-1 mt-2">Your Message</p>
<textarea placeholder="If you have any query/message write here...." class="form-control" name="msg" id="" cols="20" rows="5"></textarea>
 
      <input type="submit" name="btn_submit" class="btn btn-info col-3 mt-3 mb-3">
 
  </form>
  
   </div>
    </div>
   
    <?php

			if(isset($_POST["btn_del"])){
			$id = $_POST["id"];
			$qu = "DELETE FROM registeredclient_db WHERE id = '$id'";
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
			 $q = " SELECT * FROM `registeredclient_db` WHERE `fname_db` LIKE '%$search%' OR `rollno_db` LIKE '%$search%' ORDER BY `id` DESC";
		}
			else{
				 $q = "SELECT * FROM `registeredclient_db`";
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
                
                  
                    <th scope="col">Admission Date</th>
                    <th scope="col">Roll No.</th>
                    <th scope="col">fees</th>
                    <th scope="col">Name</th>
                   
                    <th scope="col">Email</th>
                    <th scope="col">Whatsapp Number</th>
                    <th scope="col">Conutry Name</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Course</th>
                    <th scope="col">Plan</th>
                    <th scope="col">days</th>
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
<th><?php echo $row["adate_db"];?></th>
   <td><?php echo $row["rollno_db"]; ?></td>
   <td><?php echo $row["fees_db"]; ?></td>
   <td><?php echo $row["fname_db"]; ?></td>
   
    <td><?php echo $row["email_db"]; ?></td>
    <td><?php echo $row["whatsappn_db"]; ?></td>
    <td><?php echo $row["countryn_db"]; ?></td>
    <td><?php echo $row["cityn_db"]; ?></td>
    <td><?php echo $row["gender_db"]; ?></td>
    <td><?php echo $row["course_db"]; ?></td>
    <td><?php echo $row["plan_db"]; ?></td>
    <td><?php echo $row["gname_db"]; ?></td>
    <td><?php echo $row["msg_db"]; ?> <br> </td>



 
   
   <td>
   
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"];?>"> 
  <input  type="submit" value="Delete"  name="btn_del" class=" text-white col-lg-12 bg-danger form-control  " >

    </form>  
   
  
   	  
   
   </td>
   
   
   <td>
       <form action="update-rclient.php" class="" method="get">
  	  <input type="hidden"  name="id" value="<?php echo $row["id"];?>">
   	  <input type="submit" name="btn_update" class="text-white col-lg-12 btn btn-primary form-control " value="Edit">
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