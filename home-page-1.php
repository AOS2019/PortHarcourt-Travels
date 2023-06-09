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

   <!-- Vendor CSS Files -->
   <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css"> -->
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
   <!-- <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css"> -->
   <!-- Core theme CSS (includes Bootstrap)-->
   <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
   <!-- Navigation-->
   <?php include 'includes/header.php'; ?>

   <!-- Page Header-->
   <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
      <div class="container position-relative px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
               <div class="site-heading">
                  <h1 style="margin-bottom: 25px;">PortHarcourt Travels</h1>
                  <h2 style="margin-bottom: 15px;">A Storytelling App</h2>
                  <span class="subheading">Tourists travelling around PortHarcourt City can publish and read stories about their
                     travels.</span>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Main Content-->
   <div class="container">
      <div class="row">
         <div class="card mb-3" style="max-height: 80%;">
            <div class="row g-0">
               <div class="col-md-3">
                  <a href="">
                     <img src="assets/img/bugsbunny.jpg" alt="" class="img-fluid rounded-start"
                        style="max-height:200px; margin-top: 10px;">
                  </a>
               </div>
               <div class="col-md-9">
                  <div class="card-body">
                     <a href="" style="text-decoration: none;">
                        <h4 class="card-title">Card title 1</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eaque
                           explicabo necessitatibus in laudantium temporibus eum?
                        </p>
                     </a>
                     <p class="card-text" style="padding-top: 2%;"><small class="text-muted">Posted by&nbsp;_username_
                           on _creation_date_</small>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="card mb-3" style="max-height: 80%;">
            <div class="row g-0">
               <div class="col-md-3">
                  <a href="">
                     <img src="assets/img/intriguing_objects_violin.jpg" class="img-fluid rounded-start" alt="..."
                        style="max-height:200px; margin-top: 10px;"></a>
               </div>
               <div class="col-md-9">
                  <div class="card-body">
                     <a href="" style="text-decoration: none;">
                        <h4 class="card-title">Custom component with stretched link</h4>
                        <p class="card-text">This is some placeholder content for the custom component. It is intended
                           to mimic what some
                           real-world content would look like.</p>
                     </a>
                     <p class="card-text" style="padding-top: 2%;"><small class="text-muted">Posted by&nbsp;_username_
                           on _creation_date_</small>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="card mb-3" style="max-height: 80%;">
            <div class="row g-0">
               <div class="col-md-3">
                  <a href="">
                     <img src="assets/img/daffy.jpg" class="img-fluid rounded-start" alt="..."
                        style="max-height:200px; margin-top: 10px;">
                  </a>
               </div>
               <div class="col-md-9">
                  <div class="card-body">
                     <a href="" style="text-decoration: none;">
                        <h4 class="card-title">Card title 3</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                           additional content. This content is a little bit longer.
                        </p>
                     </a>
                     <p class="card-text" style="padding-top: 2%;"><small class="text-muted">Posted by&nbsp;_username_
                           on _creation_date_</small>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="card mb-3" style="max-height: 80%;">
            <div class="row g-0">
               <div class="col-md-3">
                  <a href="">
                     <img src="assets/img/intriguing_objects_pocket_watch.jpg" class="img-fluid rounded-start" alt="..."
                        style="max-height:200px; margin-top: 10px;"></a>
               </div>
               <div class="col-md-9">
                  <div class="card-body">
                     <a href="" style="text-decoration: none;">
                        <h4 class="card-title">Custom component with stretched link</h4>
                        <p class="card-text">This is some placeholder content for the custom component. It is intended
                           to mimic what some
                           real-world content would look like.</p>
                     </a>
                     <p class="card-text" style="padding-top: 2%;"><small class="text-muted">Posted by&nbsp;_username_
                           on _creation_date_</small>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <hr>
      </div>
   </div>
   <hr>

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

   <div class="row">
      <div class="col-md-10 col-lg-12">
         <div class="clearfix">
            <a href="view-stories.php">
               <button class="btn btn-primary" type="button" style="
               float:right; margin-right: 30px;">View More&nbsp;⇒</button>
            </a>
         </div>
      </div>
   </div>

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


   <!-- Bootstrap core JavaScript-->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min-1.js"></script>

</body>

</html>