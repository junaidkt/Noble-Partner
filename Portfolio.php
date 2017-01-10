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
<?php include'header-inner.php';?>	
	
<section>
	<div class="innr-page">
		<div class="innr-lft hidden-sm hidden-xs">
			<h1 class="scrollpoint sp-effect5">A growing <br>protfolio of investments </h1> 
		</div>
		<div class="innr-rgt">
			<div class="innr-rgt-banner">
				<div class="hidden-md hidden-lg">
					<h3 class="scrollpoint sp-effect5">We are <br> opportunistic in our investment approach</h3>
				</div>
				<img src="images/protfolio-banner.png"> 
			</div>
			<div class="innr-rgt-txt"><h1 class="scrollpoint sp-effect1">Portfolio</h1>
				<div class="inner-bdr bus"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<section class="inner-page">
	<div class="container">
		<div class="scrollpoint sp-effect7">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mrg-20-btm">
					<div class="prot-box">
						<img src="images/protfolio2.png">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="prot-box">
						<img src="images/protfolio1.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h4>...and growing</h4>
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
