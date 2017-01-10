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
<section class="full-banner">
<div class="banner">
	<?php include'header.php';?>
	<div class="container">
		<h1 class="scrollpoint sp-effect5">WHERE CAPITAL<br> 
			MEETS EXPERERTISE
		</h1>
	</div>
	</div>
</section>	
<!--Welcome to Noble Partners Section-->
<section class="contnt">
	<div class="scrollpoint sp-effect7">
		<div class="container">
			<h1>Welcome to <span>Noble Partners</span></h1>
			<p class="marg-btm-10">Noble Partners is an independent Private Equity & Venture Capital house which focuses on small and medium-sized high potential investment opportunities in GCC.We follow an opportunistic investment approach with an ultimate objective of achieving superior returns for our investors</p>	
		</div>
	</div>
</section>	

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
