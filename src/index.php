<?php include 'includes/config.php' ?>

<!doctype html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head> 
<body>
	<?php include 'includes/navbar.php'; ?>
	<section class="container-fluid">
		<div class="row hero-container">
			<div class="col-12">
				<div class="col-8 mx-auto">
					<div class="row">
						<div class="col-12" data-aos="fade-right">
							<p class="h1 text-light text-center font-weight-bold hero-title">I <span class="hero-focus">design</span> and <span class="hero-focus">build</span><br> modern websites</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-5" data-aos="fade-right">
							<p class="text-light text-center hero-subtitle">Frontend web developer</p>
						</div>
					</div>
					<div class="row">
						<div class="col text-center mb-5">
							<a href="contact.php">
								<button id="hero-btn-1" class="text-center mb-3 mr-5" data-aos="fade-right">Contact</button>
							</a>
							<a href="about.php">
								<button id="hero-btn-2" class="text-center mr-3" data-aos="fade-right">About</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
		<section class="container">
			<main role="main">
		<div class="row">
			<div class="text-center mx-auto mt-5 col-12 mb-5">
				<h1>Frontend developer from Denmark</h1>
			</div>
		</div>

		<div class="row mb-5">
			<div class="col-lg-6 col-md-6" data-aos="fade-up">
				<p>I am a frontend developer from Denmark. I have experience working mainly with web based technologies. These include Javascript, Javascript frameworks, PHP and more. I am always passionate about learning more and improving my skillset.</p>
			</div>
			<div class="col-lg-6 col-md-6" data-aos="fade-up">
				<p>I can work independently as well as in teams. I always do my best to complete whichever task i am currently working with. Here you can see some of my work.</p>
			</div>
		</div>
		</main>
		
        <div class="row text-center pb-5">
                <div class="col-lg-3 col-sm-12 mb-5" title="Javascript" data-aos="fade-up">
                    <a href="javascript.php">
						<i class="fab fa-js-square customFA"></i>
					</a>
					<a href="javascript.php">
						<button class="btn-main">Javascript</button>
					</a>
				</div>

				<div class="col-lg-3 col-sm-12 mb-5" title="Vue" data-aos="fade-up">
                    <a href="vue.php">
                        <i class="fab fa-vuejs customFA"></i>
					</a>
					<a href="vue.php">
						<button class="btn-main">Vue</button>
					</a>
				</div>
				
				<div class="col-lg-3 col-sm-12 mb-5" title="React" data-aos="fade-up">
                    <a href="react.php">
						<i class="fab fa-react customFA"></i>
					</a>
					<a href="react.php">
						<button class="btn-main">React</button>
					</a>
                </div>

				<div class="col-lg-3 col-sm-12 mb-5" title="PHP" data-aos="fade-up">
                    <a href="php.php">
						<i class="fab fa-php customFA"></i>
					</a>
					<a href="php.php">
						<button class="btn-main">PHP</button>
					</a>
				</div>
 
                <div class="col-lg-3 col-sm-12 mb-5" title="Wordpress" data-aos="fade-up">
                    <a href="wordpress.php">
                        <i class="fab fa-wordpress customFA"></i>
					</a>
					<a href="wordpress.php">
						<button class="btn-main">Wordpress</button>
					</a>
                </div>
        
                <div class="col-lg-3 col-sm-12 mb-5" title="Angular" data-aos="fade-up">
                    <a href="angular.php">
                        <i class="fab fa-angular customFA"></i>
					</a>
					<a href="angular.php">
						<button class="btn-main">Angular</button>
					</a>
				</div>
        </div>
</section>
    
	<?php include 'includes/footer.php'; ?>
	
	<?php //include __DIR__ . '/includes/footer.php'; ?>
	<?php //include( dirname( __FILE__ ) . '/includes/footer.php' ); ?>
	
	<?php include 'includes/scripts.php'; ?>
</body>
</html>