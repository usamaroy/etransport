
<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!DOCTYPE html>

<html lang="en">

<head>
    <title>Sign Up</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gadget Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="<?php echo base_url()?>assets/css/signup.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>
    <h1 class="error">Gadget Sign Up Form</h1>
	<!---728x90--->
    <div class="w3layouts-two-grids">
	<!---728x90--->
        <div class="mid-class">
            <div class="img-right-side">
                <h3>Manage Your Gadgets Account</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget Lorem ipsum dolor sit
                    amet, consectetuer adipiscing elit. Aenean commodo ligula ege</p>
                <img src="<?php echo base_url()?>assets/img/b11.png" class="img-fluid" alt="">
            </div>
            <div class="txt-left-side">
                <h2> Sign Up Here </h2>
                <?php echo form_open('signupController/signup')?>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" name="Name" placeholder=" Name" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="Phone" placeholder="Phone" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="CNIC" placeholder="CNIC" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="email" name="email" placeholder="Email" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="city" placeholder="city" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="Provinces" placeholder="Provinces" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        
                        <textarea name="Address" placeholder="Address" required=""  rows="3"></textarea>
                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Male
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">FeMale

                        <div class="clear"></div>
                    </div>
                    <div class="main-two-w3ls">
                        <div class="left-side-forget">
                            <input type="checkbox" class="checked">
                            <span class="remenber-me">Remember me </span>
                        </div>
                        <div class="right-side-forget">
                            <a href="#" class="for">Forgot password...?</a>
                        </div>
                    </div>
                    <div class="btnn">
                        <button type="submit">Sign Up </button>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="#">Login Here
                        </a>
                    </h3>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
	<!---728x90--->
    <footer class="copyrigh-wthree">
        <p>
            © 2019 Gadget Sign Up Form. All Rights Reserved | Design by
            <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
        </p>
    </footer>
</body>

</html>