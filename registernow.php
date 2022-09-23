<?php
require 'insert.php';

if(isset($_POST["submit"])){
  $fname= $_POST["fname"];
  $lname= $_POST["lname"];
  $age= $_POST["age"];
  $email= $_POST["email"];
  $tel= $_POST["tel"];
  $gender= $_POST["gender"];
  $package= $_POST["package"];


  if($age!=0)
  {
    $query = "INSERT INTO reg VALUES('', '$fname', '$lname', '$age', '$email', '$tel', '$gender', '$package')";
    mysqli_query($conn, $query);
    echo
    "
    <script> 
    window.location.href = 'index.html';
    alert('Data Inserted Successfully'); </script>
    ";

  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIXICON ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!-- =============== CSS =============== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>IRON FITNESS</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/index.php" class="nav__logo">
                    <img src="assets/img/logo-nav.png" alt="logo"> IRON FITNESS
                </a>

                <ul class="nav__list">
                        <li class="nav__item">
                          <a href="/index.php" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="/aboutus.php" class="nav__link">About Us</a>
                          </li>
                          <li class="nav__item">
                            <a href="/contactus.php" class="nav__link">Contact Us</a>
                          </li>
                          


                          <div class="nav__link" >
                            <a href="/registernow.php" target="_blank" class="nav__link active-link">
                              Register Now
                            </a>
                          </div>
                    </ul>
                    <!--Close button-->
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
            
            </nav>
        </header>
  
  <style media="screen">
    label{
      display: block;
      margin-left:10%;   
    }
    input{
      border-radius:1pt;
      margin-left:10%;
      padding-left:0%;
      padding-bottom: 1%;
      margin-bottom:0.5%;
    }
    .test{
      font-size:13pt;
      margin-left:20%;
      margin-right:10%;
    }
    .test2{
      font-size:13pt;
      margin-right:10%;
      align:center;
      align-items: center;
      margin-left:20%;
    }    
    .test2 input{
      width:64%;

    }

  </style>
  <body>

  <br><br><br><br><br>
  <h1 style="text-align:center;">REGISTRATION FORM</h1><br><br>
  <div class="test2">
    <form  class="" action="" method="post" autocomplete="off">
      <label for="">First Name</label>
      <input type="text" name="fname" required value="" >
      <br><br>
      <label for="">Last Name</label>
      <input type="text" name="lname" required value="">
      <br><br>
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <br><br>
      <label for="">Email</label>
      <input type="email" name="email" required value="">
      <br><br>
      <label for="">Contact Number</label>
      <input type="tel" name="tel" required value="" >
      <br><br>
  </div>
      <div class="test">
            <label>Gender</label>
            <br>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" required value="male">
            &nbsp;
            <span>Male</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="female">
            &nbsp;
            <span>Female</span>
            <br><br>
            <label>Desired Package:</label>
            <br>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" name="package" value="basic">
            &nbsp;
            <span>Basic</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="package" value="premium">
            &nbsp;
            <span>Premium</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="package" value="diamond">
            &nbsp;
            <span>Diamond</span>
      </div>
      <br><br>
      <button type="submit" name="submit" class="btn">Submit</button>
    </form>


  </body>
</html>
