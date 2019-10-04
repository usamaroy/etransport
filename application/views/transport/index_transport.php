<?php
$this->load->view('header');
?>
<div class="page-wrapper">

<div class="container-fluid">
  <!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

<!-- First Photo Grid-->
<?php foreach($data as $data):?>
<div class="w3-row-padding w3-padding-16 w3-center" id="food">

<div class="w3-card w3-col l4 s4">
    
    <div class="w3-container">
    
      <div class="w3-display-container">
      <span class="w3-display-bottomleft">300 driving hours</span>
          <img class="w3-display-topleft" src="<?=base_url('assets/img/verify.png');?>" style="width: 20%" alt="fd">
          <img class="w3-display-topright" src="<?=base_url('assets/img/badge.png');?>" style="width: 20%" alt="fd">
      <input type="hidden" class="prd_img" name="prd_img" id="prd_img" value="">
        <img src="https://media.wired.com/photos/5d4df89db8d30b00081f6ebc/master/pass/security_defcon_tesla-1.jpg" style="width:100%;height:300px">
        <span class="w3-tag w3-display-topleft"></span>
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-black btn_cart" img=""  id="">Book Now <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
      <h5 class="w3-wide "><?=$data['vehicle_name'] . "  " . $data['vehicle_model']?></h5>
      <p><br> Owner:  <b><?=$data['vehicle_owner']?> </b></p>
      <h6 class="w3-opacity "><i class="fa fa-car w3-text-yellow" aria-hidden="true"></i> 300  hours</h6>
      <p class="w3-wide w3-opacity "><i class="fa fa-road w3-text-green" aria-hidden="true"></i> 200 KM drivnig</p>
      <p class="w3-wide">Color: <i class="w3-padding" style="background-color: <?=$data['vehicle_color'];?>">  <?=$data['vehicle_color'];?>   </i> </p>
      <p class="w3-wide"> <i class="fa fa-location-arrow w3-text-yellow"> </i> Bookings 30</p>
       
    </div>
    
    
  </div>
<?php endforeach;?>

 
</div>



<!-- Pagination -->
<div class="w3-center w3-padding-32">
  <div class="w3-bar">
    <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
    <a href="#" class="w3-bar-item w3-black w3-button">1</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
  </div>
</div>

<hr id="about">

</div>
</div>
</div>

<?php
$this->load->view('footer');
?>