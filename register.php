<?php
require "core.inc.php";
require "connect_data_mysql.inc.php";
include 'C_cost.inc.php';
$flag = 0;
if(!loggedin()){
if(isset($_POST['username']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['password1']) && isset($_POST['password2']))
{
	$username = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	if(!empty($username) && !empty($fname) && !empty($lname) && !empty($password1) && !empty($password2))
	{
		if($password1==$password2){
			$query = "SELECT `username` FROM `user_login` WHERE '$username' = `username` ";
			$query_run = mysql_query($query);
			if(mysql_num_rows($query_run)==1){
				$flag = 1;
				
			}
			else
			{
				$password_cry=md5($password1);
				$query ="INSERT INTO `user_login` VALUES('','".mysql_escape_string($username)."','".mysql_escape_string($password_cry)."','".mysql_escape_string($fname)."','".mysql_escape_string($lname)."')"; 
				if($query_run=mysql_query($query))
				{
					$query = "SELECT `id` FROM `user_login` WHERE `username` = '".mysql_real_escape_string($username)."'";
					if($query_run=mysql_query($query))
		             {
			 
							$user_id=mysql_result($query_run,0,'id');
				            $_SESSION['user_id']=$user_id;
				            header('Location: index.php');
			         }
					
					$_SESSION['user_id']=$user_id;
					header('Location: index.php');
				
				}
				else
				{
					$flag = 2;
			
				}
			}
		}
		else
		{
			$flag = 3;
		
		}
	}
	else
	{
		$flag = 4;
		
	}
}
	
?>
<!DOCTYPE html>
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
						<li><a href="index.php">Home</a></li>|
						<li><a href="cakes.php">PRODUCTS</a></li>|
						<li><a href="about.php">about</a></li>|
						<li><a href="contact.php">contact</a></li>
						<!--<div class="clearfix"></div>-->
					</ul>
				</div>
				<div class="login-section">
					<ul>
					    
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
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
		<div class="content">
	<div class="main">
	   <div class="container">
	   
	   
		  <div class="register">
		  	  <form action="register.php" method="POST">
				 <div class="register-top-grid">
				 <?php 
				 if($flag == 1)
				 {
					 echo '<h4><font color = "red">The username <strong>'.$username .' </strong>already exists. </font></h4>';
				 }
				 else if($flag ==2)
					 {
						 echo '<h4><font color = "red">Your registration is not successful plz. try again </font></h4>';
					 }
					 else if ($flag == 3)
					 {
						 echo '<h4><font color = "red">password dosent match</font></h4>';
					 }
					 else if ($flag == 4)
					 {
						 echo '<h4><font color = "red">All field Required</font></h4>';
					 }
					 ?>
					 <br>
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name<label>*</label></span>
						<input type="text" name="fname" value= "<?php if(isset($fname)){ echo $fname; }?>" maxlength="40" > 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
						<input type = "text" name="lname" value= "<?php if(isset($lname)){ echo $lname; } ?>" maxlength="40" > 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
						 <input type="text" name ="username" value = "<?php if(isset($username)){ echo $username; } ?>" maxlength="30"  > 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
								<input type="password" name="password1"  maxlength="30" >
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input type="password" name="password2" maxlength="30" >
							 </div>
					 </div>
				
				<div class="clearfix"> </div>
				<div class="register-but">
				  
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
	     </div>
	    </div>
<div class="clearfix"></div>
		
		
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

<?php
}
else if(loggedin())
{
	echo "you are already Registered and logged in";
}
?>