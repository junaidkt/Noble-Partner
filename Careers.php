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
			<h1 class="scrollpoint sp-effect5">Search for Jobs</h1> 
		</div>
		<div class="innr-rgt">
			<div class="innr-rgt-banner">
				<div class="hidden-md hidden-lg">
					<h3 class="scrollpoint sp-effect5">Search Jobs in Noble Partners<br></h3>
				</div>
				<img src="images/careers-banner.png"> 
			</div>
			<div class="innr-rgt-txt"><h1 class="scrollpoint sp-effect1">Careers</h1>
				<div class="inner-bdr car"></div>
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
					<div class="career-box">
						<div class="career-bg"><img src="images/career-bg.png"></div>
						<!--<div class="bloovo-logo"><img src="images/bloovo.svg"></div>-->
						<p>To apply for positions at Noble Partners,<br> please send us your CV at <span> jobs@noblepartnersltd.com </span></p>
						<!--<a href="http://bloovo.com/" target="_blank"> <button>BLOOVO.COM</button></a>-->
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
