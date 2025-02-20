<?php
session_start();
require_once('login_session.php');
require_once("../connection.php");
?>


<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Client - Muhammadan Quran School</title>
  <link rel="icon" href="../pictures/logo.png">
  <link rel="stylesheet" href="../files/reset.css">
  <link rel="stylesheet" href="../files/bootstrap.min.css">
  <link rel="stylesheet" href="../files/font_os/css/font-awesome.min.css">
</head>

<body>



  <?php

  $id = $_GET["id"];
  if (isset($_POST["btn_update"])) {
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





    $qu = "UPDATE `registeredclient_db` SET 
    `adate_db` = '$adate',
    `rollno_db` = '$rollno',
    `fees_db` = '$fees',
  `fname_db` = '$fname',
  `gname_db` = '$gname',
  `email_db` = '$email',
  `whatsappn_db` = '$whatsappn',
  `countryn_db` = '$countryn',
  `cityn_db` = '$cityn',
  `gender_db` = '$gender',
  `course_db` = '$course',
  `plan_db` = '$plan',
  `msg_db` = '$msg'
  
  WHERE 	`id`=" . $id;

    $res = mysqli_query($conn, $qu);
    if ($res) {
      header("location:registeredclient.php");
    } 
      else {
    }
  }


  $qu = "SELECT * FROM `registeredclient_db` WHERE `id` =" . $id;
  $res = mysqli_query($conn, $qu);
  $row = mysqli_fetch_assoc($res);

  ?>






  <div class="container-fluid p-0">
    <p class="bg-primary p-3 h3 text-white font-weight-bold  text-center">Update Lesson Record</p>


    <a href="?action=logout" class="col-lg-2 ml-3  col-4 btn btn-outline-primary btn-info text-white">log out</a>

    <div class="col-lg-6 offset-lg-3">

      <form action="" enctype="multipart/form-data" method="post">
<p class="mb-1 ">Admission Date</p>
<input type="date" name="adate" autocomplete="off" value="<?php echo $row['adate_db']; ?>"  placeholder="Enter Client Admission Date" class="form-control">

<p class="mb-1 ">Roll No</p>
<input type="text" name="rollno" value="<?php echo $row['rollno_db']; ?>"  autocomplete="off" placeholder="Enter Client Roll no." class="form-control text-capitalize">

<p class="mb-1 ">Fees</p>
<input type="text" name="fees" value="<?php echo $row['fees_db']; ?>"  autocomplete="off" placeholder="Enter Client Fees" class="form-control text-capitalize">

<p class="mb-1 ">Full Name</p>
<input type="name" name="fname" value="<?php echo $row['fname_db']; ?>"  autocomplete="off" placeholder="Enter Client Full Name" class="form-control text-capitalize">


<p class="mb-1 mt-2">Email</p>
<input type="email" value="<?php echo $row['email_db']; ?>"  name="email" autocomplete="off" placeholder="Enter Client Email" class="form-control">
  
     <p class="mb-1 mt-2">Whatsapp Number</p>
<input type="text" name="whatsappn" value="<?php echo $row['whatsappn_db']; ?>"  autocomplete="off" placeholder="Enter Client Whatsapp Number" class="form-control">
     
     <p class="mb-1 mt-2">Conutry Name</p>
<input type="text" name="countryn" value="<?php echo $row['countryn_db']; ?>"  autocomplete="off" placeholder="Enter Client Country Name" class="form-control  text-capitalize">
      
 
 <p class="mb-1 mt-2">City Name</p>
<input type="text" name="cityn" value="<?php echo $row['cityn_db']; ?>"  placeholder="Enter Client City Name" class="form-control  text-capitalize">





<p class="mb-1 mt-2">Gender</p>
<select name="gender" id="" class="form-control">
  
   <option value="" disabled>--Select Client Gender--</option>
    <option value="Male" <?php if ($row['gender_db'] == "Male") echo "selected"; ?>>Male</option>
    <option value="Female" <?php if ($row['gender_db'] == "Female") echo "selected"; ?>>Female</option>
    
</select>

    <p class="mb-1 mt-2">Course</p>
    <select name="course" class="form-control">

   <option value="" disabled>--Select Course--</option>

    <option <?php if ($row['course_db'] == "Noorani Qaida Course") echo "selected"; ?> value="Noorani Qaida Course">Noorani Qaida Course</option>
    <option <?php if ($row['course_db'] == "Learn Arabic Online") echo "selected"; ?> value="Learn Arabic Online">Learn Arabic Online</option>
    <option <?php if ($row['course_db'] == "Quran Memorization Program") echo "selected"; ?> value="Quran Memorization Program">Quran Memorization Program</option>
    <option <?php if ($row['course_db'] == "Online Tafseer Course Quran Translation" echo "selected"; ?> value="Online Tafseer Course Quran Translation">Online Tafseer Course (Quran Translation)</option>
    <option <?php if ($row['course_db'] == "Online Islamic Courses for Ladies") echo "selected"; ?> value="Islamic Courses for Women">Online Islamic Courses for Ladies</option>
    <option <?php if ($row['course_db'] == "Learn Tajweed Quran Online") echo "selected"; ?> value="Learn Tajweed Quran Online">Learn Tajweed Quran Online</option>
    <option <?php if ($row['course_db'] == "Online Islamic Courses for Ladies") echo "selected"; ?> value="Online Islamic Courses for Ladies">Online Islamic Courses for Ladies</option>
    <option <?php if ($row['course_db'] == "How to Pray Salah") echo "selected"; ?> value="How to Pray Salah">How to Pray Salah</option>
    <option <?php if ($row['course_db'] == "Islamic Studies for Kids") echo "selected"; ?> value="Islamic Studies for Kids">Islamic Studies for Kids</option>
    <option <?php if ($row['course_db'] == "Learn 6 Kalmay Islamic Duas") echo "selected"; ?> value="Learn 6 Kalmay Islamic Duas">Learn 6 Kalmay & Islamic Duas</option>                          
                                                     
        </select> 
       
       

       <p class="mb-1 mt-2">Select fees Plan</p>
<select name="plan" id="" class="form-control">
  
   <option value="" disabled>--Select Plan--</option>
    <option value="2 days in a week" <?php if ($row['plan_db'] == '2 days in a week') echo "selected"; ?>>2 days in a week</option>
    
    <option value="3 days in a week" <?php if ($row['plan_db'] == '3 days in a week') echo "selected"; ?> >3 days in a week</option>
    
    <option value="4 days in a week" <?php if ($row['plan_db'] == '4 days in a week') echo "selected"; ?>>4 days in a week</option>
    
    <option value="5 days in a week" <?php if ($row['plan_db'] == '5 days in a week') echo "selected"; ?> >5 days in a week</option>
    
    <option value="Weekend Classes" <?php if ($row['plan_db'] == 'Weekend Classes') echo "selected"; ?>>Weekend Classes</option>
    
</select>

<p class="mb-1 mt-2">Which weekday(s) are most suitable for your classes?</p>
<input type="name" name="gname" autocomplete="off" placeholder="Choose Days" class="form-control  text-capitalize">


<p class="mb-1 mt-2">Your Message</p>
        <textarea placeholder="Remarks" class="form-control" name="msg" cols="20" rows="5"><?php echo $row['msg_db']; ?></textarea>


        <input type="submit" name="btn_update" class="btn btn-primary mt-2 btn-block all_form" value="Update">
      </form>
    </div>
  </div>

  <script src="../files/jquery-3.3.1.min.js"></script>
  <script src="../files/bootstrap.bundle.min.js"> </script>
  <script src="../files/bootstrap.min.js"></script>

  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

</body>

</html>