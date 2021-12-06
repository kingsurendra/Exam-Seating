<?php
session_start();

$server='localhost';
$dbuser='root';
$dbpass='';
$db='examseat';
$conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection


if (isset($_POST['submit'])) {
  # code...
  $room = $_POST['room'];
  $_SESSION['room'] = $room;
  header('location:Rooms/example.php');

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>examseating-arrangement - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="https://upload.wikimedia.org/wikipedia/en/4/49/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" rel="icon">
  <link href="../Model/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="mainblock.html" rel="stylesheet">
  <link href="Ablock.html" rel="stylesheet">
  <link href="B-Block.html" rel="stylesheet">
  <style>
    .Block{
       border: 3px solid skyblue;
       border-collapse: collapse;
       font-size: 25px;
       text-align: center;
       height: 150px;
    }
</style>
  <!-- =======================================================
  * Template Name: iPortfolio - v3.1.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">SRIT</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/sritatp" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/sritatp" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/sritatp/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!--a href="#" class="google-plus"><i class="bx bxl-skype"--></i></a>
          <a href="https://www.linkedin.com/school/sritatp/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="index.html" class="nav-link scrollto "><i class="bx bx-building"></i> <span>Building</span></a></li>
          <li><a href="Ablock.php" class="nav-link scrollto"><i class="bx bx-building"></i><span>A Block</span></a></li>
          <li><a href="B-Block.php" class="nav-link scrollto active"><i class="bx bx-building"></i><span>B Block</span></a></li>
          <li><a href="mainblock.html" class="nav-link scrollto"><i class="bx bx-building"></i><span>Main Block</span></a></li>
         <!-- <li><a href="#seminarhallmainblock" class="nav-link scrollto"><i class="bx bx-building"></i><span>Seminar Hall-1</span></a></li>
          <li><a href="#seminarhallbblock" class="nav-link scrollto"><i class="bx bx-building"></i><span>Seminar Hall-2</span></a></li>
	      <li><a href="#drawinghall" class="nav-link scrollto"><i class="bx bx-building"></i><span>Drawing Hall</span></a></li>-->
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>ExamSchedule</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Admin</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <main id="main">
   <center><img src="assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY"></center> 
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
            <table class="Block" style="width: 100%">
                <tr>
                    <td class="Block">Room No:B31</td>
                    <td class="Block">Room No:B32</td>
                    <td class="Block">Room No:B33</td>
                    <td rowspan="4">B BLOCK</td>
                    <td class="Block">Room No:B34</td>
                    <td class="Block">Room No:B35</td>
                    <td class="Block">Room No:B36</td>
                </tr>
                <tr class="Block">
                    <td class="Block">Room No:B21</td>
                    <td class="Block">Room No:B22</td>
                    <td class="Block">Room No:B23</td>
                    <td class="Block">Room No:B24</td>
                    <td class="Block">Room No:B25</td>
                    <td class="Block">Room No:B26</td>
                </tr>
                <tr>
                    <td class="Block" colspan="3">Computer Lab</td>
                    <td class="Block" colspan="3">APSSDC LAB</td>
                </tr>
                <tr>
                    <td class="Block" colspan="3">seminar hall</td>
                    <td class="Block" colspan="3">Electronics lab</td>
                    
                </tr>
            </table>

        
        </div>
        </div>
        </section>
        </main>

        <div align="center">
          <p>Check room</p>
      <form action="" method="post">
          <select name="room">
            
              <?php
                   

                $branchq=mysqli_query($conn, "SELECT distinct classroom from trisub");
                while($row =mysqli_fetch_assoc($branchq)) {
                  # code...
                  $classroom = $row['classroom'];
                   ?> 
                   <option value="<?php echo($classroom);?>"><?php echo($classroom);?></option>

            <?php
                }

?>

          </select>
          <input type="submit" name="submit" value="Send">
        </form>
        </div>
        <br><br>
    
</body>
</html>