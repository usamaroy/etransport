<!-- Footer -->
<hr style="height:3px;border:none;color:#333;background-color:#333;">
<footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
	<div class="">
		<div class="w3-row">
			<div class="w3-col m1  w3-center">
				<h5>Home</h5>
				
			</div>
			<div class="w3-col m2 w3-center">
				<h5>Services</h5>
				<p><a href="#">Services</a></p>
				<p><a href="#">Sales</a></p>
				<p><a href="#">Management</a></p>
				<p><a href="#">Find store</a></p>
				
				<p><a href="#">Help</a></p>
			</div>
			<div class="w3-col m1  w3-center">
				<h5>Properties</h5>
				
				<p><a href="#">For Sales</a></p>
				<p><a href="#">To lits</a></p>
				
			</div>
			<div class="w3-col m1  w3-center">
				
				<h5>About Us</h5>
				<p><a href="#">Our Teams</a></p>
				<p><a href="#">Our Projecct</a></p>
			</div>
			<div class="w3-col m2 w3-center">
				<h5>Contact Us</h5>
				<p><a href="#">Contact</a></p>
				<p><a href="#">Location</a></p>
			</div>
			<div class="w3-col m4  w3-center">
				<p style="font-size: 22px"><b class="w3-wide">Ennismore Estates </b>
				412 Edgware Road London W2 1ED </p>
				<p class="w3-wide" style="font-size: 20px"> Telephone:  0203 456 7893  </p>
				<p class="w3-wide" style="font-size: 20px"> email: info@ennismoreestates.com
</p>
			</div>
			
		</div>
		<div class="w3-row">
			
		</div>
		
	</div>
	
	<div class="col-sm-4">
		
	</div>
	
</footer>
<script>
	// Modal Image Gallery
function onClick(element) {
document.getElementById("img01").src = element.src;
document.getElementById("modal01").style.display = "block";
var captionText = document.getElementById("caption");
captionText.innerHTML = element.alt;
}
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
var navbar = document.getElementById("myNavbar");
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
} else {
navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
}
}
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
var x = document.getElementById("navDemo");
if (x.className.indexOf("w3-show") == -1) {
x.className += " w3-show";
} else {
x.className = x.className.replace(" w3-show", "");
}
}
</script>
</body>
</html>