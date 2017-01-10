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
				<h1 class="scrollpoint sp-effect5">We are <br> opportunistic in our investment approach</h1> 
			</div>
			<div class="innr-rgt">
				<div class="innr-rgt-banner">
					<div class="hidden-md hidden-lg">
					<h3 class="scrollpoint sp-effect5">We are <br> opportunistic in our investment approach</h3>
					</div>
					<img src="images/business-banner.png"> 
				</div>
				<div class="innr-rgt-txt"><h1 class="scrollpoint sp-effect1">Business</h1>
				<div class="inner-bdr bus"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	
	<section class="inner-page">
		<div class="container">
			<div class="scrollpoint sp-effect7">
			<h2>Private Equity</h2>
			<p>We are opportunistic in our investment approach, our target being high quality businesses requiring capital, as well as buy-outs and other private equity transactions with no-sector specific focus.</p>
			<p>We operate as one hand, one team and one firm. We apply our capabilities as a group of investment professionals to deliver investment solutions, unlock potential and boost growth. We look to partner with management teams and entrepreneurs that have the track record of success, which will drive the development of businesses and communities.</p>
			<p>We believe that the combination of our industry knowledge, investment experience, and operational exposure provides us with an edge in identifying and creating value for our stakeholders.</p>
			</div>
		</div>
	</section>		
	
	<section class="inner-page light">
		<div class="container">
			<div class="scrollpoint sp-effect7">
			<h2>Venture Capital</h2>
			<p>We ideate and seed disruptive ventures based on comprehensive market research after which detailed investment strategies are drawn and executed. We exert a hands-on tactic in the strategic direction of those ventures. We undertake all operational, financial and strategic value-add initiatives to grow these start-ups to the next level of growth.</p>
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
