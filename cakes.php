<?php 
require 'connect_data_mysql.inc.php';
require 'core.inc.php';
include 'C_cost.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>gooSweet</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
						<li><a href="index.php">Home</a></li>|
						<li class="active"><a href="cakes.php">PRODUCTS</a></li>|
						<li><a href="about.php">about</a></li>|
						<li><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<?php
					    if(loggedin())
                          {
	                        $name=get_field('username'); 
	                        echo "<li><font color = \"blue\" >$name</font></li> | <li><a href=\"logout.php\">Logout </a>";
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
		
		   
	<!-- content-section-starts -->


			
		
				
				<div class="biseller-info">
			
<div class="container">
<h2>best seller</h2>
<h3 class="new-models">Birthday cakes</h3>
<table cellpadding="100px" cellspacing="100px">
			<ul id="flexise">
			<tr>
<th>	<li>
					<div class="biseller-column">
					<img src="web/images/101.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="cakes/201.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 101<br>
						Half Kg Black Forest</h5>
						<p><?php echo "Rs. $m101"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>	-->				
					</div>
				</li></th><th>
				<li>
					<div class="biseller-column">
					<img src="web/images/102.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 102 <br> Half Kg Strawberry cake</h4>
						<p><?php echo "Rs. $m102"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>				-->	
					</div>
				</li></th><th>
			
				<li>
					<div class="biseller-column">
					<img src="web/images/103.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 103 <br>Half kg cream cake</h4>
						<p><?php echo "Rs. $m103"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></th><th>
				<li>
					<div class="biseller-column">
					<img src="web/images/104.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 104 <br>Half kg vanilla cake </h4>
						<p><?php echo "Rs. $m104"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></th></tr><tr><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/105.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 105 <br>Half kg dark chocolate cake </h4>
						<p><?php echo "Rs. $m105"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/106.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 106 <br>Half kg eggless strawberry cake </h4>
						<p><?php echo "Rs. $m106"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/107.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 107 <br>Half kg white cream cake </h4>
						<p><?php echo "Rs. $m107"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/108.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
					<h4>cc : 108 <br>1 kg chocolate cake </h4>
						<p><?php echo "Rs. $m108"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></td></tr>
				<tr>
<th>	<li>
					<div class="biseller-column">
					<img src="web/images/109.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 109<br>1 kg Rum-cake</h4>
						<p><?php echo "Rs. $m109"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>	-->				
					</div>
				</li></th><th>
				<li>
					<div class="biseller-column">
					<img src="web/images/110.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 110<br>1 kg  pineapple flavour cake</h4>
						<p><?php echo "Rs. $m110"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>				-->	
					</div>
				</li></th><th>
			
				<li>
					<div class="biseller-column">
					<img src="web/images/111.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc:111<br>half kg  Egg-less vanilla</h4>
						<p><?php echo "Rs. $m111"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></th><th>
				<li>
					<div class="biseller-column">
					<img src="web/images/112.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc:112 <br>half kg egg-less vanilla cake</h4>
						<p><?php echo "Rs. $m112"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></th></tr><!--<tr><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/14.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Butter Scotch </h4>
						<p>$ 219.99</p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					<!--</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/14.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Butter Scotch </h4>
						<p>$ 219.99</p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					<!--</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/14.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Butter Scotch </h4>
						<p>$ 219.99</p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					<!--</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/14.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Butter Scotch </h4>
						<p>$ 219.99</p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					<!--</div>
				</li></td></tr>
				-->
				
	     	</ul>
				
	     	</ul>
			</div>
			</table>
           
                   			<div class="biseller-info">
			
<div class="container">
<h2>best seller</h2>
<h3 class="new-models">Lovers_special</h3>
<table cellpadding="100px" cellspacing="100px">
			<ul id="flexise">
			<tr>
<th>	<li>
					<div class="biseller-column">
					<img src="web/images/201.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="v1.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 201<br>
						cool heart cake</h5>
						<p><?php echo "Rs. $m201"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>	-->				
					</div>
				</li></th><th>
				<li>
					<div class="biseller-column">
					<img src="web/images/202.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 202 <br> Half Kg love dose cake</h4>
						<p><?php echo "Rs. $m202"?> </p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>				-->	
					</div>
				</li></th><th>
			
				<li>
					<div class="biseller-column">
					<img src="web/images/203.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 203 <br>double stick cake</h4>
						<p><?php echo "Rs. $m203"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></th><th>
				<li>
					<div class="biseller-column">
					<img src="web/images/204.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 204 <br>Half kg vanilla cake with chocolate </h4>
						<p><?php echo "Rs. $m204"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></th></tr><tr><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/205.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 205 <br>Half kg chocolate cake </h4>
						<p><?php echo "Rs. $m205"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/205.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 206 <br>1 kg chocolate cake </h4>
						<p><?php echo "Rs. $m206"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/207.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 207 <br>Half kg white cream cake </h4>
						<p><?php echo "Rs. $m207"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></td><td>
				<li>
					<div class="biseller-column">
					<img src="web/images/208.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="singlepage.php">Quick view</a>
						</div>
					<div class="biseller-name">
					<h4>cc : 208 <br>1 kg chocolate cake </h4>
						<p><?php echo "Rs. $m208"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li></td></tr>
				<tr>

	     	</ul>
			</div>
			</table>
           
                   
				<div class="clearfix"></div>
			</div>
		</div>
	
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					<?php echo "$offer";?>
			
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
		<div id="fb-root">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script></div>
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
							
							<li class="data"> <div class="fb-like" data-href="https://www.facebook.com/goosweetam" data-width="200" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div></li>
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
