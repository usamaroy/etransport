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
    background-image: url('https://images.unsplash.com/photo-1458308034261-3353a8d12994?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80');
    background-repeat: norepeat;
}
</style>
<body class="bgimg ">

<div class="container  w3-padding-64">


<div class="row " >

<div class="col-sm-9 w3-card-4 w3-black w3-opacity">

<form action="<?php echo base_url()?>signupController/signup" method="POST" class="was-validated w3-padding-24">
<fieldset>  <legend align="center"><span >
<img src="<?php echo base_url()?>assets/img/logo1.png" style="margin-left: 40px;" height="50px" alt="Italian Trulli">
<span class="w3-wide" style="font-family:Comic Sans MS;font-size:30px">TRANSPORT</span>
</span></legend>
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



  <p><b>Gender</b></p>



    <div class="form-check-inline">
      <label class="form-check-label" for="gender">
        <input type="radio" class="form-check-input" id="gender" name="gender" value="male" checked>male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="gender">
        <input type="radio" class="form-check-input" id="gender" name="gender" value="female">female
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
      <input type="text" class="w3-input form-control w3-animate-input" style="width:60%"  id="lname" placeholder="Enter Last name" name="lname" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">CNIC</label>
      <input type="taxt" class="w3-input form-control w3-animate-input" style="width:60%"  id="cnic" placeholder="Enter you cnic" name="cnic" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="sel1">Select provinces</label>
      <select class="form-control" style="width:60%" id="sel1" name="provinces">
      <option></option>
        <option value="punjab">Punjab</option>
        <option value="sindh">Sindh</option>
        <option value="kpk">kpk</option>
        <option value="balochistan">Balochistan</option>
        <option value="fata">Fata</option>
        <option value="gilgit">Gilgit</option>

      </select>
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD</label>
      <input type="password" class="w3-input form-control w3-animate-input" style="width:60%"  id="pwd" placeholder="Enter password" name="password" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
  <h5>Address</h5>

    <div class="form-group">
      <textarea class="form-control" rows="5" id="address" name="address"></textarea>
    </div>
  
  
   
    


</fieldset>
<div align="center" class="form-group w3-padding">
    <input type="submit" class="w3-btn w3-blue w3-hover-orange" value="submit">
    </div>
</form>

</div>
<div class="col-sm-3">


</div>
</div>

<div class="col-sm-3">
</div>

</div>
</body>
</html>