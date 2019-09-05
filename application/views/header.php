<!-- CSS -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/w3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <!-- JS -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <style>
    div,h1,h2,h3,h4,h5,h6,p{font-family: "Karma", sans-serif}
    
    </style>
  </head>
  <body>
    
   
<?php   $id=$this->session->userdata('login'); 
      
            if($id){
              echo "login";
            }else{
              echo "fail";
            }
          ?>
 <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar  w3-card w3-text-white" style="background-color: rgb(64, 47, 35);">
         <a href="<?php echo base_url()?>LoginController/index" class="w3-bar-item w3-right w3-wide w3-button"><i class="fa fa-sign-in"></i> Login</a>
      <a href="<?php echo base_url()?>SignupController/index" class="w3-bar-item w3-right w3-wide w3-button"><i class="fa fa-user-circle-o"></i> Register</a>
    </div>


    <!-- Second Logo -->
    <div class="w3-bar w3-white  w3-padding">
      <i><img src="http://localhost/k2_project/assets/image/logo1.png" style="margin-left: 40px;" height="50px" alt="Italian Trulli"></i>
      <i class="fa fa-instagram w3-text-red fa-2x w3-right w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-text-blue fa-2x w3-right w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-text-teal fa-2x w3-right w3-hover-opacity"></i>
    </div>

    
      <!-- Third Bar -->
    <div class="w3-bar w3-white" id="myNavbar">
      <i><img src="http://localhost/k2_project/assets/image/logo2.png" height="40px" style="margin-left: 40px;" alt="Italian Trulli"></i>
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="toggleFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="http://localhost/k2_project/html/web/contactus.php" class="w3-bar-item w3-button w3-right w3-hide-medium w3-hide-small w3-padding-large">Contact</a>
      <a href="#band" class="w3-bar-item w3-button w3-right w3-padding-large w3-hide-medium w3-hide-small">About US</a>
      <a href="http://localhost/k2_project/html/web/lettings.php" class="w3-bar-item w3-button w3-right w3-padding-large w3-hide-small">Lettings</a>
      <a href="http://localhost/k2_project/html/web/sales.php" class="w3-bar-item  w3-button w3-right w3-padding-large w3-hide-small">Sales</a>
      <a href="http://localhost/k2_project/html/web/property_managment.php" class="w3-bar-item w3-button w3-right w3-padding-large w3-hide-small">Property Managment</a>
      <a href="http://localhost/k2_project/index.php"  class="w3-bar-item  w3-button w3-right w3-padding-large w3-hide-small">Home</a>
      </div>
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="http://localhost/k2_project/index.php"  class="w3-bar-item w3-button" onclick="toggleFunction()">Home</a>
      <a href="http://localhost/k2_project/html/web/sales.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Sales</a>
      <a href="http://localhost/k2_project/index.php"  class="w3-bar-item w3-button" onclick="toggleFunction()">About Us</a>
      <a href="http://localhost/k2_project/html/web/contactus.php"  class="w3-bar-item w3-button" onclick="toggleFunction()">Contact</a>
      <a href="http://localhost/k2_project/html/web/lettings.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Lettings</a>
      <a href="http://localhost/k2_project/html/web/property_managment.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Property Managment</a>
      
    </div>
  </div>