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
					<img src="images/noble-banner.png"> 
				</div>
				<div class="innr-rgt-txt"><h1 class="scrollpoint sp-effect1">Noble Partners</h1>
				<div class="inner-bdr nob"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
<section class="inner-page">
		<div class="container">
			
			<div class=" row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="tab scrollpoint sp-effect7">
					<div class="tab-btn"><a href="Noble-Partners-Equity.php" class="act">Who are we?</a></div>
					<div class="bdr-tab"></div>
					<div class="tab-btn"><a href="Noble-Partners-leadership.php">Leadership</a></div>	
					<div class="clearfix"></div>
				</div>	
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<!--Who are we?-->

	<div class="whoareyou scrollpoint sp-effect7">
				<div class="mission">
				<div class="mission-lft"> 
					<h3> VISION </h3>	
				</div>	
				<div class="mission-rgt">
					<p>“We aim to  build a trustworthy and transparent Private Equity & Venture Capital House that values investors’ interests at the first hand, crowned by a strong corporate governance framework in order to achieve sustainable investment returns with a notable contribution to GCC region societies.”</p>
				</div>	
				<div class="clearfix"></div>	
			</div>
<!--<h2>Private Equity</h2>-->
			<p>We are investment professionals striving to create positive economic impact and long-term value for our investors, companies, communities and economies. We are committed to add value by identifying & investing in value-loaded companies, enhancing their performance and positioning them for profitable exits maximizing stakeholders' value.</p>
			<p>We believe that our ownership, dedication, teamwork and integrity are our key assets, which we leverage on to build success stories and investors’ trust. We utilize our network, deep industry knowledge, practical operational experience in order to create and execute value creation initiatives for each and every investment that we make with a hands-on model.</p>
	
		
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
