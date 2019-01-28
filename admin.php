<?php
session_start();
include('config.php');
if(isset($_POST['save']))
{
    $u=$_POST['un'];
    $p=sha1($_POST['pw']);
    $sql="select password from users where uname = '$u'";
    $result=mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $pass=$row['password'];
        if($pass==$p){
            $_SESSION['data']='$u';
            header('Location:admin2.php');
        }
        else {
            $n= "Incorrect username or password";
        }
    }
    else{ echo "invalid username"; }
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<title>Register or Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->
			<div class="top_bar">
				<div class="top_bar_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<ul class="top_bar_contact_list">
										<li>
											<div class="question">Have any questions?</div>
										</li>
										<li>
											<i class="fa fa-phone" aria-hidden="true"></i>
											<div>+91-4884-259000</div>
										</li>
										<li>
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
											<div>info@jecc.ac.in</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Content -->
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container">
									<a href="#">
										<div class="logo_text">ALumnI
											<span> MeeT</span>
										</div>
									</a>
								</div>
								<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
										<li>
											<a href="index.php">Home</a>
										</li>
										<li>
											<a href="http://www.jecc.ac.in/aboutus">About</a>
										</li>
										<li>
											<a href="http://www.jecc.ac.in/contactus">Contact</a>
										</li>
									</ul>
									<div class="hamburger menu_mm">
										<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
									</div>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Search Panel -->
			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form action="#" class="header_search_form"></form>
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- menu -->
		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="http://www.jecc.ac.in/aboutus">About</a></li>
				<li class="menu_mm"><a href="http://www.jecc.ac.in/contactus">Contact</a></li>
			</ul>
		</nav>
	</div>
		<!-- menu -->
	</div>

	<!-- Features -->


	</div>
	</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">

			<div class="row courses_row">

				<!-- log in-->
				<link rel="stylesheet" href="assets/css/styles.css" />
				<div class="login-page">
					<div class="form">
						<form class="register-form">
							<input type="text" placeholder="name" />
							<input type="password" placeholder="password" />
							<input type="text" placeholder="email address" />
							<button>create</button>
							<p class="message">Already registered?
								<a href="#">Sign In</a>
							</p>
						</form>
						<form class="login-form" action="admin.php" method="post">
							<input type="text" placeholder="username" name='un' />
							<input type="password" placeholder="password" name='pw' />
							<button type="submit" value="submit" name="save">login</button>
							<p class="message">Not registered?
								<a href="#">Create an account</a>
							</p>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Counter -->



	<!-- Events -->


	<!-- Team -->



	<!-- Latest News -->


	<!-- Newsletter -->
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">

								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">ALumnI
												<span>MeeT</span>
											</div>
										</a>
									</div>
									<div class="footer_social">
										<ul>
											<li>
												<a href="#">
													<i class="fa fa-facebook" aria-hidden="true"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-google-plus" aria-hidden="true"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-instagram" aria-hidden="true"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter" aria-hidden="true"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: alumnimeet@jecc.com</li>
											<li>Phone: +91 70 5417 5893</li>
											<li>Jyothi Hills, Panjal Road, Vettikattiri PO, Cheruthuruthy, Kerala 679531</li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

								<!-- Footer links -->


							</div>

							<div class="col-lg-3 footer_col clearfix">

								<!-- Footer links -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/custom.js"></script>
	<!-- JavaScript includes -->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>