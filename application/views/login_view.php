<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Communal Login Form a Responsive Widget Template :: w3layouts </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Communal Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tags -->
	<!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="<?php echo base_url()?>assets/css/logincss.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<style>
	.btn{
		border:none;
		display:inline-block;
		padding:13px 45px;
		vertical-align:
		middle;overflow:
		hidden;text-decoration:
		none;color:inherit;
		background-color:orangered;
		text-align:center;
		cursor:pointer;
		white-space:nowrapt;
	}
	</style>
</head>

<body>
	<h1 class="header-w3ls">
		Communal Login Form</h1>
	<div class="appointment-w3">

		<?php echo form_open('LoginController/login')?>
			<h2 class="sub-heading-wthree"> Login Here</h2>
			<?php
                if($error=$this->session->flashdata('login_failed')){?>
                <div class="row w3-center w3-xlarge" style="color:red;">
                    <div class="col-sm-8">
                        <div class="text-warning">
                            <h5 class="w3-code w3-red">
                            <?php echo $error; ?>
                            </h5>
                        </div>
                        
                    </div>
                </div>
                
                <?php
                }
                ?>
			<div class="main">
				<div class="form-left-w3l">
					<input type="email" name="email" placeholder="Email">
				<div class="clearfix" style="color:red;"><?php echo form_error('email');?></div>
				</div>
				
				<div class="form-right-w3ls ">

					<input type="password" name="password" placeholder="Password">
				
					<div class="clearfix" style="color:red;"><?php echo form_error('password'); ?></div>
				</div>

			</div>
			<div class="btnn">
				<button type="submit">Login</button>  <a href="<?= base_url('SignupController/index')?>" class="btn">Register</a> <br>
				<div class="left-side w3l">
					<input type="checkbox" class="checked">
					<span class="span">Remember me </span>

				</div>
				<a href="#" class="for">Forgot password...?</a>
				<div class="clear"></div>
			</div>


			<div class="header-social wthree">
				<div class="line-mid">
					<h4>or</h4>
				</div>
				<ul>
					<li><a href="#" class="f"><span class="fa fa-facebook" aria-hidden="true"></span>Login with Facebook</a></li>
					<li><a href="#" class="g"><span class="fa fa-google-plus" aria-hidden="true"></span>Login with Google+</a></li>
				</ul>
			</div>

			

		<?php echo form_close();?>
	</div>

	<div class="copy">
		<p>&copy;2017 Communal Login Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
	</div>

</body>

</html>