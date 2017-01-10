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
<body class="bg">
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
	<div class="scrollpoint sp-effect3">
		<div class="container">
			<h1>Welcome to <span>Noble Partners</span></h1>
			<p>Noble Partners is an independent Private Equity & Venture Capital house which focuses on small and medium-sized high potential investment opportunities in GCC.We follow an opportunistic investment approach with an ultimate objective of achieving superior returns for our investors</p>	
		</div>
	</div>
</section>	
<!--Who are we?-->
<section class="whoareyou">
	<div class="scrollpoint sp-effect7">
		<div class="container">
			<h1>Who are we?</h1>
			<div class="bdr"></div>
			<p>We are investment professionals striving to create positive economic impact and long-term value for our investors, companies, communities and economies. We are committed to add value by identifying & investing in value-loaded companies, enhancing their performance and positioning them for profitable exits maximizing stakeholders' value.</p>
			<p>We believe that our ownership, dedication, teamwork and integrity are our key assets, which we leverage on to build success stories and investors’ trust. We utilize our network, deep industry knowledge, practical operational experience in order to create and execute value creation initiatives for each and every investment that we make with a hands-on model.</p>
			<div class="mission">
				<div class="mission-lft"> 
					<h3> MISSION </h3>	
				</div>	
				<div class="mission-rgt">
					<p>“We aim to  build a trustworthy and transparent Private Equity & Venture Capital House that values investors’ interests at the first hand, crowned by a strong corporate governance framework in order to achieve sustainable investment returns with a notable contribution to GCC region societies.”</p>
				</div>	
			</div>	
		</div>
	</div>
</section>	
<!--Leadership	-->
	<section class="leadership">	
		<div class="container">
			<div class="scrollpoint sp-effect4">
				<h1>Leadership</h1>
				<p>Our Senior Management Team is highly experienced and well-networked, with industry and investor relationships resulting in privileged access to transactions and capital. The Founders have been working together very closely for over 12 years with an outstanding track record and achievements. 
					Throughout our investment and transformational processes we seek to best align our goals with those of our portfolio companies to maximize their long-term potential.</p>
			</div>
			<!--Ammar Al Khushashi-->
			<div class="leader-box scrollpoint sp-effect2">
				<div class="leader-box-lft"><img src="images/Ammar.png"> </div>
				<div class="leader-box-rgt">
					<h3>Ammar Al Khushashi</h3>
					<div class="dot">18 years of experience in Private Banking, Investment, Financial and Management Consulting.</div>
					<div class="dot">Held senior positions at HSBC Private Banking, Barclays Private Banking and Headed BNP Paribas Private Banking – Abu Dhabi.</div>
					<div class="dot">Led several major M&A transactions in the GCC.</div>
					<div class="dot">Holds a BA in Business Administration from the American University of Beirut.</div>

				</div>
				<div class="clearfix"></div>
			</div>
			<!--Iyad Abu Hweij-->
			<div class="leader-box scrollpoint sp-effect1">
				<div class="leader-box-lft"><img src="images/iyad.png"> </div>
				<div class="leader-box-rgt">
					<h3>Iyad Abu Hweij</h3>
					<div class="dot">17 years of Private Equity and Consulting experience in leading PE houses in the GCC region.</div>
					<div class="dot">Held senior positions at the PE unit at Global Investment House and Al Masah Capital.</div>
					<div class="dot">Held several board memberships in diversified sectors across MENA region and is an active board member in several companies.</div>
					<div class="dot">Holds a BA in Business Administration & an MBA from Cass Business School of City University of London and is a Certified Investments & Derivatives Auditor.</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!--Ahmad Khamis-->
			<div class="leader-box marg-btm-0 scrollpoint sp-effect2">
				<div class="leader-box-lft"><img src="images/ahmad.png"> </div>
				<div class="leader-box-rgt">
					<h3>Ahmad Khamis</h3>
					<div class="dot">13 years of experience in Private Equity, Financial Consulting and Venture Capital.</div>
					<div class="dot">Was a Senior Director at the PE unit at Global Investment House, a Financial Consultant at KPMG in the earlier career</div>
					<div class="dot">Holds a BSc in Economics from University College London, Accounting & Finance Diploma from London School of Economics, MSc in Finance from the University of Leicester & is currently a 3rd Year Doctorate Candidate at MBS, and a CFA Level 3 candidate.</div>
				</div>
				<div class="clearfix"></div>
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
