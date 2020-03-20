<?php include 'includes/config.php' ?>

<?php
/*
//https://www.yesdevnull.net/2014/02/a-simple-way-to-display-your-age-in-php/
$birthday = new DateTime('1998-03-25'); // Enter your birthday in YYYY-MM-DD format
$currentDate = new DateTime('now');

$interval = $birthday->diff($currentDate);

<?php echo $interval->format('%y'); ?>
*/
?>

<!doctype html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/navbar.php'; ?>
	
	<section class="container">
		<main role="main">
		<div class="row">
			<h1 class="col-12 text-center pt-5">About me</h1>
		</div>
			<div class="row pt-5 mb-5">
				<div class="col-lg-6 text-center mb-3">
					<img src="images/adnan-bacic.jpg" class="rounded-circle" width="300" height="300" alt="Adnan Bacic">
				</div>
				<div class="col-lg-6 mb-5">
					<h2 class="text-center">Who am i?</h2>
					<p>My name is Adnan Bacic and I am a frontend developer from Denmark. I am currently studying so that i can better my skillset. I am always looking forward to learning new things and become better.</p>
					<h2 class="text-center">What can i do?</h2>
					<p>My skillset includes coding from scratch, working with Wordpress and a little bit Angular. Here you can read a more comprehensive explanation to the extent of my skillset.</p>
				</div>
			</div>
		</main>
		</section>
		<section class="container">
			<div class="row">
				<div class="media mb-5 col-xl-12 col-sm-12 mx-auto" data-aos="fade-up">
					<a href="coding.php"><i class="fas fa-code customFA align-self-start" title="Coding"></i></a>
					<div class="media-body ml-3">
						<h2 class="mt-0">Coding</h2>
						<p>I have experience coding websites myself from scratch.
						<br>
						Some of my skills include:</p>
						<div class="media mt-3" data-aos="fade-up">
							<i class="fab fa-php mr-3 customFAsmaller" title="PHP"></i>
								<div class="media-body">
									<h3 class="mt-0">PHP</h3>
									<p>PHP is a server-side programming language. It is widely used and for good reason.
									<br>
									In PHP i mainly have experience with login systems with the help of SQL.</p>
								</div>
						</div>
						<div class="media mt-3" data-aos="fade-up">
							<!--mr-5 instead of 3 because bootstrap icon is less wide than php and scss-->
							<i class="fab fa-bootstrap mr-5 customFAsmaller" title="Bootstrap"></i>
								<div class="media-body">
									<h3 class="mt-0">Bootstrap</h3>
									<p>Bootstrap frontend framework designed to help developments of websites.
									<br>I have a lot of experience working with Bootstrap in developing websites.</p>
								</div>
						</div>
						<div class="media mt-3" data-aos="fade-up">
							<i class="fab fa-sass mr-3 customFAsmaller" title="SCSS"></i>
								<div class="media-body">
									<h3 class="mt-0">SCSS</h3>
									<p>SCSS is advanced styling of websites used to speed up a work procces and reduce repetitive tasks.<br>
									In SCSS i have experience speeding up my work procces.</p>
								</div>
						</div>
					</div>
				</div>
			</div>
			
		<div class="row">
			<div class="media mb-5 col-xl-12 col-sm-12 mx-auto" data-aos="fade-up">
				<a href="wordpress.php"><i class="fab fa-wordpress customFA align-self-start" title="Wordpress"></i></a>
					<div class="media-body ml-3">
						<h2 class="mt-0">Wordpress</h2>
						<p>Wordpress is a Content Management System(CMS). It is a way to create websites withoutr having to code everything yourself and just get the files done.</p>
						<p class="mb-0">I have experience with Wordpress, both for creating normal websites as well as webshops with the worlds most popular webshop plugin - Woocommerce.</p>
						<div class="media mt-3" data-aos="fade-up">
							<i class="fab fa-elementor mr-5 customFAsmaller" title="Elementor"></i>
								<div class="media-body">
									<h3 class="mt-0">Elementor</h3>
									<p>Elementor is the largest page builder in Wordpress. With Elementor its easy to quickly create a website just with a drag-n-drop page builder.<br>
									I have some experience working with Elementor.</p>
								</div>
						</div>
						<!-- No woocommerce fontawesome icon
						<div class="media mt-3" data-aos="fade-up">
							<img src="images/woo-logo.png" width="90" class="mr-5">
								<div class="media-body">
									<h3 class="mt-0">Woocommerce</h3>
									<p>Elementor is the largest page builder in Wordpress. With Elementor its easy to quickly create a website just with a drag-n-drop page builder.<br>
									I have some experience working with Elementor.</p>
								</div>
						</div> -->
					</div>
				</div>
			</div>
			
			<!--Padding-bottom on last element-->
			<div class="row">
				<div class="media pb-5 col-xl-12 col-sm-12 mx-auto" data-aos="fade-up">
					<a href="angular.php"><i class="fab fa-angular customFA align-self-start" title="Angular"></i></a>
					<div class="media-body ml-3">
						<h2 class="mt-0">Angular</h2>
						<p>Angular is a framework for creating fast single-page websites.</p>
						<p class="mb-0">In Angular i have experience creating simple websites.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
				
	<?php include 'includes/footer.php'; ?>
		
	<?php include 'includes/scripts.php'; ?>
</body>
</html>