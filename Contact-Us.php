<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png" />
<title>Noble Partners</title>
<link href="stylesheets/style.css" rel="stylesheet">	
<link href="stylesheets/responsive.css" rel="stylesheet">	
<link href="stylesheets/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="stylesheets/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
</head>
<body>
<style>
.ii a[href]{ color:#fff!important }	
</style>	
	
<?php 
if(isset($_POST['btn'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phn =$_POST['phn'];
$loc =$_POST['loc'];
$sub =$_POST['sub'];	
$msg =$_POST['msg'];
$header = 'MIME-Version: 1.0' . "\r\n"; 
$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$header .= 'From: NOBLE Partners Enquiry <no-replay@noblepartnersltd.com >' . "\r\n";
$message='
<div style="background:#e3ebf5; font-family:calibri; font-size:12px; color:#fff; padding-top:100px; padding-bottom:100px;">
<div style="width:600px; margin:0 auto; background:#2c65ad;  padding-bottom:20px; position:relative;">

<div style="position:absolute; left: 240px; top: -50px;background:#104281; padding:20px; padding-bottom:10px;padding-top:10px;"><a href="#" style="color:#fff;  font-size:28px;width:100%; text-decoration:none; font-family:tahoma">NOBLE Partners Enquiry</a></div>

<div style="padding-top:20px; padding-bottom:15px;padding-left:20px; ">
<div style="float:left; width:160px">Name</div>
<div style="float:left; width:400px; color:#fff">'.$name.'</div>
<br clear="all">
</div>

<div style="padding-bottom:15px;padding-left:20px;">
  <div style="float:left; width:160px">Email address</div>
  <div style="float:left; width:400px; color:#fff">'.$email.'</div>
  <br clear="all" />
</div>

<div style="padding-bottom:15px;padding-left:20px;">
  <div style="float:left; width:160px">Phone Number</div>
  <div style="float:left; width:400px; color:#fff">'.$phn.'</div>
  <br clear="all" />
</div>

<div style="padding-bottom:15px;padding-left:20px;">
  <div style="float:left; width:160px">Location</div>
  <div style="float:left; width:400px; color:#fff">'.$loc.'</div>
  <br clear="all" />
</div>

<div style="padding-bottom:15px;padding-left:20px;">
  <div style="float:left; width:160px">Subject</div>
  <div style="float:left; width:400px; color:#fff">'.$sub.'</div>
  <br clear="all" />
</div>

<div style="padding-bottom:15px;padding-left:20px;">
  <div style="float:left; width:160px">Messages</div>
  <div style="float:left; width:400px; color:#fff">'.$msg.'</div>
  <br clear="all" />
</div>

</div>
</div>
</div>
';
if(mail('junaid.kt99@gmail.com','NOBLE Partners Enquiry' , $message,$header)){
echo "<script>alert('Mail Send Successfully')</script>";}
}
?>	
	
<?php include'header-inner.php';?>	
	
<section>
	<div class="innr-page">
		<div class="innr-lft hidden-sm hidden-xs">
			<h1 class="scrollpoint sp-effect5">If you have<br> any questions <br>or need more<br>
				information, please contact us</h1> 
		</div>
		<div class="innr-rgt">
			<div class="innr-rgt-banner">
				<div class="hidden-md hidden-lg">
					<h3 class="scrollpoint sp-effect5">If you have any questions or need more information, please contact us</h3>
				</div>
				<img src="images/contact-banner.png"> 
			</div>
			<div class="innr-rgt-txt"><h1 class="scrollpoint sp-effect1">Contact Us</h1>
				<div class="inner-bdr con"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
	
<section class="inner-page">
	<div class="container">
		<div class="scrollpoint sp-effect7">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-box">
						<div class="con-white"></div>
						<div class="con-white-btm"></div>
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3">
								<div class="cont-frm">
									<h2>Get In Touch</h2>
									<p>With Noble Partners</p>
									<form method="post">		
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-rgt-5">
												<input type="text" placeholder="Name" name="name" required type="text" > 
											</div>	
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-lft-5">
												<input type="text" placeholder="E-mail" name="email" required type="text" > 
											</div>	
											</div>	
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-rgt-5">
												<input type="text" placeholder="Contact Number" name="phn"> 
											</div>	
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-lft-5">
												<input type="text" placeholder="Location" name="loc"> 
											</div>	
										</div>	
										<div class="row">
											<div class="col-lg-12">
												<input type="text" placeholder="Subject" name="sub" required type="text"> 
											</div>		
										</div>		
										<div class="row">
											<div class="col-lg-12">
												<textarea placeholder="Message" name="msg" required type="text"></textarea>
											</div>		
										</div>	
										<div class="row">
											<div class="col-lg-12">
												<button name="btn">Submit</button>
											</div>		
										</div>									
									</form>							
								</div>		
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>		

<!--footer-->
<?php include'footer.php';?>
<!-- jquery -->	 
<script type="text/javascript" src="js/jquery.js"></script>   
<script src="js/bootstrap.js"></script>
<script src="js/scripts.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script>
	$(document).ready(function() {
		$('a[href^="#"]').click(function(event) {
			var id = $(this).attr("href");
			var offset = 60;
			var target = $(id).offset().top - offset;
			$('html, body').animate({scrollTop:target}, 1000);
			event.preventDefault();
		});
	});
</script>	
</body>
</html>
