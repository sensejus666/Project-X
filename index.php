<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="keywords" content="Linksmosiospedutes, gyvunu prieglauda, šuniukų prieglauda, kačių prieglauda, šuo globojimui, katino globa, gyvuno globa..." />

	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	
	<link rel="stylesheet" type="text/css" href="css/style.css">


	<title>Linksmosios Pėdutės:)</title>
</head>
<body>
	<!--banner starts here-->
	<div class="banner">
		<div class="container">
			<div class="banner-main">
				<div class="banner-white-box">
					<a href="index.php"><div class="shelter-title">
						<img src="images/trueLogo.png">
						<h1>LINKSMOSIOS PĖDUTĖS</h1>
						<p>Gyvunų prieglaudos namai</p>
					</div></a>			 
				</div>
				<h3>Mes esame "LINKSMOSIOS pėdutės"! Ir tik LINKSMOSIOS ;)</h3>
			</div>
		</div>
	</div>
	<!--banner ends here-->

	<!--header starts here-->
	<div class="header-bottom">
	  <div class="fixed-header">	
		<div class="container">
			<div class="header-main">
				<div class="header-left">
					<h2><a href="index.html">Linksmosios Pėdutės</a></h2>
				</div>
				<div class="header-right">					
					  <div class="top-nav">
						<span class="menu"><img src="images/menu.png" alt=""/></span>
						<ul class="nav1">
							<li><a href="index.html" class="active">Home</a></li>
							<li><a class="scroll" href="#about">About</a></li>
							<li><a class="scroll" href="#services">Services</a></li>
							<li><a class="scroll" href="#gallery">Gallery</a></li>
							<li><a class="scroll" href="#contact" >Contact</a></li>
						</ul>	
						<!-- script-for-menu -->
						 <script>
						   $( ".menu" ).click(function() {
							 $( ".nav1" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
						<!-- /script-for-menu -->
			<!-- script-for sticky-nav -->
			<script>
			$(document).ready(function() {
				 var navoffeset=$(".header-bottom").offset().top;
				 $(window).scroll(function(){
					var scrollpos=$(window).scrollTop(); 
					if(scrollpos >=navoffeset){
						$(".header-bottom").addClass("fixed");
					}else{
						$(".header-bottom").removeClass("fixed");
					}
				 });
				 
			});
			</script>
			<!-- //script-for sticky-nav -->
					</div>
				 </div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--header ends here-->
</body>
</html>