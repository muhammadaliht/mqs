<?php
session_start();
require_once('login_session.php');
require_once("../connection.php");
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



  <?php

  $id = $_GET["id"];
  if (isset($_POST["btn_update"])) {
    $fname = $_POST['fname'];
    $rollno = $_POST['rollno'];
    $page = $_POST['page'];
    $course = $_POST['course'];
    $msg = $_POST['msg'];





    $qu = "UPDATE `savelesson_db` SET 
  `fname_db` = '$fname',
  `rollno_db` = '$rollno',
  `page_db` = '$page',
  `course_db` = '$course',
  `msg_db` = '$msg'
  
  WHERE 	`id`=" . $id;

    $res = mysqli_query($conn, $qu);
    if ($res) {
      header("location:savelesson.php");
    } else {
    }
  }


  $qu = "SELECT * FROM `savelesson_db` WHERE `id` =" . $id;
  $res = mysqli_query($conn, $qu);
  $row = mysqli_fetch_assoc($res);

  ?>






  <div class="container-fluid p-0">
    <p class="bg-primary p-3 h3 text-white font-weight-bold  text-center">Update Lesson Record</p>


    <a href="?action=logout" class="col-lg-2 ml-3  col-4 btn btn-outline-primary btn-info text-white">log out</a>

    <div class="col-lg-6 offset-lg-3">

      <form action="" enctype="multipart/form-data" method="post">

        <p class="mb-1 ">Full Name</p>
        <input type="name" name="fname" value="<?php echo $row['fname_db']; ?>" autocomplete="off" placeholder="Enter Student Name" class="form-control text-capitalize">

        <p class="mb-1 ">Roll Number</p>
        <input type="text" name="rollno" value="<?php echo $row['rollno_db']; ?>" autocomplete="off" placeholder="Enter Roll Number" class="form-control text-capitalize">

        <p class="mb-1 ">Page</p>
        <input type="text" name="page" value="<?php echo $row['page_db']; ?>" autocomplete="off" placeholder="Enter page number" class="form-control text-capitalize">


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

        <p class="mb-1 mt-2">Remarks</p>
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