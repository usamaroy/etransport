<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $this->load->view('link');
    ?>
    <title>E-transport</title>
</head>
<style type="text/css">
.bgimg {
    background-image: url('https://wallpaperaccess.com/full/24866.jpg');
}
</style>
<body class="bgimg">

<div class="container  w3-padding-64">
<img src="http://localhost/k2_project/assets/image/logo1.png" style="margin-left: 40px;" height="50px" alt="Italian Trulli">
<h2 align="center">Etransport</h2>
<div class="row" >
<div class="col-sm-9 w3-card-4">

<form action="/action_page.php" class="was-validated w3-padding-24">
<fieldset>  <legend align="center">Login into System</legend>
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
      <label for="uname">FIRST NAME</label>
      <input type="text" class="w3-input form-control w3-animate-input" style="width:60%" id="fname" placeholder="Enter first name" name="fname" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">CONTACT</label>
      <input type="taxt" class="w3-input form-control w3-animate-input" style="width:60%"  id="contact" placeholder="Enter you contact" name="contact" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="pwd">CITY</label>
      <input type="taxt" class="w3-input form-control w3-animate-input" style="width:60%"  id="city" placeholder="Enter your city" name="city" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">EMAIL</label>
      <input type="taxt" class="w3-input form-control w3-animate-input" style="width:60%"  id="email" placeholder="Enter your email" name="email" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


  <p>Gender</p>

    <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">female
      </label>
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
   
  
    </div>
    <div class="col-sm-6">
    <div class="form-group">
      <label for="uname">LAST NAME</label>
      <input type="text" class="w3-input form-control w3-animate-input" style="width:60%"  id="fname" placeholder="Enter full name" name="fname" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">CNIC</label>
      <input type="password" class="w3-input form-control w3-animate-input" style="width:60%"  id="cnic" placeholder="Enter you cnic" name="cnic" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">PROVINCE</label>
      <input type="password" class="w3-input form-control w3-animate-input" style="width:60%"  id="province" placeholder="Enter your province" name="province" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD</label>
      <input type="password" class="w3-input form-control w3-animate-input" style="width:60%"  id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
  
    
   
    
</div>

</fieldset>
<div align="center" class="form-group w3-padding">
    <button  type="submit" class="w3-btn w3-blue">Submit</button>
    </div>
</form>

</div>
<div class="col-sm-3">


</div>
</div>

</div>
</body>
</html>