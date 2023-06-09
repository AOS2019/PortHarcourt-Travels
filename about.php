<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "\includes\config.php";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <!-- Font Awesome icons (free version)-->
   <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   <!-- Google fonts-->
   <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" />
   <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" />
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

   <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Vendor CSS Files -->
   <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
   <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
   <!-- <link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">
   <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->

   <!-- Template Main CSS File -->
   <link rel="stylesheet" href="assets/css/style.css">

   <!-- =======================================================
  * Template Name: Lumia - v4.10.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
   <!-- css Bootstrap-->
   <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
   <!-- Core theme CSS (includes Bootstrap)-->
   <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
   <!-- Navigation-->
   <?php include 'includes/header.php'; ?>
   
   <!-- Page Header-->
   <header class="masthead" style="background-image: url('assets/img/about-us.jpg')">
      <div class="container position-relative px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
               <div class="site-heading">
                  <h2>About Us</h2>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- ======= What We Do Section ======= -->
   <section id="what-we-do" class="what-we-do">
      <div class="container">

         <div class="section-title">
            <h2>What We Do</h2>
            <p>Magnam dolores commodi suscipit consequatur ex aliquid</p>
         </div>
      </div>
   </section><!-- End What We Do Section -->

   <!-- ======= Main ======= -->
   <main id="main">

      <section id="about" class="about">
         <div class="container">

            <div class="row">
               <div class="col-lg-6">
                  <img src="assets/img/about.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-lg-6 pt-4 pt-lg-0">
                  <h3>About Us</h3>
                  <p style="text-align:justify">
                     PortHarcourt Travels is a storytelling online blog that allow travellers visiting a tourist site
                     or artefact to learn more about it through tales and photographs of the locations or objects
                     published by
                     individuals who have lived the experiences.
                  </p>
                  <div class="row icon-boxes">
                     <div class="col-md-6">
                        <i class="bx bx-receipt"></i>
                        <h4>Corporis voluptates sit</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                     </div>
                     <div class="col-md-6 mt-4 mt-md-0">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Ullamco laboris nisi</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section><!-- End About Section -->
      
   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
               <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
         </div>
      </div>
   </div>
   
   </main>

   <!-- ======= Footer ======= -->
   <?php include 'includes/footer.php'; ?>
   <!-- End Footer -->
   
   <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <br>
   <br>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
   <!-- Core theme JS-->
   <script src="assets/js/scripts.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>