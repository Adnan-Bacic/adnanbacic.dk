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
			<div class="col-12 text-center pt-5">
				<h1>About me</h1>
			</div>
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
						<h2 class="mt-0">Basic web technologies</h2>
						<p>I have experience coding websites myself from scratch.
						<br>
						Some of my skills include:</p>
						<div class="media mt-3" data-aos="fade-up">
							<i class="fab fa-html5 mr-5 customFAsmaller" title="HTML5"></i>
								<div class="media-body">
									<h3 class="mt-0">HTML5</h3>
									<p>HTML is the markup language of the web, with the current version being HTML5.
									<br>
									I have experience working with HTML5 and the tools it contains.</p>
								</div>
						</div>
						<div class="media mt-3" data-aos="fade-up">
							<i class="fab fa-css3-alt mr-5 customFAsmaller" title="CSS3"></i>
								<div class="media-body">
									<h3 class="mt-0">CSS3</h3>
									<p>CSS is the style language of the web, with the current version being CSS3.
									<br>
									In CSS3 i have experience with styling websites and layout.</p>
								</div>
						</div>
						<div class="media mt-3" data-aos="fade-up">
							<!--mr-5 instead of 3 because bootstrap icon is less wide than php and scss-->
							<i class="fab fa-bootstrap mr-5 customFAsmaller" title="Bootstrap"></i>
								<div class="media-body">
									<h3 class="mt-0">Bootstrap 4</h3>
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
					<a href="javascript.php"><i class="fab fa-js-square customFA align-self-start" title="Vue"></i></a>
					<div class="media-body ml-3">
						<h2 class="mt-0">Javascript ES6</h2>
						<p>Javascript is a client-side programming language. It can be used to create interactive websites. Javascript goes togehter with HTML and CSS to define the basis of web technologies.
						<br>
						In Javascript i have experience manipulating the behavior of sites. I have experience working with the newest versions of Javascript, also called ES6.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="media mb-5 col-xl-12 col-sm-12 mx-auto" data-aos="fade-up">
					<a href="vue.php"><i class="fab fa-vuejs customFA align-self-start" title="Vue"></i></a>
					<div class="media-body ml-3">
						<h2 class="mt-0">Vue</h2>
						<p>Vue is a framework for creating fast single-page-applications.</p>
						<p class="mb-0">In Vue i have experience creating interactive websites.</p>
						<div class="media mt-3" data-aos="fade-up">
						<i class="fas fa-database mr-5 customFAsmaller" title="Firebase"></i>
								<div class="media-body">
									<h3 class="mt-0">Firebase</h3>
									<p>Firebase is a database system developed by Google.
									<br>
									I have experience combining Vue with Firebase to create interactive applications.</p>
								</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="media mb-5 col-xl-12 col-sm-12 mx-auto" data-aos="fade-up">
					<a href="vue.php"><i class="fab fa-react customFA align-self-start" title="Vue"></i></a>
					<div class="media-body ml-3">
						<h2 class="mt-0">React</h2>
						<p>React is a framework for creating fast single-page-applications.</p>
						<p class="mb-0">In React i have experience creating interactive websites.</p>
						<div class="media mt-3" data-aos="fade-up">
						<i class="fas fa-database mr-5 customFAsmaller" title="Firebase"></i>
								<div class="media-body">
									<h3 class="mt-0">Firebase</h3>
									<p>Firebase is a database system developed by Google.
									<br>
									I have experience combining React with Firebase to create interactive applications.</p>
								</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="media mb-5 col-xl-12 col-sm-12 mx-auto" data-aos="fade-up">
					<a href="php.php"><i class="fab fa-php customFA align-self-start" title="Vue"></i></a>
					<div class="media-body ml-3">
						<h2 class="mt-0">PHP 7</h2>
						<p>PHP is a server-side programming language. It can be used to create interactive and dynamic websites.
						<br>
						In PHP i mainly have experience with login systems and CRUD with the help of SQL.</p>
						<div class="media mt-3" data-aos="fade-up">
						<i class="fas fa-database mr-5 customFAsmaller" title="SQL"></i>
								<div class="media-body">
									<h3 class="mt-0">SQL</h3>
									<p>SQL is a very popular database system.
									<br>
									I have experience combining PHP with SQL to create interactive sites.</p>
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
						<div class="media mt-3" data-aos="fade-up">
							<i class="fas fa-shopping-cart mr-4 customFAsmaller" title="WooCommerce"></i>
								<div class="media-body">
									<h3 class="mt-0">WooCommerce</h3>
									<p>WooCommerce is one of the largest plugins for creating webshops within Wordpress.
									<br>
									I have experience working with WooCommerce to manage a webshop.</p>
								</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="media mb-5 col-xl-12 col-sm-12 mx-auto" data-aos="fade-up">
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