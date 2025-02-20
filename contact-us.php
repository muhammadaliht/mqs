<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us for Online Quran, Tajweed, Tafseer, and Arabic Classes</title>
  <meta name="description" content="Sign up for online Quran classes with expert tutors. Desired schedules, one-on-one live classes, & interesting Quran courses for kids & adults. Enroll now!">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="180x180" href="pictures/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="pictures/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="pictures/favicon_io/favicon-16x16.png">

<link rel="stylesheet" href="files/bootstrap.min.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
<link rel="stylesheet" href="files/NavbarStyle.css">
<link rel="stylesheet" href="files/indexStyle.css">
<link rel="stylesheet" href="files/pagesStyle.css"> 
<link rel="stylesheet" href="files/font_os/css/font-awesome.min.css"> 
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    

    <style>
    
    </style>

   
    </head>
    <body>
<!--    TopBar   -->
<div class="col-lg-12  backgroundYellow px-3 py-1">
   <div class="row">
   
   <div class="col-lg d-none d-lg-block d-md-block d-xl-block">
    <p class="col-lg"><a href="mailto:info@muhammadanquranschool.com " target="_blank" class="topbar">info@muhammadanquranschool.com</a></p>   
   </div>
   
   <div class="col-lg text-center">
    <span class="col-lg"><a href="https://wa.me/+447958910973" target="_blank" class="topbar"> <i class="fa fa-phone"></i> +44 7958 910973</a></span>   
    <span class="col-lg"><a href="https://wa.me/+61494161244" target="_blank" class="topbar" style="margin-left: 19px;"> <i class="fa fa-phone"></i> +61 494 161 244</a></span>   
   </div>
   
   <div class="col-lg text-lg-end col-lg d-none d-lg-block d-md-block d-xl-block">
    <a href="https://www.facebook.com/people/Muhammadan-Quran-School/61555131137995/" target="_blank"><i class="fa fa-facebook tIcon"></i></a>
    <a href="https://www.instagram.com/muhammadanquran/" target="_blank"><i class="fa fa-instagram tIcon"></i></a>
    <a href="https://youtube.com/@learnquran-o6y?si=JEvPZF8joueqRonK" target="_blank"><i class="fa fa-youtube-play tIcon"></i></a>
  <a href="https://wa.me/+447958910973" target="_blank"> <i class="fa fa-whatsapp tIcon"></i> </a>   

   </div>
   
    </div>
</div>
   
<!--   NavBar  -->
  <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo mx-lg-2" href="#"><img src="pictures/Muhammad-quran-school.png" width="50px" alt=""></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse offset-lg-1" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about-us.html"><i class="fa fa-circle-question"></i>About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="quran-courses-online.html"><i class="far fa-list-alt"></i>Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="our-teachers-and-tutors.html"><i class="fa fa-users"></i>Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="online-quran-learning-fees.html"><i class="far fa-dollar"></i>Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html"><i class="fa fa-blog"></i>Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php"><i class="far fa-contact-card"></i>Contact</a>
                </li>
                <li class="px-2">
                    <a href="contact-us.php" class="mb-2 mb-lg-0 navbarBtn animate__animated animate__lightSpeedInRight animate__infinite animate__slower">Get Free Trials</a>
                </li>
            </ul>
        </div>
    </nav>
    
 
<?php
require_once("connection.php");

if(isset($_POST['btn_submit'])) {
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

    // reCAPTCHA v3 Validation
    $secretKey = "6LcVzNsqAAAAAAMEhhpgefbITetBub9H3eYdjd82"; // Replace with your actual secret key
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($data)
        ]
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $responseKeys = json_decode($result, true);

    if ($responseKeys["success"] && $responseKeys["score"] >= 0.5) {
        // Insert into database if reCAPTCHA is valid
        $qu = "INSERT INTO `registrationinfo_db` (`fname_db`, `gname_db`, `email_db`, `whatsappn_db`, `countryn_db`, `cityn_db`, `gender_db`, `course_db`, `plan_db`, `msg_db`) 
               VALUES ('$fname', '$gname', '$email', '$whatsappn', '$countryn', '$cityn', '$gender', '$course', '$plan', '$msg')";
        
        $res = mysqli_query($conn, $qu);
        
        if ($res) {
            $msg = '<div class="alert alert-success col-lg-8 offset-lg-2"><b>Data received successfully!</b> Our admin will contact you soon.</div>';
        } else {
            $msg = '<div class="alert alert-danger col-lg-8 offset-lg-2"><b>There was an error submitting your request!</b> Please try again.</div>';
        }
    } else {
        $msg = '<div class="alert alert-danger col-lg-8 offset-lg-2"><b>reCAPTCHA verification failed!</b> Please try again.</div>';
    }
}
?>

 

<!--registeration  -->
<div class="container text-center py-lg-4 py-3 px-2">
<h1 class="hdg1">Contact Us for Online Quran, Tajweed, <br> Tafseer, and Arabic Classes</h1>
       
   
        </div>
<div class="px-3" style="position:relative;">

      <?php
       if(isset($msg)){
	echo $msg;
}
       ?>
  <a href="https://wa.me/+447958910973" class="fa fa-whatsapp chatIcon animate__animated animate__infinite animate__delay-1s animate__pulse"></a>

<div class="col-lg-8 offset-lg-2 p-4" style="background: antiquewhite;
    border-radius: 49px;">
   
   <form action="contact-us.php" class="col-lg-8 offset-lg-2 registerForm" enctype="multipart/form-data" method="post">

<p class="mb-1 ">Full Name</p>
<input type="text" name="fname" autocomplete="off" placeholder="Enter Your Full Name" class="form-control text-capitalize" required>

<p class="mb-1 mt-2">Email</p>
<input type="email" name="email" autocomplete="off" placeholder="Enter Your Email" class="form-control" required>
  
<p class="mb-1 mt-2">Whatsapp Number With Country Code</p>
<input type="text" name="whatsappn" autocomplete="off" placeholder="+1 XXX-XXX-XXXX" class="form-control" required>
     
<p class="mb-1 mt-2">Conutry</p>
<input type="text" name="countryn" autocomplete="off" placeholder="Enter Your Country Name" class="form-control  text-capitalize" required>
      
<p class="mb-1 mt-2">City</p>
<input type="text" name="cityn" autocomplete="off" placeholder="Enter Your City Name" class="form-control  text-capitalize" required>

<p class="mb-1 mt-2">Gender</p>
<select name="gender" class="form-control" required>
  
   <option value="" disabled selected>--Select Gender--</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    
</select>

    <p class="mb-1 mt-2">Course</p>
<select name="course"  class="form-control" required>
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
       

       <p class="mb-1 mt-2">Select Class Days</p>
<select name="plan" class="form-control" required>
  
   <option value="" disabled selected>--Select fee Plan--</option>
    <option value="2 days in a week">2 days in a week</option>
    <option value="3 days in a week">3 days in a week</option>
    <option value="4 days in a week">4 days in a week</option>
    <option value="5 days in a week">5 days in a week</option>
    <option value="Weekend Classes">Weekend Classes</option>
    
</select>


<p class="mb-1 mt-2">Which weekday(s) are most suitable for your classes?</p>
<input type="text" name="gname" autocomplete="off" placeholder="Choose Days" class="form-control  text-capitalize" required>


<p class="mb-1 mt-2">Your Message(if any)</p>
<textarea placeholder="If you have any query/message write here...." class="form-control" name="msg" cols="20" rows="5"></textarea>

    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">


<input type="submit" name="btn_submit" class="btn1 my-3">
 
  </form>
  
   </div>
   
   </div>



<!-- Ask A Question -->

<div class="col-lg-12 py-5 px-3 px-lg-0 sec-14 mt-5">
  <div class="row">

  <div class="col-lg-5 offset-lg-1">
<div class="col-lg-12">
<h2 class="hdg24">Join Muhammadan Quran School Now and Take the First Step Towards Online Quran Learning!</h2>
</div>
<div class="col-lg-12 pt-3">
<p class="text20">
Become one of the millions of people studying the Quran worldwide. Take advantage of 3 free trials and many courses to learn the Quran from native Arab, Egyptian, and Pakistani best male and female Quran teachers and tutors. Our online Quran classes with Tajweed make it easy and flexible for students of all skill levels to learn how to read the Quran correctly.
<br> <br>
Learn the Quran online with Tajweed from the comfort of your own home with the help of qualified and experienced teachers. Don't skip this great opportunity to learn the Quran online with Tajweed.
<br> <br>
Muhammadan Qur'an School spans 35 countries—including the UK, USA, Australia, Canada, Europe, and many others! This is the place where you and your kids can learn about the Quran and Islam online without any fear. So why wait? Enrol yourself and your child today for a free trial class
</p>
</div>
</div>

<div class="col-lg-4 col-10 offset-1 py-4 offset-lg-1 sec14-1 mt-5 mt-lg-0">
  <div class="col-lg-12 my-4">
  <p class="hdg25">Ask A Question</p>
  </div>
  <div class="col-lg-12">
    <form>
      <div class="row mx-2 p-0">
          <div class="col mx-2 px-lg-0">
            <input type="text" class="form-control col-6 input1" placeholder="Enter Name"  required>
          </div>
          <div class="col mx-2 px-0">
            <input type="email" class="form-control col-6 input1" placeholder="Enter Email" required>
          </div>
        </div>
        <div class="row  my-4 mx-2 p-0">
          <div class="col mx-2 px-lg-0">
            <input type="text" class="form-control col-6 input1" placeholder="Phone Number" required>
          </div>
          <div class="col mx-2 px-0">
            <input type="text" class="form-control col-6 input1" placeholder="Country" required>
          </div>
        </div>
        <div class="mx-3 p-lg-0">
          <textarea placeholder="Message" class="form-control col-12 input2" required></textarea>
        </div>
        
        
        <div class="col-12 my-4">
          <input type="submit" value="Submit" class="btn col-10 offset-1 btn4">
        </div>
  </form>
  </div>
  </div>
  </div>
</div>            
        
        
  <!--footer-->
  <footer class="text-white" style="background-color: black" >
  <div class="container py-3 text-white">
    <div class="row">
      <div class="col-lg-3 mb-4 mb-lg-0">
        <a href="#" class="d-flex flex-column align-items-center text-decoration-none">
           <img src="pictures/Muhammad-quran-school.png" width="150px" class="" alt="">
       
          <p class="fw-semibold" style="font-size: 31px; color: white">Muhammadan</p>
          <p style="font-size: 27px; color: white;" class="fw-semibold">Quran School</p>
        </a>
      </div>
      <div class="col-lg-9 px-3">
        <div class="row">
          <div class="col-sm-6 col-lg mb-3 px-3">
            <h3 class="text-uppercase">Regular Courses</h3>
            <ul class="list-unstyled ">
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i> Learn Noorani Qaida</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Hifz Quan Online (Quran Memorization)</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Learn Tajweed Online</a></li>
              <li><a href="#" class="text-decoration-none text-white-50 "><i class="fa fa-caret-right arrow"></i>Online Arabic Course</a></li>
              <li><a href="#" class="text-decoration-none text-white-50 "><i class="fa fa-caret-right arrow"></i>Online Tafseer Course</a></li>
              <li><a href="#" class="text-decoration-none text-white-50 "><i class="fa fa-caret-right arrow"></i>Online Quran Classes for Kids</a></li>
              <li><a href="#" class="text-decoration-none text-white-50 "><i class="fa fa-caret-right arrow"></i>Online Quran Classes for Adults</a></li>
              <li><a href="#" class="text-decoration-none text-white-50 "><i class="fa fa-caret-right arrow"></i>Online Quran Courses for Ladies</a></li>
      
            </ul>
          </div>
          <div class="col-sm-6 col-lg mb-3 px-2">
            <h3 class="text-uppercase">Complementary Courses</h3>
            <ul class="list-unstyled">
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>How to Pray Salah/Namaz</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Islamic Studies for Kids</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Islamic Masnoon Duayn and 6 Klamay</a></li>

            </ul>
          </div>
          <div class="col-sm-6 col-lg mb-3 px-3">
            <h3 class="text-uppercase">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>About Us</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Courses</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Why Us</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Our Teachers</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Get Three Free Trials</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Packages</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Blog</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Privacy Policy</a></li>
              <li><a href="#" class="text-decoration-none text-white-50"><i class="fa fa-caret-right arrow"></i>Contact Us</a></li>
            
          
            </ul>
          </div>
          <div class="col-sm-6 col-lg px-2">
            <h3 class="text-uppercase">Social Media</h3>
            <div class="d-flex">
              <a href="https://www.facebook.com/people/Muhammadan-Quran-School/61555131137995/" target="_blank" class="me-2 text-white-50" title="Facebook">
                <i class="fa fa-facebook-f"></i>
              </a>
              
              <a href="https://www.instagram.com/muhammadanquran/" target="_blank" class="me-2 text-white-50" title="Instagram">
               <i class="fa fa-instagram"></i>
              </a>
              
              <a href="https://youtube.com/@learnquran-o6y?si=JEvPZF8joueqRonK" target="_blank" class="me-2 text-white-50" title="You Tube">
               <i class="fa fa-youtube-play"></i>
              </a>
              
               <a href="https://wa.me/+447958910973" target="_blank" class="me-2 text-white-50" title="You Tube">
               <i class="fa fa-whatsapp"></i>
              </a>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-2 offset-lg-10 px-4 py-3 ">
           <img src="pictures/Payment-Methods.png" width="120px" alt="">
    </div>
    
      <div class="text-center text-white py-3 text-secondary">
       Copyright &copy; 2025 - All Rights Reserved Muhammadan Quran School
    </div>
  </div>
</footer>
   
   <!--site-key-->
<script src="https://www.google.com/recaptcha/api.js?render=6LcVzNsqAAAAABse-OrmYm7lpCLHvRsNic8gBR-d"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LcVzNsqAAAAABse-OrmYm7lpCLHvRsNic8gBR-d', { action: 'submit' }).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>  
<script src="files/bootstrap.min.js"></script>       
<script src="files/bootstrap.bundle.js"></script>  
<script src="files/navbarScript.js"></script> 
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src="files/NavbarScript.js"></script> 
    
      <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

    </body>
</html>
