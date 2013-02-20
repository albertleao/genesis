<!DOCTYPE html>

<html>
<head>
	<!--
	*****************************************************************
	Fluid Baseline Grid v1.0.0
	Designed & Built by Josh Hopkins and 40 Horse, http://40horse.com
	Licensed under Unlicense, http://unlicense.org/
	*****************************************************************
	-->
	<title>Genesis</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="description" content="" />
	<meta name="author" content="">
	<meta name="keywords" content="" />

	<!-- Optimized mobile viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	
	<!-- Place favicon.ico and apple-touch-icon.png in root directory -->
		
	<link href="css/mobilegridsystem.css" rel="stylesheet" />
	<link href="css/main.css" rel="stylesheet" />
</head>

<body>
	<header>
		<div class="g1 indexlogocontainer">
			<img src="img/genesislogo.png" class='indexlogo' title="Genesis Solutions Design">
		</div>
		<div class="g1 homebutton" onclick="document.location='index.php';">
			Home
		</div>
	</header>
	<div class="cf"></div>
	<div id="content">
		<div class="g3 productheader">
			<div class='indexproductimagelogocontainer'>
				<a href='fnisuite.php'><img src='img/indexfnilogo.png' /></a>
			</div>
					
				<div class='tabs'>
					<ul class='fnitabnavigation'>
						<li><a href='#fni'>Fire n' Ice</a></li>
						<li><a href='#dp'>Dri Plan</a></li>
						<li><a href='#fnireview'>FnI Review</a></li>
						<li><a href='#outlier'>Outlier</a></li>
					</ul>
					<br /><br /><br />
					<div id='fni' class='tabContainer'>
					<img style='max-width: 300px;' src='img/fniindexpic.png' />
					</div>
					
					<div id='dp' class='tabContainer'>
						<h4>Dri Plan</h4>
							Dri-Plan enables contractors to capture all pertinent claim attributes and maintain equipment usage and job performance data within the guidelines published by the IICRC in its S500 booklet. It set a new standard for the industry then and continues today due to the 5 major updates and over 200 lesser iterations.
					</div>
					
					<div id='fnireview' class='tabContainer'>
					<h4>
					FnI Review
					</h4>
					</div>
					
					<div id='outlier' class='tabContainer'>
					<h4>
					Outlier
					</h4>
					</div>
				</div>
				<script type="text/javascript">
					$(function () {
                        var tabContainers = $('div.tabs > div');
                        tabContainers.hide().filter('#fni').show();
                        
                        $('div.tabs ul.fnitabnavigation a').click(function () {
                                tabContainers.hide();
                                tabContainers.filter(this.hash).show();
                                $('div.tabs ul.fnitabnavigation a').removeClass('selected');
                                $(this).addClass('selected');
                                return false;
                        }).filter('#fni').click();
                });
</script>
				
				
		</div>
	</div>
	

	<!-- HTML5 IE Enabling Script -->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- CSS3 Media Queries -->
	<script src="js/respond.min.js"></script>

	<!-- Optimized Google Analytics. Change UA-XXXXX-X to your site ID -->
	<script>var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
	
</body>
</html>