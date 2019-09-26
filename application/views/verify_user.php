
<?php

include "link.php";
$id=$this->session->userdata('user_id');



?>

<div class="container w3-padding-64">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form action="<?=base_url('LoginController/test')?>" method="POST" enctype="multipart/form-data">
  <div class="w3-card-4">
<div class="row ">
  <div class="col-sm-12">
  <div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-quarter">
<img id="blah" alt="your image" class="rounded-circle" width="200" height="200" />

<input type="file" name="fileToUpload" required class="w3-btn w3-blue-gray"
    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
</div>

<div class="w3-half">
  
  <div class="w3-container" style="margin-top: 12%">
  <div>
  <strong class="w3-wide">Please Select your Field</strong>
  </div>
  <input class="w3-radio" type="radio" name="user_role" value="transport" >
<label>I Have Transport</label>
<br>
<input class="w3-radio" type="radio" name="user_role" value="cargo">
<label>I Book Cargo</label>
<br>
<input class="w3-radio" type="radio" name="user_role" value="user" checked>
<label>I m user</label>
  </div>
</div>
</div>

  </div>
</div>

<div class="row w3-padding-64">
  <input type="submit" style="margin-left: 50%" name="submit" class="w3-btn w3-lime" value="submit">
</div>
  </div>
</form>

</div>

