<?php
require_once("php/init.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>English Learning | Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/master.css">
    <script type="text/javascript" src="js/master.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items: 2,
      autoplay: true,
      smartSpeed: 700,
      loop: true,
      autoplayHoverPause: true,
      nav:true,
      dots: false,
      navText: ['<i class="fa fa-angle-left" style="font-size:40px;color:#128C7E"></i>','<i class="fa fa-angle-right" style="font-size:40px;color:#128C7E"></i>']
    });
    });
    </script>

    <script>
     new WOW().init();
   </script>
  </head>
  <body>
 <!-- Header -->
 <header class="header animated fadeInDown">
   <!-- Mobile section -->
   <div class="search_hearder">
    <form class="example" action="search_course.php">
     <input type="text" placeholder="Search course ..." required name="search" id="search">
     <button type="submit" id="search_btn"><i class="fa fa-search"></i></button>
    </form>
   </div>
   <div class="mobile_menu">
     <span>
      <i class="fas fa-bars" style="color:#fff;" onclick="menubar()"></i>
     </span>
     <div class="menu_mobile_responsible">
       <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="campus.php">Campus</a></li>
         <li><a href="course.php">Courses</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="contact.php">Contact</a></li>
         <li><a href="admission.php" id="active">Admission</a></li>
         <li>
          <i class="fas fa-window-close" style="color:#fff;font-size:28px;cursor:pointer;" onclick="closeMenu()"></i>
         </li>
       </ul>
     </div>
   </div>
   <!-- Menu Mobile -->
   <section class="contact">
     <!-- personal Info contact -->
     <div class="personalinfo">
       <span class="left"></span>
       <span class="size">
       <i class="fas fa-phone-volume"></i>
       </span>
       <span>9987310771</span>
       <span class="clear"></span>
       <span class="size">
       <i class="fas fa-envelope"></i>
       </span>
       <span><a href="mailto:admissionrequestinfo@protonmail.com" id="linkup">admissionrequestinfo@protonmail.com</a></span>
     </div>
     <!-- Social network contact -->
     <div class="socialnetwork">
      <form class="example" action="action_page.php">
     <input type="text" placeholder="Search course ..." name="search" id="search">
     <button type="submit" onclick="return search_course()"><i class="fa fa-search"></i></button>
    </form>
   </section>
   <div class="clear_float">

   </div>
   <nav class="menu_section" id="menu_top_space">
     <!-- Logo section -->
     <div class="menu_padding">
     <div class="logo">
      <img src="images/logo.png" alt="" id="logo_brand">
     </div>
     <!-- Menu Desktop -->
     <div class="menu">
       <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="campus.php">Campus</a></li>
         <li><a href="course.php">Courses</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="contact.php">Contact</a></li>
         <li><a href="admission.php" id="active">Admission</a></li>
       </ul>
     </div>
     </div>
   </nav>
 </header>
 <!-- Main contain -->
 <main class="admin-main animated fadeInDown">
   <div class="admin-detail">
     <div class="admin-detail-info">
      <div class="admin-detail-center">
        <h1>Request an <br />Admission</h1>
        <br>
        <p class="text-admin">Admissions open for bachelor Degree and master Degree with placement guarantee, international study tour, ipad, iphone, study materials, scholarships, etc. Call +918861657097. -Indian Institute, MG Road, Bangalore.</p>
         <br>
        <h2>Help line</h2>
        <p class="number-admin">+9987310771</p>
      </div>
     </div>
     <i class="fas fa-chevron-circle-right" id="phone-hide" style="position: absolute;top:280px;left: 48%;font-size:50px;color:#FA8807;"></i>
     <div class="admin-detail-form">
      <p id="contact_error" class="error_report" style="width: 75%;">Hello world from joshua</p>
      <div class="admin-detail-form-input form-group">
         <form class="" action="" method="post">
           <input type="text" name="fullName" id="fullname" value="" class="form-controls" placeholder=" Enter your name"><br>
           <input type="tel" name="phone" id="phone" value="" class="form-controls" placeholder=" Enter your phone +(country code)                    +254876543287"><br>
           <input type="email" name="email" value="" id="email" class="form-controls" placeholder=" Enter your email"><br>
           <input type="text" name="country" value="" id="email" class="form-controls" placeholder=" Enter your country"><br>
           <input type="text" name="education" value="" id="email" class="form-controls" placeholder=" Enter your education"><br>
           <select class="form-controls" name="course">
             <option value="select">select course</option>
             <option value="bca">BCA</option>
             <option value="bba">BBA</option>
             <option value="bcom">BCOM</option>
             <option value="nurse">NURSING</option>
             <option value="mba">MBA</option>
             <option value="pharmacy">PHARMACY</option>
           </select>
           <input type="submit" name="register" value="APPLY NOW"  class="form-controls form-controls-submit">
         </form>
      </div>
     </div>
   </div>
   <!-- Send data into the database system -->
      <?php
if (isset($_POST['register'])) {
  /* Clear data from user */
  $name = clear($_POST['fullName']);
  $phone = clear($_POST['phone']);
  $email = clear($_POST['email']);
  $country = clear($_POST['country']);
  $education = clear($_POST['education']);
  $course = clear($_POST['course']);
  /* clear for sql injection */
  $name_sql = clear_sql($_POST['fullName']);
  $phone_sql = clear_sql($_POST['phone']);
  $email_sql = clear_sql($_POST['email']);
  $country_sql = clear_sql($_POST['country']);
  $education_sql = clear_sql($_POST['education']);
  $course_sql = clear_sql($_POST['course']);
  
  if ($course_sql === 'select') {
    echo "<script>
          var error = document.getElementById('contact_error');
          error.style.display = 'block';
          error.innerHTML = 'Please choose course !!!';
          window.location = 'admission.php#contact_error';
          </script>";
  }
  elseif (empty($name_sql)) {
    echo "<script>
          var error = document.getElementById('contact_error');
          error.style.display = 'block';
          error.innerHTML = 'Please Enter name !!!';
          window.location = 'admission.php#contact_error';
          </script>";
  }elseif(empty($phone_sql)) {
    echo "<script>
         var error = document.getElementById('contact_error');
          error.style.display = 'block';
          error.innerHTML = 'Please Enter Phone !!!';
          window.location = 'admission.php#contact_error';
          </script>";
  }
  elseif(empty($email_sql)) {
    echo "<script>
         var error = document.getElementById('contact_error');
          error.style.display = 'block';
          error.innerHTML = 'Please Enter email !!!';
          window.location = 'admission.php#contact_error';
          </script>";
  }
  elseif(is_int($name_sql)) {
    echo "<script>
          var error = document.getElementById('contact_error');
          error.style.display = 'block';
          error.innerHTML = 'Please Enter propre name !!!';
          window.location = 'admission.php#contact_error';
          </script>";
  }
  elseif(is_int($phone_sql)) {
    echo "<script>
          var error = document.getElementById('contact_error');
          error.style.display = 'block';
          error.innerHTML = 'Please Enter propre phone number !!!';
          window.location = 'admission.php#contact_error';
          </script>";
  }elseif(strlen($phone_sql) < 12) {
    echo "<script>
          var error = document.getElementById('contact_error');
          error.style.display = 'block';
          error.innerHTML = 'Please start phone number with +(country code)';
          window.location = 'admission.php#contact_error';
          </script>";
  }
  elseif(strlen($name_sql) > 9) {
    echo "<script>
    var error = document.getElementById('contact_error');
    error.style.display = 'block';
    error.innerHTML = 'Please Name must not be more than 9 !!!';
    window.location = 'admission.php#contact_error';
    </script>";
  }elseif(strlen($email_sql) > 25) {
    echo "<script>
       var error = document.getElementById('contact_error');
          error.style.display = 'block';
          error.innerHTML = 'Please email must not be more than 25';
          window.location = 'admission.php#contact_error';
          </script>";
  }
  elseif (!filter_var($email_sql, FILTER_VALIDATE_EMAIL)){
    echo "<script>
    var error = document.getElementById('contact_error');
    error.style.display = 'block';
    error.innerHTML = 'Please Enter validate email !!!';
    window.location = 'admission.php#contact_error';
    </script>";
  }else{
    
  /* Send data into the mysql */
  
  /* check if the email already exist inside the database */
  $email_query = "select email,course from admission where email = '$email_sql' and course='$course_sql'";
  $name_query = "select name from admission where name = '$name_sql'";
  $res_email = mysqli_query($con, $email_query);
  $res_name = mysqli_query($con, $name_query);
  if (mysqli_num_rows($res_email) > 0) {
    echo "<script>alert('Thanks you already apply just stay on We will contact you')</script>";
    echo "<script>window.location = 'admission.php'</script>";
  }
  elseif (mysqli_num_rows($res_name) > 0) {
    echo "<script>alert('One student must take one admission course')</script>";
    echo "<script>window.location = 'admission.php'</script>";
  }
  else
  {
  /* If email never find inside the database */
  $sql_query = "insert into admission(name,phone,email,city,education,course) values('$name_sql','$phone_sql','$email_sql','$country_sql','$education_sql','$course_sql')";
  $res = mysqli_query($con, $sql_query);
  if ($res) {
    echo "<script>alert('Thanks to take your admission to us Just wait for news instruction')</script>";
  }else{
    echo "<script>alert('Oof something goes wrong ')</script>";
  }
  }
  }
}
?>
   
   <div class="center_data">

   </div>
 </main>
 <script src="js/owl.carousel.min.js"></script>
 <script type="text/javascript" src="js/all.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
