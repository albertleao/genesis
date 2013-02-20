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
		<li><a href='request.php'>Make a Request</a></li>
		<li>Contact Us</li>
	</ul>
</div>
<div class='clear'></div>


<!--index page info-->  
<div class='grid_18'>
	<div class='productsheadercontainer'>
		<p class='productpageheadertext'>
			Make a Request
		</p>
			It is important for us to know what our customers need. Please feel free to request more information by filling out the form below.
	</div>
	<br />	
	<form>
		<a>
			Your Name:
		</a>
		<br />
		<input type='textbox' size='50'/>
		<br />
		<br />
		
		<a>
			Your Company Name:
		</a>
		<br />
		<input type='textbox'  size='50'/>
		<br />
		<br />
		
		<a>
			Your Email:
		</a>
		<br />
		<input type='textbox'  size='50'/>
		<br />
		<br />
		
		<a>
			Your Phone Number for Contact:
		</a>
		<br />
		<input type='textbox'  size='50'/>
		<br />
		<br />
		
		<a>
			Request:
		</a>
		<br />
		<textarea rows='6' cols='39' style='resize: none;'></textarea>
		<br />
		<br />
		
		<input type='submit' class='button' value='Send Request' />
		
	</form>



</div>



<div class='grid_6 makerequest'>
	<?php include 'phpscripts/makerequestsidebar.php'; ?>
</div>  
  
  
</div>
<!-- end .container_24 -->
</body>
</html>