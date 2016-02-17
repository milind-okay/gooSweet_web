<?php 
require 'connect_data_mysql.inc.php';
require 'core.inc.php';
include 'C_cost.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="keywords" content="goosweet:-cake delivery services in dhanbad ,call and order :+91-7301438717 (9 AM to 9 PM)
" />
<meta name="keywords" content="cakes" /> 
<meta name="keywords" content="online cake in dhanbad" />
	<meta name="description" content="gooSweet is a cake delivering company featuring premium quality, frozen, fully finished packaged cakes for the Food Service. We specialize in delivering unique, and custom, high-quality, finished cakes for a variety of operators that are not generally found in ready-to-sell formats. The gooSweet specializing in traditional cakes, Designer theme based cakes, chocolates cakes etc. We offer a wide range of products as photo cakes, photo cup cakes, photo chocolates, traditional cakes & other customized designer cakes for your birthday, anniversary, corporate events or any other occasion. We are based in Dhanbad, founded in 2015.Started with a target of delivering happiness to your doorstep.." /> 
<title>gooSweet</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <link rel="canonical" href="http://www.goosweet.com" />
    <script src="https://apis.google.com/js/platform.js" async defer>
    </script>
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
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59749183-1', 'auto');
  ga('send', 'pageview');

</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="web/images/logo.png" class="img-responsive" alt="gooSweet.com" /></a>
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
						<li class="active"><a href="#Home" class="scroll">Home</a></li>|
						<li><a href="cakes.php">PRODUCTS</a></li>|
						<li><a href="about.php">about</a></li>|
						<li><a href="contact.php">contact</a></li>
						<!--<div class="clearfix"></div>-->
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
						?>
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1></h1>
						<div class="line">
						
						</div>
                        	<h3> </h3>
					</div>
                    </div>
					
		</div>
                    </div>
	<!-- content-section-starts -->
	<div class="content">
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Ordering Cake was never so easy</h3>
					<div class="dotted-line">
						<h4>Just 4 steps to follow </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<a href="cakes.php"><div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="one"></i><br>
							<i class="one-icon"></i>
							<p>Choose <span>Your Cake</span></p>
							<label></label>
						</div>
					</div></a>
					<a href="whatsapp.php"><div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="two"></i><br>
							<i class="two-icon"></i>
							<p>call us <span>and Order</span></p>
							<label></label>
						</div>
					</div></a>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="three"></i><br>
							<i class="three-icon"></i>
							<p>pay <span> on delivery</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="four"></i><br>
							<i class="four-icon"></i>
							<p>Enjoy <span>your cake </span></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Our cakes </h4>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="web/images/201.jpg" class="img-responsive" alt="fast cake"/>
								</div>
								<div class="offer-text">
									<h4>Lovers_special‬</h4>
									<p>When love is not madness, it is not love.. </p>
									<a href="v_s.php"><input type="button" value="Grab It"></a>
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="web/images/101.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
                                    <h4>Birthday Cakes</h4>
									<p> Celebrate your friends birthday !</p>
									<a href="101.php"><input type="button" value="Grab It"></a>
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
												<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="web/images/m1.jpg" class="img-responsive" alt="fast cake"/>
								</div>
								<div class="offer-text">
									<h4>Fast Cakes</h4>
									<p>Delivery of your cake in 2 hour ! </p>
									<a href="fast-cake.php"><input type="button" value="Grab It"></a>
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="web/images/m3.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Kids/wedding Cake</h4>
									<p>Attractive cakes for Kids and wedding anniversary . </p>
									<a href="kw-cake.php"><input type="button" value="Grab It"></a>
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="web/images/m4.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>VARIETIES</h4>
									<p>Test verities of cake here. </p>
									<a href="v-cake.php"><input type="button" value="Grab It"></a>
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
			
				    <script type="text/javascript" src="web/js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
	
				<div class="biseller-info">
<div class="container">
<h2>best seller</h2>
<h3 class="new-models">Birthday cakes</h3>
			<ul id="flexiselDemo">
				<li>
					<div class="biseller-column">
					<img src="web/images/101.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="101.php">Quick view</a>
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
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/102.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="102.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 102 <br> Half Kg Strawberry cake</h4>
						<p><?php echo "Rs. $m102"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>				-->	
					</div>
				</li>
			
				<li>
					<div class="biseller-column">
					<img src="web/images/103.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="103.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 103 <br>Half kg cream cake</h4>
						<p><?php echo "Rs. $m103"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/104.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="104.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 104 <br>Half kg vanilla cake </h4>
						<p><?php echo "Rs. $m104"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/105.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="105.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 105 <br>Half kg chocolate cake </h4>
						<p><?php echo "Rs. $m101"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/106.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="106.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 106 <br>Half kg eggless strawberry cake </h4>
						<p><?php echo "Rs. $m106"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
					<li>
					<div class="biseller-column">
					<img src="web/images/107.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="107.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 107 <br>Half kg white cream cake </h4>
						<p><?php echo "Rs. $m107"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
	     	</ul>
			</div>
                    <br /><br /><hr /><br /><br />
					
					 <div class="container">
					<h3 class="new-models">Lovers_special‬</h3>
			<ul id="flexiselDemo1">
			<li>
					<div class="biseller-column">
					<img src="web/images/201.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="201.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc :201<br> cool heart cake
						<p><?php echo "Rs. $m201"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/202.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="202.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 202<br>love dose cake</h4>
						<p><?php echo "Rs. $m202"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>	-->				
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/203.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="203.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 203 <br>double stick cake</h4>
						<p><?php echo "Rs. $m203"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>				-->	
					</div>
				</li>
			
				<li>
					<div class="biseller-column">
					<img src="web/images/204.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="204.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 204 <br> propose cake </h4>
						<p><?php echo "Rs. $m204"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/205.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="205.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 205 <br>pinkle cake</h4>
						<p><?php echo "Rs. $m205"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>

				
	     	</ul>
			</div>
					
					
                <div class="container">

<h3 class="new-models">Designer cake</h3>
			<ul id="Ul1">
				<li>
					<div class="biseller-column">
					<img src="web/images/401.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="401.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc : 401 <br>One pound fruit cake</h4>
						<p><?php echo "Rs. $m401"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>	-->				
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/402.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="402.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc :402<br>Two pound Grilled chocolate Cake</h4>
						<p><?php echo "Rs. $m402"?> </p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>				-->	
					</div>
				</li>
			
				<li>
					<div class="biseller-column">
					<img src="web/images/403.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="403.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc:403 <br>Two pound santa cluse cake </h4>
						<p><?php echo "Rs. $m403"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="web/images/404.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="404.php">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>cc:404 <br>One pound rose pineapple cake</h4>
						<p><?php echo "Rs. $m404"?></p>
					</div>
						<!--<a href="singlepage.php"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					</div>
				</li>
				
	     	</ul>
			</div>
		</div>	
                <script type="text/javascript">
                    $(window).load(function () {

                        $("#flexiselDemo3").flexisel({
                            visibleItems: 3,
                            animationSpeed: 1000,
                            autoPlay: false,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });

                        $("#flexiselDemo").flexisel({
                            visibleItems: 4,
                            animationSpeed: 1000,
                            autoPlay: false,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 4,
                            animationSpeed: 1000,
                            autoPlay: false,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });
                        $("#Ul1").flexisel({
                            visibleItems: 4,
                            animationSpeed: 1000,
                            autoPlay: false,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });

                    });
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			

				<div class="clearfix"></div>
			</div>
		</div>
		<div class="service-section">
			
				<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					<?php echo "$offer";?>
			
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
		
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
				<a href="whatsapp.php">	<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="web/images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>WhatsApp your Order</h4>
							<p>Now WhatsApp your order to us on 730-143-8717 <font size="2" color="blue"><a href="whatsapp.php">see more</a></font> </p>
						</div>
						<div class="clearfix"></div>
					</div></a>
					
					<!--<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
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
							<li class="data"> 9 A.M.-11 P.M.</li>
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
						<form action="index.php" method="POST">
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
				<a href = "#" id = "toTop" style = "display: block;"> <span id = "toTopHover" style = "opacity: 1;"> </span></a>

</body>
</html>
