<?php
session_start();
if(isset($_SESSION['data']))
{
include('config.php');
if(isset($_GET['id']))
{
$id = $_GET['id'];
if(isset($_POST['save']))
{
    $at="";
    $a=$_POST["name"];
    $b=$_POST["batch"];
    $c=$_POST["phone"];
    $d=$_POST["branch"];
    $e=$_POST["np"];
    $f=$_POST["food"];
$data="update participants set name='$a',batch='$b',phone='$c',branch='$d',pep='$e',foodt='$f' where pno='$id'";
$result=mysqli_query($conn,$data);
$s=0;
if($result){
$s=1;
}
header("Location:admin2.php?a=$s");

// header('Location:admin2.php?a='.$s);
}
?>
<?php
$data='select * from participants where pno='.$id;
$result=mysqli_query($conn,$data);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
            $na=$row['name'];
            $ba=$row['batch'];
            $ph=$row['phone'];
            $bh=$row['branch'];
            $np=$row['pep'];
            $f=$row['foodt'];
    }
    else
    {
        die("NO SUCH ADDMISION NUMBER EXIXTS".mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
		
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<title>Edit</title>
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
											<a href="logout.php">Logout</a>
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
										<li>
											<a href="admin2.php">View Participants</a>
										</li>
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
			<!-- menu for phones -->
			<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="admin2.php">View Participants</a></li>
				<li class="menu_mm"><a href="http://www.jecc.ac.in/aboutus">About</a></li>
				<li class="menu_mm"><a href="http://www.jecc.ac.in/contactus">Contact</a></li>
				<li class="menu_mm"><a href="logout.php">Log <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
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

                <!-- edit-->
                <div class="container" style="width: 500px" style="background-image:url(images/courses_background.jpg)">
                    <form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="edit.php?id=<?php echo $id; ?>" method="post">
                        <div class="counter_form_title">Edit Details</div>
                        <input type="text" class="counter_input" placeholder="Your Name:" name="name" required="required" value="<?php echo $na; ?>">
                        <input type="text" class="counter_input" placeholder="Batch : eg:1999-2003" name="batch" required="required" value="<?php echo $ba; ?>">
                        <input type="tel" class="counter_input" placeholder="Phone:" name="phone" required="required" value="<?php echo $ph; ?>">

                        <select name="branch" id="counter_select" class="counter_input counter_options" >
                            <option>Choose Branch</option>
                            <option <?php if ($bh == "CSE" ) echo 'selected' ; ?>>CSE</option>
                            <option <?php if ($bh == "ME" ) echo 'selected' ; ?>>ME</option>
                            <option <?php if ($bh == "EEE" ) echo 'selected' ; ?>>EEE</option>
                            <option <?php if ($bh == "EC" ) echo 'selected' ; ?>>EC</option>
                            <OPtion <?php if ($bh == "MR" ) echo 'selected' ; ?>>MR</OPtion>
                        </select>
                        <input type="tel" class="counter_input" placeholder="Number of people accompaning" name="np" required="required" value="<?php echo $np; ?>">

                        <div>
                            Food type : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <input type="radio" name="food" value="Veg"  <?php if($f=='Veg') {echo 'checked';} ?> >Veg &emsp;
                            <input type="radio" name="food" value="NonVeg" <?php if($f=='NonVeg') {echo 'checked';} ?>>Non-Veg
                            <br>
                        </div>
                        <input type="submit" value="Submit" name="save" class="counter_form_button" onclick="return confirm('CLICK OK TO EDIT')">submit now</button>
                    </form>


                </div>

                <!-- edit -->

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
    <?php }
else{?>
    <h1>INVALID PAGE</h1>
<?php }?> 
<?php
}
else
{
    header('Location:admin.php');
}?>
</body>
</html>