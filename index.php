<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<meta charset="utf-8"/>
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
	   
				<!-- Collect the nav links, forms, and other content for toggling -->
		
				<ul class="nav navbar-nav ">
					<li><a href="#"><i class="fa fa-envelope" ></i><span class="call">motalebmpicmt@gmail.com</span></a></li>
					<li><a href="#"><i class="fa fa-phone" ></i><span class="call">+8801922223826</span></a></li>
				</ul>
			 
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
				
				</ul>
			</div><!-- /.container-fluid -->
		</nav>
		<div id="home" class="header">
			<div class="container">
				<section class="top_fixed affix" data-spy="affix" data-offset-top="120">
					<div class="row">
						<div class="col-md-4">
							<img src="img/Care-M.jpg"/>
						</div>
						<div class="col-md-6">
							<nav class="navbar nav_bgc" id="nav">
								<ul class="nav navbar-nav navbar-right">
									<li class="active"><a href="#home">Home</a></li>
									<li><a href="#about"> About</a></li>
									<li><a href="#department">Department</a></li>
									<li><a href="#doctor">Doctor</a></li>
									<li><a href="#sevice_sec">Service</a></li>
									
									<li><a href="#footer_section">Contuct</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-md-2 sec_log">
							<ul class="nav nav-pills">
							  <li class="active">
								<a href="login.php" target="_blank">Log In</a>
							  </li>
							  <li class="active"><a href="user_regi.php" target="_blank">Sign Up</a></li>
							</ul>
						</div>
					</div>
				</section>
			</div>
			<div class="container">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="img/2.png" alt="...">
							  <div class="carousel-caption">
								<h1>Lab room</h1>
							  </div>
							</div>
							<div class="item">
							  <img src="img/3.JPG" alt="...">
							  <div class="carousel-caption">
								<h1>working many nurse</h1>
							  </div>
							</div>
							<div class="item">
							  <img src="img/5.jpg" alt="...">
							  <div class="carousel-caption">
								<h1>I am a doctor</h1>
							  </div>
							</div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
				</div>
				</div>
			</div>
		</div>
	</header>
<!----About Start--------------->
	<article id="about" class="arti">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="img/drab.jpg">
				</div>
				<div class="col-md-8">
					<div class="row">
						<h2>About Us</h2>
						<h5>History</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<p>
						<button class="btn-lg rdis"><span class="read">READ MORE</span><i class="fa fa-angle-double-right  fa-lg" aria-hidden="true"></i></button>
						<hr/>
					</div>
				</div>
			</div>
		</div>
	</article>
<!---------About finish---------->
	<aside class="dept" id="department">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="depart">
						<h2>Department</h2>
						<h4>Our Department</h4>
					</div>
				</div>
			</div>
			<div class="row fast_ro">
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Neurology</h4>
						  <p>A neurologist is a medical doctor who specializes in treating diseases of the nervous system. </p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Physiotherapy</h4>
						  <p>Physiotherapy is a healthcare profession that assesses, diagnoses, treats, and works to prevent disease and disability through physical means.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Microbiology</h4>
						  <p>Microbiology is the study of microorganisms, which are unicellular or cell-cluster microscopic organisms. </p>
						</div>
					 </div>
				</div>
			</div>
			<div class="row fast_ro">
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Cardiology</h4>
						  <p>The cardiology hub contains articles on heart disease, coronary disease, hypertension, heart failure, and cardiomyopathy.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Gynecology & Obstetrics</h4>
						  <p>Obstetrics and gynecology (commonly known as OB-GYN, OBG, O&G or obs and gynae) is the medical specialty that deals with obstetrics and gynecology.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Urology</h4>
						  <p>Urology definition, the scientific, clinical, and especially surgical aspects of the study of the urine and the genitourinary tract in health and disease</p>
						</div>
					 </div>
				</div>
			</div>
			
			<div class="row fast_ro">
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Oncology</h4>
						  <p>A medical oncologist often is the main health care provider for someone who has cancer. A medical oncologist also gives supportive care</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Nephrology</h4>
						  <p>medical Definition of nephrology. plural nephrologies. :a medical specialty concerned with the kidneys and especially with their structure, functions,</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Orthopaedics</h4>
						  <p>Definition of orthopaedics - the branch of medicine dealing with the correction of deformities of bones or muscles.</p>
						</div>
					 </div>
				</div>
			</div>
			<div class="row fast_ro">
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Radiotherapy</h4>
						  <p>Systemic radiotherapy uses a radioactive substance, such as a radiolabeled monoclonal antibody, that travels in the blood to tissues throughout the body.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Emergency</h4>
						  <p>No person should be made to feel that they are not deserving of emergency support in times of crisis. </p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Diagnostic imaging</h4>
						  <p>Radiology news, features, case studies, and blogs for radiologists, technologists, administrators and medical imaging professionals.</p>
						</div>
					 </div>
				</div>
			</div>
		</div>
	
	</aside>
<!------------finish Department--------->
	<section class="dr" id="doctor">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="depart">
						<h2>Doctor</h2>
						<h4>Our Doctor</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<ul class="thumbnails">
							  <li class="span4">
								<div class="thumbnail dr_img">
								  <img data-src="holder.js/300x200" src="img/concierge-doctor-1.jpg" alt="">
								  <h3>Emmi</h3>
								  <p> Cardiologists </p>
								</div>
							  </li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="thumbnails">
							  <li class="span4">
								<div class="thumbnail">
								  <img data-src="holder.js/300x200" src="img/concierge-doctor-1.jpg" alt="">
								  <h3>Rojob Ali</h3>
								  <p> Radiotherapy </p>
								</div>
							  </li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="thumbnails">
							  <li class="span4">
								<div class="thumbnail">
								  <img data-src="holder.js/300x200" src="img/Doc2.jpg" alt="">
								  <h3>Rojob Ali</h3>
								  <p> Radiotherapy </p>
								</div>
							  </li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="thumbnails">
							  <li class="span4">
								<div class="thumbnail">
								  <img data-src="holder.js/300x200" src="img/dc3.png" alt="">
								  <h3>Jorina</h3>
								  <p> Diagnostic imaging </p>
								</div>
							  </li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<ul class="thumbnails">
							  <li class="span4">
								<div class="thumbnail">
								  <img data-src="holder.js/300x200" src="img/feemai.jpg" alt="">
								  <h3>Rohmot Ali</h3>
								  <p> Neurology </p>
								</div>
							  </li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="thumbnails">
							  <li class="span4">
								<div class="thumbnail">
								  <img data-src="holder.js/300x200" src="img/oldmen.jpg" alt="">
								  <h3>Rohmot Ali</h3>
								  <p> Neurology </p>
								</div>
							  </li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="thumbnails">
							  <li class="span4">
								<div class="thumbnail">
								  <img data-src="holder.js/300x200" src="img/nicefem.jpg" alt="">
								  <h3>Rohmot Ali</h3>
								  <p> Neurology </p>
								</div>
							  </li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="thumbnails">
							  <li class="span4">
								<div class="thumbnail">
								  <img data-src="holder.js/300x200" src="img/funny.jpg" alt="">
								  <h3>Rohmot Ali</h3>
								  <p> Neurology </p>
								</div>
							  </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---------------start service---------------->
	<section id="sevice_sec" class="sevice">
			<div class="container">
			<div class="row">
				<div class="row">
					<div class="depart">
						<h2>Service</h2>
						<h4>Our Service and offer</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Emergency Care</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Dental Care</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Outdoor Checkup</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Operation Theatres</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Blood Bank</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Nursing</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Surgery</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Health Checkup</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
					<div class="media">
						<div class="media-left">
						  <img src="img/9-512.png" class="media-object" style="width:90px">
						</div>
						<div class="media-body">
						  <h4 class="media-heading">Pharmacy</h4>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					 </div>
				</div>
			</div>
		</div>
	</section>
		<!--footer start-->
	<section id="footer_section">
			<footer class="footer1">
				<div class="container">

					<div class="row"><!-- row -->
						
							<div class="col-lg-3 col-md-3"><!-- widgets column left -->
								<ul class="list-unstyled clear-margins"><!-- widgets -->
									
										<li class="widget-container widget_nav_menu"><!-- widgets list -->
								
											<h1 class="title-widget">Blood Bank</h1>
											
											<ul>
												<li><a  href="#"><i class="fa fa-cog fa-spin fa-fw"></i>+8801922223826</a></li>
												<li><a  href="#"><i class="fa fa-angle-double-right"></i>bloodbnk@gmail.com</a></li>
												<li><a  href="#"><i class="fa fa-angle-double-right"></i>address:</a></li>
												
											</ul>
											<div class="social-icons">
											
												<ul class="nomargin">
												
													<a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
													<a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
													<a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
													<a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
												
												</ul>
											</div>
								
										</li>
										
									</ul>
									 
								  
							</div><!-- widgets column left end -->
							
							
							
							<div class="col-lg-3 col-md-3"><!-- widgets column left -->
						
							<ul class="list-unstyled clear-margins"><!-- widgets -->
									
										<li class="widget-container widget_nav_menu"><!-- widgets list -->
								
											<h1 class="title-widget">Nursing</h1>
											
											<ul>
												<li><a  href="#"><i class="fa fa-cog fa-spin fa-fw"></i>+8801922223826</a></li>
												<li><a  href="#"><i class="fa fa-angle-double-right"></i>bloodbnk@gmail.com</a></li>
												<li><a  href="#"><i class="fa fa-angle-double-right"></i>address:</a></li>
												
											</ul>
											<div class="social-icons">
											
												<ul class="nomargin">
												
													<a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
													<a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
													<a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
													<a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
																		
												</ul>
											</div>
										</li>
										
									</ul>
									 
								  
							</div><!-- widgets column left end -->
							
							
							
							<div class="col-lg-3 col-md-3"><!-- widgets column left -->
						
							<ul class="list-unstyled clear-margins"><!-- widgets -->
									
										<li class="widget-container widget_nav_menu"><!-- widgets list -->
								
											<h1 class="title-widget">Pharmacy</h1>
											
											<ul>
												<li><a  href="#"><i class="fa fa-cog fa-spin fa-fw"></i>+8801922223826</a></li>
												<li><a  href="#"><i class="fa fa-angle-double-right"></i>bloodbnk@gmail.com</a></li>
												<li><a  href="#"><i class="fa fa-angle-double-right"></i>address:</a></li>
												
											</ul>
											<div class="social-icons">
											
												<ul class="nomargin">
																		
													<a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
													<a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
													<a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
													<a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
																		
												</ul>
											</div>
										</li>
										
									</ul>
									 
								  
							</div><!-- widgets column left end -->
							
							
							<div class="col-lg-3 col-md-3"><!-- widgets column left -->
						
								<ul class="list-unstyled clear-margins"><!-- widgets -->
									
										<li class="widget-container widget_nav_menu"><!-- widgets list -->
								
											<h1 class="title-widget">EMERGENCY</h1>
											
											<ul>
												<li><a  href="#"><i class="fa fa-cog fa-spin fa-fw"></i>+8801922223826</a></li>
												<li><a  href="#"><i class="fa fa-angle-double-right"></i>bloodbnk@gmail.com</a></li>
												<li><a  href="#"><i class="fa fa-angle-double-right"></i>address:</a></li>
												
											</ul>
											<div class="social-icons">
											
												<ul class="nomargin">
												
													<a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
													<a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
													<a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
													<a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
												
												</ul>
											</div>
										</li>
										
									</ul>
									 
							</div>	  
				</div><!-- widgets column left end -->
			</div>
		</footer>
		<!--footer header-->

		<div class="footer-bottom">

			<div class="container">

				<div class="row">

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

						<div class="copyright">

							© 2015, Webenlance, All rights reserved

						</div>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

						<div class="design">

							 <a href="#">Franchisee </a> |  <a target="_blank" href="http://www.webenlance.com">Web Design & Development by Webenlance</a>
							<i class="fa fa-arrow-circle-up scrolltotop" aria-hidden="true"></i>
						</div>

					</div>

				</div>

			</div>

		</div>
	</section>
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$('#nav a').click(function(p){
				p.preventDefault();
			var hash = this.hash;
			var position = $(hash).offset().top;
			$('html').animate({
				scrollTop : position
			},800);
		})
			
			jQuery(".scrolltotop").click(function(){
		jQuery("html").animate({"scrollTop":"0px"},1000);
	});
			
		
	</script>
	
	
	
</body>
</html>