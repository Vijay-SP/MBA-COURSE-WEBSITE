<?php
$otp = $_GET['pwd'];
$otp = base64_decode($otp);
$name = $_GET['name'];
$email_address = $_GET['email'];
$course = $_GET['course'];
$course_type = $_GET['course-type'];
$mobile_number = $_GET['phone'];
$city = $_GET['city'];
$state = $_GET['state'];
?>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Jthemes" />
	<meta name="description" content="Learning worm - Education & Courses Landing Page Template" />
	<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, Courses, Education, Learning, Online Education, Study">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- SITE TITLE -->
	<title>Learning worm - Education & Courses Landing Page Template</title>

	<!-- FAVICON AND TOUCH ICONS  -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
	<link href="css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="css/menu.css" rel="stylesheet">
	<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">

	<!-- ON SCROLL ANIMATION -->
	<!-- <link href="css/animate.css" rel="stylesheet"> -->

	<!-- TEMPLATE CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- RESPONSIVE CSS -->
	<link href="css/responsive.css" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a4f3e7c42f.js" crossorigin="anonymous"></script>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->


</head>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<body>

	<!-- HEADER ============================================= -->
	<header id="header" class="header white-menu navbar-dark">
		<div class="header-wrapper">


			<!-- MOBILE HEADER -->
			<div class="wsmobileheader clearfix">
				<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
				<span class="smllogo smllogo-black"><img src="images/logo.png" width="120" height="50" alt="mobile-logo" /></span>
				<span class="smllogo smllogo-white"><img src="images/logo-white.png" width="120" height="50" alt="mobile-logo" /></span>
			</div>


			<!-- NAVIGATION MENU -->
			<div class="wsmainfull menu clearfix">
				<div class="wsmainwp clearfix">


					<!-- LOGO IMAGE -->
					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
					<div class="desktoplogo"><a href="#" class="logo-black"><img src="images/logo.png" width="160" height="60" alt="header-logo"></a></div>
					<div class="desktoplogo"><a href="#" class="logo-white"><img src="images/logo-white.png" width="160" height="60" alt="header-logo"></a></div>


					<!-- MAIN MENU -->
					<!-- <nav class="wsmenu clearfix">
						<ul class="wsmenu-list">
							<li class="nl-simple" aria-haspopup="true"><a href="#scholar">Please Don't Reload or Skip this page, You won't get call back if skipped.</a></li>
						</ul>
					</nav> -->
				</div>
			</div>
		</div>
	</header>
	<!-- END DROPDOWN MENU -->
	<section id="hboxes-1" class="bg-whitesmoke wide-70 hero-boxes-section division text-center" style="height: 100%;">
		<div class="col-md-5" id="res" style="margin-left: 30%;">
			<ul class="wsmenu-list">


				<!-- SIMPLE NAVIGATION LINK -->
				<li class="nl-simple" aria-haspopup="true" style="font-weight:bold;"><a href="#scholar">Please Don't Reload or Skip this page, You won't get call back if skipped.</a></li>


				<!-- DROPDOWN MENU -->


			</ul>
			<div id="register-form">


				<!-- Form Input -->
				<div id="input-name" class="col-md-12">
					<p>Enter OTP*</p><br>
					<input type="text" name="otp" class="form-control name" id="otp" placeholder="Please Enter The Otp Here" required>
				</div>
				<br><br>
				<div class="col-md-12 form-btn">
					<button value="done" name="done" id="btn" class="btn btn-md btn-orange tra-black-hover submit">
						SUBMIT
					</button>
				</div>

			</div>
		</div>
	</section>




	<script>
		$("#btn").on('click', function() {
			var otp = $("#otp").val();
			if (otp == <?php echo $otp; ?>) {
				var url =
					"registerForm.php?name=<?php echo $name; ?>&email=<?php echo $email_address; ?>&phone=<?php echo $mobile_number; ?>&course=<?php echo $course; ?>&course-type=<?php echo $course_type; ?>&city=<?php echo $city; ?>";
				window.location.href = url, true;
			} else {
				alert("Enter Valid OTP");
			}
		});
	</script>
</body>

</html>