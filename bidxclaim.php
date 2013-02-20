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


<!--index page info-->  
<div class='grid_18'>
	<div class='productsheadercontainer'>
		<h3>
			BidXClaim
		</h3>
	</div>
	<div class='tabs'>
		<br />
		<div id='fni' class='tabContainer'>
		<h3>
		
		</h3>
		</div>
		<div id='dp' class='tabContainer'>
		<h3>
		Dri Plan
		</h3>
		Dri-Plan enables contractors to capture all pertinent claim attributes and maintain equipment usage and job performance data within the guidelines published by the IICRC in its S500 booklet. It set a new standard for the industry then and continues today due to the 5 major updates and over 200 lesser iterations.
		</div>
		<div id='fnireview' class='tabContainer'>
		<h3>
		FnI Review
		</h3>
		</div>
		<div id='outlier' class='tabContainer'>
		<h3>
		Outlier
		</h3>
		</div>
	</div>
<script type="text/javascript">
 $(function () {
                        var tabContainers = $('div.tabs > div');
                        tabContainers.hide().filter('#fni').show();
                        
                        $('div.tabs ul.indextabnavigation a').click(function () {
                                tabContainers.hide();
                                tabContainers.filter(this.hash).show();
                                $('div.tabs ul.indextabnavigation a').removeClass('selected');
                                $(this).addClass('selected');
                                return false;
                        }).filter('#fni').click();
                });
</script>
	
</div>



<div class='grid_6 makerequest'>
	<?php include 'phpscripts/makerequestsidebar.php'; ?>
</div>  
  
  
</div>
<!-- end .container_24 -->
</body>
</html>