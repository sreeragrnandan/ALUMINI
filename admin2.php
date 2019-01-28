<?php
	 session_start();
	 if(isset($_GET['a']))
{
	$za = $_GET['a'];
	if($za==1)
	{
		$db_msg = "Successfull";
	}
	else
	{
	$db_msg="Failed";
	}
}
if(isset($_SESSION['data']))
{
        include('config.php');

        if(isset($_GET['a']))
            {
                $a=$_GET['a'];
                $sql="delete from participants where pno='$a'";
                if(mysqli_query($conn,$sql)){
                  echo "Successfully deleted ";
                }
                else{
                    echo "failed deletion;".mysqli_error($conn);
                }
            }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>Admin page</title>
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
                                            <a href="logout.php" onclick="return confirm('CLICK OK TO LOGOUT')">Logout</a>
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
                            <div>
                                <?php 
						if(isset($db_msg)){
							if($za==1)
							{
								$z="alert-success";
							}
							if($za==0){
								$z="alert-danger";
							}
							echo '<div class="alert '.$z.' alert-dismissible fade show" role="alert">
							<strong>Edtion !</strong> '.$db_msg.'.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
						}								
					?>
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
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="menu_mm">
                        <a href="http://www.jecc.ac.in/aboutus">About</a>
                    </li>
                    <li class="menu_mm">
                        <a href="http://www.jecc.ac.in/contactus">Contact</a>
                    </li>
                    <li class="menu_mm">
                        <a href="logout.php">Log
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- menu -->
        <!-- Home -->
        <!-- Home Slider Item -->
        <!-- Home Slider Nav -->
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

                <!-- lable-->
                <div class="col-11" style="overflow-x:auto;">
                    <table class='table table-striped' align='center' style='width: 1000px'>
                        <thead>
                            <tr>
                                <th>DELETE</th>
                                <th>EDIT</th>
                                <th>SL.NO</th>
                                <th>NAME</th>
                                <th>BATCH</th>
                                <th>PHONE</th>
                                <th>BRANCH</th>
                                <th align="center" style="text-align: center">
                                    <span tooltip="No of people accompanying">ACCOMPANING</span>
                                </th>
                                <th>FOODTYPE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
									$data="select * from participants";
									$result=mysqli_query($conn,$data);
									$i=0;
									$cse=0;$me=0;$eee=0;$ec=0;$mr=0;
									if(mysqli_num_rows($result)>0){
										while($row=mysqli_fetch_assoc($result)){
											$id=$row['pno'];
											$i++;
											if($row['branch']=="CSE")
											{$cse++;}
											elseif($row['branch']=="ME"){
												$me++;
											}
											elseif($row['branch']=="EEE"){
												$eee++;
											}
											elseif (($row['branch']=="EC")) {
												$ec++;
											}
											else{
												$mr++;
											}
											echo '<tr scope="row">','<td><a href="admin2.php?a='.$id.'" onclick="return confirm(\' Do you want to delete?\')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>'
											,'<td><a href="edit.php?id='.$id.'" target="_blank"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>'
											,'<td align="center">'.$i.'</td>','<td>'.$row['name'].'</td>'
											,'<td align="center">'.$row['batch'].'</td>','<td align="center">'.$row['phone'].'</td>'
											,'<td align="center">'.$row['branch'].'</td>','<td align="center">'.$row['pep'].'</td>'
											,'<td align="center">'.$row['foodt'].'</td>','</tr>';
										
										}
									}
									?>
                        </tbody>
                    </table>
                </div>
                <!-- responsive -->
                <div class="col-1 d-none d-lg-block" align="center">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 15rem; background-color: initial">
                                <div class="card-body" style="">
                                    <h6 class="card-subtitle mb-2 text-muted">CSE</h6>
                                    <p class="card-text">NUMBER OF PEOPLE REGISTERED
                                        <br>
                                        <?php echo $cse; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- numeber b -->
                    <div class="row" style="margin-top: 10px">
                        <div class="col">
                            <div class="card" style="width: 15rem;background-color: initial">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">ME</h6>
                                    <p class="card-text">NUMBRR OF PEOPLE REGISTERED
                                        <br>
                                        <?php echo $me; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- numeber b -->
					<div class="row" style="margin-top: 10px">
                        <div class="col">
                            <div class="card" style="width: 15rem;background-color: initial">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">EEE</h6>
                                    <p class="card-text">NUMBRR OF PEOPLE REGISTERED
                                        <br>
                                        <?php echo $eee; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- numeber b -->

                    <!-- numeber b -->
                    <div class="row" style="margin-top: 10px">
                        <div class="col">
                            <div class="card" style="width: 15rem;background-color: initial">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">EC</h6>
                                    <p class="card-text">NUMBRR OF PEOPLE REGISTERED
                                        <br>
                                        <?php echo $ec; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- numeber b -->
                    <div class="row" style="margin-top: 10px">
                        <div class="col">
                            <div class="card" style="width: 15rem;background-color: initial">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">MR</h6>
                                    <p class="card-text">NUMBRR OF PEOPLE REGISTERED
                                        <br>
                                        <?php echo $mr; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- numeber b -->
                </div>
                <!-- responsive1 -->
                <div class="d-lg-none">
				   <h4> Number of applicants from corresponding branch </h4><hr>
				   <h6>CSE &nbsp;:<?php echo $cse; ?></h6>
				   <h6>EC &nbsp;&nbsp; :<?php echo $ec; ?></h6>
				   <h6>ME &nbsp;&nbsp;:<?php echo $me; ?></h6>
				   <h6>MR &nbsp;&nbsp; :<?php echo $mr; ?></h6>
				   <h6>EEE &nbsp; :<?php echo $cse; ?></h6>
                </div>
                <!-- responsive -->
            </div>

        </div>

    </div>
    </div>

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
                                        <div class="footer_logo_text">ALumnI
                                            <span>MeeT</span>
                                        </div>
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
    <script>
        function s() {
            alert("Do you want to delete")
        }
    </script>
</body>

</html>
<?php
}
else
{
    header('Location:admin.php');
}?>