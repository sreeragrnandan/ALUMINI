<?php
        if(isset($_POST['save'])){
			include('config.php');
            if(!$conn)
            {
                die("connet faild".mysqli_connect_error());
			}
			echo "connection successfull";
			$at="";
            $a=$_POST["name"];
            $b=$_POST["batch"];
            $c=$_POST["phone"];
            $d=$_POST["branch"];
            $e=$_POST["np"];
            $f=$_POST["food"];
            $data="insert into participants values('$at','$a','$b','$c','$d','$e','$f')";
            $result=mysqli_query($conn,$data);
            if($result){
                $db_msg = " successfull";
            }
            else{
				$sql="select name from participants where phone = '$c'";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					$n=" Number already exist";
				}
                $db_msg = " failed".$n; //.mysqli_error($conn)
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<title> ALumnI MeeT </title>
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
									<div class="top_bar_login ml-auto">
										<div class="login_button">
											<a href="admin.php">Register or Login</a>
										</div>
									</div>
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
										<li class="active">
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
					<?php 
						if(isset($db_msg)){
							if($db_msg==" successfull")
							{
								$z="alert-success";
							}
							else{
								$z="alert-danger";
							}
							echo '<div class="alert '.$z.' alert-dismissible fade show" role="alert">
							<strong>Submition !</strong> '.$db_msg.'.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
						}								
					?>
				</div>
			</div>
			<!-- Header Search Panel -->
			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form action="index.php" class="header_search_form" method="post"></form>
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
				<li class="menu_mm"><a href="admin.php">Log!n</a></li>
				<li class="menu_mm"><a href="http://www.jecc.ac.in/aboutus">About</a></li>
				<li class="menu_mm"><a href="http://www.jecc.ac.in/contactus">Contact</a></li>
			</ul>
		</nav>
	</div>
		<!-- Home -->
		<div class="home">						
			<div class="home_slider_container">
			
				<!-- Home Slider -->
				<div class="owl-carousel owl-theme home_slider">

					<!-- Home Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(img/bg-img/bg-1.jpg)"></div>
						<div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_title" style="color: whitesmoke">Wellcome to Where you
											<br> BELONG</div>
										<div class="home_slider_subtitle" style="color: whitesmoke">Jyothi Engineering College</div>
										<div class="home_slider_form_container" style="color: whitesmoke">
											<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
												<button type="button" class="home_search_button">
													<a href="http://jecc.ac.in">HOME</a>
												</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Home Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(img/bg-img/bg-2.jpg)"></div>
						<div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_title" style="color: whitesmoke;text-align:left ">Take A
											<br>break and
											<br> JOIN </div>

										<div class="home_slider_form_container">
											<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Home Slider Item -->
			</div>
		</div>
		<!-- Home Slider Nav -->
		<div class="home_slider_nav home_slider_prev">
			<i class="fa fa-angle-left" aria-hidden="true"></i>
		</div>
		<div class="home_slider_nav home_slider_next">
			<i class="fa fa-angle-right" aria-hidden="true"></i>
		</div>
	</div>
	<!-- Features -->
	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">ALUMNI MEET</h2>
						<div class="section_subtitle">
							<p>Dear Alumnies
								<br>It gives us immense pleasure to continue everlasting ties with you. Hope you are faring well in your job and earning
								laurels for yourself as well as your parents/guardians.Jyothi is proud to Wellcome our treasure back to our College</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<a href="https://www.facebook.com/jecc.ac.in">
								<img src="images/icon_1.png" alt="">
							</a>
						</div>
						<h3 class="feature_title">Facebook</h3>
						<div class="feature_text">
							<p></p>
						</div>
					</div>
				</div>
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<a href="https://www.youtube.com/channel/UC98-Qpt11G6p1k84Bs7q1xA">
								<img src="images/icon_2.png" alt="">
							</a>
						</div>
						<h3 class="feature_title">Youtube</h3>
						<div class="feature_text"></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<a href="https://twitter.com/jecctcr">
								<img src="images/icon_3.png" alt="">
							</a>
						</div>
						<h3 class="feature_title">Twitter</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<a href="https://www.linkedin.com/company/jyothi-engineering-college">
								<img src="images/icon_4.png" alt="">
							</a>
						</div>
						<h3 class="feature_title">Linkedin</h3>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">We Wellcome You</h2>
					</div>
				</div>
			</div>
			<div class="row courses_row">

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image">
							<img src="images/principal.jpg" alt="">
						</div>
						<div class="course_body">
							<h3 class="course_title">
								<a href="http://jecc.ac.in/staffs/JEC642">Principal</a>
							</h3>
							<div class="course_teacher">Fr.Dr.Jaison Paul Mulerikkal CMI</div>
							<div class="course_text">
								<p>I am joyfully Wellcoing you to alumni meet OF jyothi engineering college</p>
							</div>
						</div>

					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image">
							<img src="images/roy.jpg" alt="">
						</div>
						<div class="course_body">
							<h3 class="course_title">
								<a href="http://www.jecc.ac.in/staffs/JEC367">Secretary & Asst. Manager</a>
							</h3>
							<div class="course_teacher">
								Rev. Fr. Roy Joseph</div>
							<div class="course_text">
								<p>A warmfull greeting to every body hope you would enjoy this occation </p>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image">
							<img src="images/vinod.jpg" alt="">
						</div>
						<div class="course_body">
							<h3 class="course_title">
								<a href="http://jecc.ac.in/m/staffs/JEC593">ALL in ALL</a>
							</h3>
							<div class="course_teacher">Mr. Vinod K</div>
							<div class="course_text">
								<p>Wishing everybody a fantastic and prosperous alumni meet</p>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- Counter -->

	<div class="counter">
		<div class="counter_background" style="background-image:url(images/counter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Participate</h2>
						<div class="counter_text">
							<p> There is nothing like returning to a place that remains unchanged to find the ways in which you yourself have altered.
							Participate in our alumni meet with your family and make it a grand success with your presence. </p>
						</div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">

							<!-- Milestone -->
							<div class="milestone_text">Missing that Day<br> Every Day </div>
							<div class="milestone">
								
								<div class="milestone_counter" data-end-value="24">0</div>
								<div class="milestone_text">hours</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="1440" data-sign-after="">0</div>
								<div class="milestone_text">Minutes</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="86400" data-sign-after="">0</div>
								<div class="milestone_text">Seconds</div>
							</div>


						</div>
					</div>

				</div>
			</div>

			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="index.php" method="post">
							<div class="counter_form_title">Enter Details</div>
							<input type="text" class="counter_input" placeholder="Your Name:" name="name" id="name" required="required" onblur="validatename(this.id)">
							<div id="errorName" style="color: red; font-size:10px; display:none">Invalid Name</div>
							
							<input type="text" class="counter_input" placeholder="Batch : eg:1999-2003" name="batch" required="required" id="batch" onblur="validatebatch(this.id)">
							<div id="errorName3" style="color: red; font-size:10px; display:none">invalid Batch</div> 
							
							
							<input type="tel" class="counter_input" placeholder="Phone:" name="phone" required="required" id="phone" onblur="validatephone(this.id)">
							<div id="errorName2" style="color: red; font-size:10px; display:none">invalid number</div> 
							<select name="branch" id="counter_select" class="counter_input counter_options" required>
								<option value="">Choose Branch</option>
								<option>CSE</option>
								<option>ME</option>
								<option>EEE</option>
								<option>EC</option>
								<OPtion>MR</OPtion>
							</select>
							<input type="tel" class="counter_input" placeholder="Number of people accompaning(1-4)" name="np" required="required" id="acco" onblur="validateacco(this.id)">
							<div id="errorName4" style="color: red; font-size:10px; display:none">invalid input</div> 
							<div>
								Food type : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="radio" name="food" value="Veg" checked>Veg &emsp;
								<input type="radio" name="food" value="NonVeg">Non-Veg
								<br>
							</div>
							<input type="submit" value="Submit" name="save" class="counter_form_button"  id="mySubmit"  >submit now</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Codinators of Alumni Meet</h2>
					</div>
				</div>
			</div>
			<div class="row team_row">

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image">
							<img src="images/team_1.jpeg" alt="">
						</div>
						<div class="team_body">
							<div class="team_title">
								<a href="#">SHIJU PAUL</a>
							</div>
							<div class="team_subtitle">CSE & EC</div>
							<div class="social_list">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image">
							<img src="images/team_2.jpeg" alt="">
						</div>
						<div class="team_body">
							<div class="team_title">
								<a href="#">Aishwarya Ray</a>
							</div>
							<div class="team_subtitle">CE</div>
							<div class="social_list">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image">
							<img src="images/team_3.jpeg" alt="">
						</div>
						<div class="team_body">
							<div class="team_title">
								<a href="#">DR C K RAJU</a>
							</div>
							<div class="team_subtitle">MR</div>
							<div class="social_list">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image">
							<img src="images/team_4.jpeg" alt="">
						</div>
						<div class="team_body">
							<div class="team_title">
								<a href="#">VINOD</a>
							</div>
							<div class="team_subtitle">ME & EEE</div>
							<div class="social_list">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Latest News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">ComE Let Us Celibrate</h2>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">

					<!-- News Post Large -->
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image">
								<img src="images/news_1.jpeg" alt="">
							</div>
							<div class="news_post_large_title" style="color:#384158">
								<a>Reunion of Life a life Time</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title" style="color:#384158">
								<a>Come with your family</a>
							</div>

						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title" style="color:#384158">
								<a>Recreate Our good old days</a>
							</div>

						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title" style="color:#384158">
								<a>Lets Enjoy</a>
							</div>
						</div>
						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title" style="color:#384158">
								<a>Let Strengthen our everlasting bond</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
	<script>
/* 	function na()
	{
		if()
	} */
	function s() 
        {
			document.getElementById('errorName').style.display='block';
            alert("YOU HAVE BEEN SUCCESSFULLY REGISTERED");
        }
	

	function validatename(id)
	{
		var regex = /^[a-zA-Z ]{2,30}$/;
		// var ctrl =  ;

		if (regex.test(document.getElementById(id).value)) {
			document.getElementById('errorName').style.display='none';
			return true;
		}
		else {
			// alert('invalid');
			document.getElementById('errorName').style.display='block';
			document.getElementById("mySubmit").disabled = true;
		}
	}
	function validatephone(id)
	{
		var regex=/^[0-9]{10}$/;
		if(regex.test(document.getElementById(id).value)){
			document.getElementById('errorName2').style.display='none';
			return true;
		}
		else{
			document.getElementById('errorName2').style.display='block';
			document.getElementById("mySubmit").disabled = true;
		}
	}
	function validatebatch(id)
	{
		// var regex=/^([0-9]{4})(/^.{5}[\-]/)(/^[0-9]{4})$/;
		var regex=/^[0-9]{4}-[0-9]{4}$/;
		if(regex.test(document.getElementById(id).value)){
			document.getElementById('errorName3').style.display='none';
			return true;
		}
		else{
			document.getElementById('errorName3').style.display='block';
			document.getElementById("mySubmit").disabled = true;
		}
	}
	function validateacco(id)
	{
		var regex=/^[1-9]{1}$/;
		if(regex.test(document.getElementById(id).value)){
			document.getElementById('errorName4').style.display='none';
			return true;
		}
		else{
			document.getElementById('errorName4').style.display='block';
			document.getElementById("mySubmit").disabled = true;
		}
	}
	</script>
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
</body>
</html>
