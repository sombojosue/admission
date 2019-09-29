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
    <link href="css/all.css" rel="stylesheet">
    <script type="text/javascript" src="js/master.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
     new WOW().init();
   </script>
  </head>
  <body>
 <!-- Header -->
 <header class="header-search animated fadeInDown">
  <div class="logo-search">
    <img src="images/logo.png" id="logo-img">
  </div>
  <div class="contact-search">
      <span class="size">
       <i class="fas fa-phone-volume"></i>
       </span>
       <span>9987310771</span>
       <span class="clear"></span>
       <span class="size">
       <i class="fas fa-envelope"></i>
       </span>
       <span><a href="mailto:admissionrequestinfo@protonmail.com">admissionrequestinfo@protonmail.com</a></span>
  </div>
 </header>
 <div class="float-clear">

 </div>
 <!-- Main contain -->
 <main class="admin-search animated fadeInDown">
   <div class="search-box">
      <form class="example example_data" action="">
      <input type="text" placeholder="Search course ..." required name="search_input" id="search_data">
      <button type="submit" name="search"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class="search-title">
    <h2>Result found</h2>
    <br>
  </div>
  <div class="search-result">
    <?php
      if (isset($_GET['search'])) {
      $search = clear($_GET['name']);
      $search_sql = clear_sql($_GET['search_input']);
      $search_query = "select * from course where course ='$search_sql' or full_form  like '%$search_sql%' limit 1";
      $res = mysqli_query($con, $search_query);
      if(mysqli_num_rows($res) > 0) {
       echo '<table class="table tble-hover">';
       while ($row=mysqli_fetch_assoc($res)) {
       echo  '<tr>';
       echo  '<td>Course</td>';
       echo  '<td>'.$row['course'].'</td>';
       echo  '</tr>';
       echo  '<tr>';
       echo  '<td>Full form</td>';
       echo '<td>'.$row['full_form'].'</td>';
       echo '</tr>';
       echo '<tr>';
       echo '<td>Eligibility</td>';
       echo '<td>'.$row['eligibility'].'</td>';
       echo '</tr>';
       echo '<tr>';
       echo '<td>Duration</td>';
       echo '<td>'.$row['duration'].'</td>';
       echo '</tr>';
       echo '<tr>';
       echo '<td>Course Type</td>';
       echo '<td>'.$row['course_type'].'</td>';
       echo '</tr>';
       echo '<tr>';
       echo '<tr>';
       echo '<td>Advance Courses</td>';
       echo '<td>'.$row['advance_course'].'</td>';
       echo '</tr>';
       echo '<tr>';
       echo '<td>Employment opportunities</td>';
       echo '<td>'.$row['opportunities'].'</td>';
       echo '</tr>';

       }
       echo '</table>';
      }else{
        echo "<h3 class='display-5 text-danger text-center' style='font-size:25px;padding-top:80px;margin:5px auto;'>Oof sorry no data found <br>please try another course like bca ...</h3>";
      }
      }
    ?>
     
       
       
       
       
     
  </div>
 </main>
 <script src="js/owl.carousel.min.js"></script>
 <script type="text/javascript" src="js/all.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
