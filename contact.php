<?php 
require 'connect_data_mysql.inc.php';
require 'core.inc.php';
include 'C_cost.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="goosweet:-cake delivery services in dhanbad ,call and order :+91-7301438717 (9 AM to 9 PM)
" />
<meta name="keywords" content="cakes" /> 
<meta name="keywords" content="online cake in dhanbad" />
	<meta name="description" content="gooSweet is a cake delivering company featuring premium quality, frozen, fully finished packaged cake products for the Food Service, Catering, C-store and In-Store Bakery. &&call and order :+91-7301438717 (9 AM to 9 PM)
 ,8877006184 .We are based in Dhanbad, founded in 2015.Started our venture with unique concept of designed cakes.Started with a target of delivering happiness to your doorstep." /> 
<title>gooSweet</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link rel="canonical" href="http://www.goosweet.com" />
    <script src="https://apis.google.com/js/platform.js" async defer>
    </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- Custom Theme files -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="web/js/wow.min.js"></script>
<link href="web/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="web/js/move-top.js"></script>
<script type="text/javascript" src="web/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('php,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script src="web/js/jquery.min.js"></script>
		<script type="text/javascript" src="web/js/move-top.js"></script>
		<script type="text/javascript" src="web/js/easing.js"></script>
		<link rel="stylesheet" href="web/css/etalage.css">
		<link href="web/css/form.css" rel="stylesheet" type="text/css" media="all" />
		<script src="web/js/jquery.easydropdown.js"></script>

		<script src="web/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
</head>
<body>
<div id="fb-root">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script></div>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="web/images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Call and Order !<span>+91-7301438717<img src="web/images/MObNO.png" high="80px" width="80px" alt="+91-7301438717"> </span><label>(9 AM to 9 PM)</label></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><li><a href="index.php">Home</a></li>|
						<li><a href="cakes.php">PRODUCTS</a></li>|
						<li><a href="about.php">about</a></li>|
						<li class="active"><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<?php
					    if(loggedin())
                          {
	                        $name=get_field('username'); 
	                        echo "<li><font color = \"blue\" >$name</font></li> | <li><a href=\"logout.php\">Logout </a></li>";
                          }
                        else
                          {
	                        echo $login;
                          }
						?>|
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<!--<div class="clearfix"></div>-->
			</div>
		</div>
		<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
		   
	<!-- content-section-starts -->
<!-- header-section-ends -->
	<div class="contact-section-page">
		<div class="contact-head">
		    <div class="container">
				<h3>Contact</h3>
				<p>Home/Contact</p>
			</div>
		</div>
		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-6 contact_left wow fadeInRight" data-wow-delay="0.4s">
						
			 			
													   <?php 

if(isset($_POST['contact_N']) && isset($_POST['contact_E']) && isset($_POST['contact_T']) && isset($_POST['contact_S'])){
$con_name = $_POST['contact_N'];
$con_email = $_POST['contact_E'];
$con_text = $_POST['contact_T'];
$con_sub = $_POST['contact_S'];
if($con_name!='Name' && $con_email!='Email Address' && $con_text!='Message' && $con_sub!='Subject'){

$to = 'goosweet15@gmail.com';
$sub= "Contact $con_sub";
$body = "$con_name \n $con_text";
$header= 'From: '.$con_email;
if(@mail($to, $sub, $body, $header))
{
echo "<p>Thanks <strong>$con_name</strong> for contacting us. We'll be in touch soon";
}
else
{
echo 'Sorry, an error occurred. Please try again later.';
}
}else
{
echo '<font color="red" size="5" >All fields are required.</font>';
}
}
else
{
echo '<p>Fill this form and we will contact you.</p>
							  <form action="contact.php" method="POST">
								 <div class="form_details">
					                 <input type="text" class="text" name="contact_N" value="Name" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Name\';}" maxlength="30">
									 <input type="text" class="text" name="contact_E" value="Email Address" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Email Address\';}" maxlength="50">
									 <input type="text" class="text" name="contact_S" value="Subject" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Subject\';}" maxlength="80">
									 <textarea value="Message" name="contact_T" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Message\';}">Message</textarea>
									 <div class="clearfix"> </div>
									 <div class="sub-button wow swing animated" data-wow-delay= "0.4s">
									 	<input name="submit" type="submit" value="Send message">
									 </div>
						          </div>
						       </form>';
}
?>

			 				
	
<div >							  
							  <h4>Scan QR Code </h4><br /><hr><br/>
						<img src="web/images/gooSweet_contact.png"/></div>
							   <!-- Place this tag where you want the widget to render. -->
							 

 </div>
					        <div class="col-md-6 company-right wow fadeInLeft" data-wow-delay="0.4s">
					        	<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.9902146959757!2d86.439686!3d23.81894699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6bb606af40873%3A0xde4f04354c4eabaf!2sAmber+Hostel!5e0!3m2!1sen!2sin!4v1424098714503" width="600" height="450" frameborder="0" style="border:0"></iframe>
		</div>
      
	  <div class="company-right">
					        	<div class="company_ad">
							     		<h3>Contact Info</h3>
							     		<span></span>
			      						<address>
											 <p>email:<a href="mail-to: gooSweet15@gmail.com">gooSweet@gooSweet.com / gooSweet15@gmail.com</a></p>
											 <p>phone:  +91-7301438717</p>
									   		<p> Ankit Sethiya: 9852398588
</p>
									   		<p>Milind Rohit:  8877006184</p>
									 	 	
							   			</address>
							   		</div>
									  <div class="g-page" data-width="266" data-href="//plus.google.com/u/0/104589961241429205520" data-rel="publisher">

<!-- Place this tag after the last widget tag. -->
<div class="g-page" data-href="//plus.google.com/u/0/104589961241429205520" data-rel="publisher"></div>
								<div id="fb-root">	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script></div>
									
									<div class="follow-us">
										<h3>follow us on</h3>
										<a href="https://www.facebook.com/goosweetam"><i class="facebook"></i></a>
										<a href="https://twitter.com/g00Sweet"><i class="twitter"></i></a>
								


</div>
</div></i></a>
									</div>
			
							
							 </div>
						</div>
					</div>

	</div>
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
	<div class="fb-like" data-href="https://www.facebook.com/goosweetam" data-width="1000" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div><div class="fb-send" data-href="https://www.facebook.com/goosweetam" data-colorscheme="light"></div>
		<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share" data-height="20" data-href="http://www.goosweet.com"></div>
<div class="g-plusone" data-annotation="inline" data-width="200">

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></div>

			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2015  All rights  Reserved</p>
			
		</div>
	
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>
