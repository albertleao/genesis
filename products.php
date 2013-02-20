<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Genesis Solutions Design</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/960_24_col.css" />
<link rel="stylesheet" href="css/main.css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

</head>
<body>
<div class="container_24">

<!--Navigation Bar-->
<?php include 'phpscripts/topnavigationbar.php'; ?>

<!--Sub Nav Bar-->
<div class="grid_24 subnavbar">
	<ul>
		<li><a href='index.php'>Home</a></li>
		<li>About Us</li>
		<li>FAQ</li>
		<li>News</li>
		<li>Make a Request</li>
		<li>Contact Us</li>
	</ul>
</div>
<div class='clear'></div>


<!--index page info-->  
<div class='grid_18'>
	<div class='productsheadercontainer'>
		<p class='productpageheadertext'>
			Products and Services
		</p>
			Genesis Solutions Design offers an ecosystem which enables service managers to implement cutting-edge data and management technologies. 
	</div>
	
		<div class='productcontainer'>
			<div class='productlogocontainer' onclick="document.location='fnisuite.php';">
				<img class='productslogo' src='img/productsfnilogo.png' />
			</div>
			<a class='singleproductheader' href='fnisuite.php'>
			Fire n Ice Suite
			</a><br />
			Water mitigation software
		</div>
		
		<div class='productcontainer'>
			<div class='productlogocontainer' onclick="document.location='einvoicing.php';">
			eInvoicing
			</div>
			<a class='singleproductheader' href='einvoicing.php'>
			eInvoicing
			</a><br />
			<!--Online billing system for service related companies-->
		</div>
		
		<div class='productcontainer'>
			<div class='productlogocontainer' onclick="document.location='cattrax.php';">
			CatTrax
			</div>
			<a class='singleproductheader' href='cattrax.php'>
			CatTrax
			</a><br />
			<!--Claim and Assignment tracking system.-->
		</div>
		
		<div class='productcontainer'>
			<div class='productlogocontainer' onclick="document.location='gms.php';">
			Genesis Management Systems
			</div>
			<a class='singleproductheader' href='gms.php'>
			Genesis Management Systems
			</a><br />
			<!--Job Management and Communication system-->
		</div>
			
		<div class='productcontainer'>
			<div class='productlogocontainer' onclick="document.location='bidxclaim.php';">
			BidXClaim
			</div>
			<a class='singleproductheader' href='bidxclaim.php'>
			BidXClaim
			</a><br />
			<!--Reverse Auction web site to invite competition amongst contractors-->
		</div>
		
		<div class='productcontainer'>
			<div class='productlogocontainer' onclick="document.location='mobidiagram.php';">
			Mobile Diagramming
			</div>
			<a class='singleproductheader' href='mobidiagram.php'>
			Mobile Diagramming
			</a><br />
			<!--Desktop and iPad Diagramming with upload communication to GSD core.-->
		</div>
		
		<div class='productcontainer'>
			<div class='productlogocontainer' onclick="document.location='mobidiagram.php';">
			Custom Solutions
			</div>
			<a class='singleproductheader' href='mobidiagram.php'>
			Custom Solutions
			</a><br />
			<!--Desktop and iPad Diagramming with upload communication to GSD core.-->
		</div>


</div>



<div class='grid_6 makerequest'>
	<?php include 'phpscripts/makerequestsidebar.php'; ?>
</div>  
  
  
</div>
<!-- end .container_24 -->
</body>
</html>