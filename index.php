<?php 

include 'pagecontent/database.php';

if (mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}



$sql = "SELECT * FROM jobs_en ORDER BY id;";

$return_jobs = mysqli_query($conn, $sql);

if ($return_jobs === false ){
    echo mysqli_error($conn);
} else {
$jobs = mysqli_fetch_all($return_jobs, MYSQLI_ASSOC);

}



?>

<?php
	include 'pagecontent/head.php';
?>


<body>
				
<?php
	include 'pagecontent/preloader.php';
?>

			

			<!---Animation-->
			<canvas id="canvas" width="1950px" height="1000px" ></canvas>
			<canvas id="canvasbg" width="1950px" height="1000px" ></canvas>
			<!--Wrapper-->
<div id="wrapper" class="margLTop margLBottom"> <!--- margLTop  (top space)-->

			<!--Container-->
	<div class="container">
						
		<div class="row ">
				
						<!--Left content  Menu And Immage-->
					<div class="col-md-3 nopr left-content" >
						
						<!--Header-->
											<header id="header">
							

							
									
										
										<!--Main header-->
										<div class="main-header">
										
										<!--Profile image-->
										<figure class="img-profile">
											<img src="img/Dionisis_Mpolanis.jpg" alt=""/>
											
											<figcaption class="name-profile">
												<span>Dionisis Bolanis <sup>&reg;</sup></span>
											</figcaption>
											
										</figure>
										<!--End profile image-->
										
										
									
												<!--Main navigation-->
													<nav id="main-nav" class="main-nav clearfix tabbed">

													<ul>
														<li ><a href="#about"><i class="icon-user"></i>About</a></li>
														<li><a  href="#experiance"><i class="icon-suitcase"></i>Experiance</a></li>
														<li><a  href="#education"><i class="icon-bookmark"></i>Education</a></li>
														<li><a  href="#portfolio"><i class="icon-monitor"></i>Portfolio</a></li>
														<li><a  href="#contact"><i class="icon-phone"></i>Contact</a></li>
													</ul>
													
													</nav>
												<!--End main navigation-->
												
									</div>
									<!--End main header-->
									
									<div class="bottom-header bgWhite ofsTSmall ofsBSmall tCenter">
										<ul class="social">
										<li><a href="https://www.facebook.com/dmpolanis"><i class="icon-facebook"></i></a></li>
										<li><a href="https://www.linkedin.com/in/dionisis-mpolanhs-86400854/"><i class="icon-linkedin"></i></a></li>
										<li><a href="https://github.com/icon32"><i class="icon-github"></i></a></li>


									</ul>
									
									<p>&copy; 2018 Bolanis.eu </p>
										
									</div>
									
									
									

							</header>
							<!--End  header-->
							
							
					</div>
						<!--End left content-->

						<!--Right content-->
					<div class="col-md-9 right-content"  >

							<?php include 'content/about.php';?>

							<?php include 'content/experiance.php';?>

							<?php include 'content/education.php';?>

							<?php include 'content/portfolio.php';?>

							<?php include 'content/contact.php';?>
						
							<!---- Content Goas Here ----->

					</div>
						<!--End right content-->
							
				
		</div>
					<!--End  row-->
						
				
	</div>
				<!--End  container-->
</div>
		<!--End wrapper-->

<!--Footer Javascript-->
<?php  include 'pagecontent/footerJavascript.php';?>


	</body>
</html>
