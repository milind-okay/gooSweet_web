<?php 
include 'C_cost.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>gooSweet</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <link rel="canonical" href="http://www.goosweet.com" />
    <script src="https://apis.google.com/js/platform.js" async defer>
    </script>
<script src="web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
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
					<p>Call and Order !<span>+91-7301438717 <img src="web/images/MObNO.png" high="80px" width="80px" alt="+91-7301438717"></span><label>(9 AM to 9 PM)</label></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
							<li><a href="index.php">Home</a></li>|
						<li class="active"><a href="cakes.php">PRODUCTS</a></li>|
						<li><a href="about.php">about</a></li>|
						<li><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			<!--	<div class="login-section">
					<ul>
						<li><a href="login.php">Login</a>  </li> |
						<li><a href="register.php">Register</a> </li> |
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>-->
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

<!---	<div class="details">
<div class="container">-->
<img src="web/images/whatsApp.jpg" align="center" >
<br/><hr>
		
		<div class="service-section">
			<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					<?php echo "$offer";?>
			
					</div>
					<div class="clearfix"></div>
					</div>
				</div></div>
		
		<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Site Links</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="about.php">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="contact.php">Contact Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="pp.php">Privacy Policy</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="tt.php">Terms of Use</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Hours</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"> 7 A.M.-11 P.M.</li>
						</ul>
						
                        <h4>Phone</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data">+91-7301438717</li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data">9852398588 / 8877006184</li>
						</ul>
					</div>
			<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Follow Us On...</h4>
						<ul>
							
							<li class="data"> <div class="fb-like" data-href="https://www.facebook.com/goosweetam" data-width="200" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div><div class="fb-send" data-href="https://www.facebook.com/goosweetam" data-colorscheme="light"></div></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="https://twitter.com/g00Sweet">Twitter</a></li>
						</ul>
						<!--<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="linkedin.com"> Linkedin</a></li>
						</ul>-->
						<ul>
							<li class="data"><div class="g-plusone" data-annotation="inline" data-width="300">

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></div></li>
<ul>
							
							<li class="data"><div class="g-plus" data-action="share" data-height="24" data-href="http://www.goosweet.com"></div></li>
						</ul>
						</ul>
					</div>
							<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
									 <?php 

if(isset($_POST['email']) ){

$con_email = $_POST['email'];
$eid='milind.rohit2013je0359@gmail.com';
if(!empty($con_email)){

$to = 'goosweet15@gmail.com';
$sub= "Subscribe Newsletter";
$body = "$con_email";
$header= 'From: '.$eid;
if(mail($to, $sub, $body, $header))
{
echo "Thanks for Subscribe Newsletter.";
}
else
{
echo 'Sorry, an error occurred. Please try again later.';
}
}else
{
echo 'All fields are required.';
}
}
else
{
echo 					'<h4>Subscribe Newsletter</h4>
						<p>To get latest updates and cake offers every week</p>
						<form action="whatsapp.php" method="POST">
						<input type="text" class="text"  name="email" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'\';}" maxlength="50">
						<input type="submit" value="submit">
						</form>';
						}
						?>
		
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
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
