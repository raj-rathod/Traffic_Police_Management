<?php
   include('action.php');
   if(!isset($_SESSION['pid'])){
     header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Challan page</title>
	<link rel="icon" href="img/policelogo.png" type="image/png">
	<link rel="shortcut icon" href="img/policelogo.png" type="img/x-icon">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/magnific-popup.js"></script>
	<script src="contactform/contactform.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>

	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

 </head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/policelogo.png" alt=""></a>
			</figure>
			<h2 style="color: white;"><b>HARYANA  POLICE</b></h2>
			<div class="container mt-5 mb-5">
  	     <div class="card">
  	     	<div class="card-header bg-success">
  	     		<h2 class="text-white text-center">Challan Receipt</h2>
  	     	</div>
  	     	<div class="card-body">
  	     		<div class="row">
  	     			<div class="col-md-4">
  	     			    <div class="card bg-info">
  	     					<div class="card-header"><h3>Violetor Details</h3></div>
  	     					<?php
                            if (isset($_SESSION['uid'])) {
                            	$uid=$_SESSION['uid'];
                            	$pid=$_SESSION['pid'];
                            	$sql="SELECT * FROM u_info WHERE uid='$uid' AND pid='$pid'";
                            	$run=mysqli_query($con,$sql);
                            	$row=mysqli_fetch_array($run);
                            	$name=$row['name'];
                            	$pno=$row['pno'];
                            	$add=$row['adds'];
                            	$aid=$row['aids'];
                            	echo "<div class='card-body'>
  	     					<h3 class='text-white'>Violetor name: $name </h3><br>
  	     					<h3 class='text-white'>Violetor ID: $aid</h3><br>
  	     					<h3 class='text-white'>Phone NO: $pno </h3><br>
  	     					<h3 class='text-white'>Address: $add</h3><
  	     				 </div>";
                            }
  	     					?>
  	     			    </div>
  	     			</div>	
  	     			<?php
                            if (isset($_SESSION['uid'])) {
                            	$uid=$_SESSION['uid'];
                            	$pid=$_SESSION['pid'];
                            	$sql="SELECT * FROM vehicle_detail WHERE uid='$uid' AND pid='$pid'";
                            	$run=mysqli_query($con,$sql);
                            	$row=mysqli_fetch_array($run);
                            	$vname=$row['vname'];
                            	$vmodel=$row['vmodel'];
                            	$vno=$row['vhno'];
                            	$vtype=$row['vtype'];
                            	$ccost=$row['ccost'];
                            	echo "<div class='col-md-4'>
  	     				<div class='card bg-info'>
  	     					<div class='card-header'><h3>Vehicle Details</h3></div>
  	     				<div class='card-body'>
  	     					<h3 class='text-white'>Vehicle name: $vname</h3><br>
  	     					<h3 class='text-white'>Vehicle No: $vno</h3><br>
  	     					<h3 class='text-white'>vehicle model : $vmodel </h3><br>
  	     					<h3 class='text-white'>vehicle type : $vtype tyers</h3>
  	     				</div>
  	     				</div>
  	     			</div>
  	     			<div class='col-md-4'>
  	     				<div class='card bg-info'>
  	     					<div class='card-header'><h3>Challan Details</h3></div>
  	     				
  	     				<div class='card-body'>
  	     					<h3 class='text-white'>Total Penality:  $ccost</h3><br>
  	     					<a href='print.php' class='btn btn-warning'><h3 class='text-white'> Print</h3></a>
  	     				</div>
  	     			  </div>
  	     		 	</div>";
                       }     	
                         ?>
  	     			<!---<div class='col-md-4'>
  	     				<div class='card bg-info'>
  	     					<div class='card-header'><h3>Vehicle Details</h3></div>
  	     				<div class='card-body'>
  	     					<h3 class='text-white'>Vehicle name: xs</h3><br>
  	     					<h3 class='text-white'>Vehicle No: xs</h3><br>
  	     					<h3 class='text-white'>vehicle model :  xs</h3><br>
  	     					<h3 class='text-white'>vehicle type : d</h3>
  	     				</div>
  	     				</div>
  	     			</div>
  	     			<div class='col-md-4'>
  	     				<div class='card bg-info'>
  	     					<div class='card-header'><h3>Challan Details</h3></div>
  	     				
  	     				<div class='card-body'>
  	     					<h3 class='text-white'>Total Penality: xs</h3><br>
  	     					<a href='print.php' class='btn btn-warning'><h3 class='text-white'> Print</h3></a>
  	     				</div>
  	     			  </div>
  	     			</div>-->
  	     		</div>
  	     	</div>
          
        </div>
		</div>
	</header>
	


	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>Don't Drink And Drive</h2>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=" icon-map-marker"></i>Address:</h3>
						<span>Room no- 5P 704,Provident Sunworth,Kengeri,Banglore</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3><i class="fa fa-phone"></i>Phone:</h3>
						<span>8003649945</span>
					</div>
					<div class="contact-info-box email clearfix">
						<h3><i class="fa fa-pencil"></i>email:</h3>
						<span>shubhamsindhu2712@gmail.com</span>
					</div>
					<div class="contact-info-box hours clearfix">
						<h3><i class="fa fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
					</div>
					<ul class="social-link">
						<li class="twitter"><a href="https://www.google.com/search?client=firefox-b-d&q=twitter"><i class="fa fa-twitter"></i></a></li>
						<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
						<li class="pinterest"><a href="https://in.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
						<li class="gplus"><a href="https://www.google.com/search?client=firefox-b-d&q=google.com"><i class="fa fa-google-plus"></i></a></li>
						<li class="dribbble"><a href="https://web.whatsapp.com/"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
				
				</div>
			</div>
		</section>
	</div>
	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

 </body>

</html>
