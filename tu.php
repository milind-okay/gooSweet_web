<!DOCTYPE html>
<html>
<head>
<title>gooSweet</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="web/images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Call and Order !<span>+91-7301438717 </span><label>(9 AM to 9 PM)</label></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="indix.php" class="scroll">Home</a></li>|
						<li class="active"><a href="cakes.php">PRODUCTS</a></li>|
						<li><a href="about.php">about</a></li>|
						<li><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			1. Cakes Decoration shown here are indicative. We do our best to give better result than shown. It may be possible that actual arrangement varies due to availability of flowers and other reasons beyond our control.
2. All Order are delivered between 9 am till 9 pm in normal delivery time.
3 If any product you have ordered is not available for delivery on your requested delivery date and delivery address , it may be substituted with next best available flavour , color , shape , size.

4. If the receiver or any representative is not available at the time of delivery, we shall take the order as delivered. However we always try to take an appointment over phone before delivery. 

5. There is no return policy , order once placed and received by the customer,gauradian,security gaurd,reception cannot be returned back at what so ever may be the condition.
 
6. Delivery of certain items may not be possible under certain uncontrollable circumstances. However, you always have a right to get 100% refund of your money.

7. No claim of whatsoever nature under any circumstances will be tenable other than the claim for 100% refund of payment made. 
All such claims if any, are to be raised within 24 hours of delivery /non delivery. 

8. The owners of the site retains the right to refuse any order unconditionally.
			<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="web/images/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Service Guarantee</h4>
							<p>we will provide you best service ! </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<!--<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="web/images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fully Secure Payment</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="web/images/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Track Your Order</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>-->
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
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
							<li><i class="fb"></i></li>
							<li class="data"> <a href="https://www.facebook.com/goosweetam">  Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="twitter.com">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="linkedin.com"> Linkedin</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
							<li class="data"><a href="googleplus.com">Google Plus</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Subscribe Newsletter</h4>
						<p>To get latest updates and cake offers every week</p>
						<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="submit">
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
