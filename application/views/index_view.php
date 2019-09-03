<style>
.half1 {
background-image: url('http://yesofcorsa.com/wp-content/uploads/2017/01/4K-Truck-Desktop-Wallpaper-For-PC-1024x640.jpg');
min-height: 100%;
background-position: center;
background-size: cover;
}
.half2 {
background-image: url('https://images.wallpaperscraft.com/image/road_skyscrapers_cars_121725_3840x2160.jpg');
min-height: 100%;
background-position: center;
background-size: cover;
}
</style>
<?php include_once "header.php"?>
<div class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px;">
  <!-- First Grid: Logo & About -->
  <div class="w3-row ">
    <div class="w3-half half2 w3-black w3-container w3-center" style="height:700px">
      
      <div class="w3-center" style="padding-top:250px!important;padding-bottom:250px!important">
        
        <a href="<?php echo base_url("transport/TransportController/index")?>" type="button" class="w3-button w3-hover-yellow w3-border w3-black w3-opacity w3-jumbo" > BOOK YOUR CAB</a>
      </div>
    </div>
    <div class="w3-half half1 w3-blue-grey w3-container " style="height:700px">
      
      <div class="w3-center" style="padding-top:250px!important;padding-bottom:250px!important">
        
        <a href="<?php echo base_url("cargo/CargoController/index")?>" class="w3-button  w3-border w3-black w3-opacity w3-jumbo"> CARGO</a>
      </div>
      
    </div>
  </div>
</div>