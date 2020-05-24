<?php include 'includes/config.php' ?>

<!doctype html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head> 
<body>
	<?php include 'includes/navbar.php'; ?>
	<section class="container-fluid">
		<div id="hero" class="row">
			<div class="col-12">
				<div class="col-8 mx-auto">
					<div class="row">
						<div class="col-12" data-aos="fade-right">
							<p id="hero-title" class="h1 text-white text-center font-weight-bold">I <span class="hero-focus">design</span> and <span class="hero-focus">build</span><br> solid websites</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-5" data-aos="fade-right">
							<p id="hero-subtitle" class="text-white text-center">Frontend web developer</p>
						</div>
					</div>
					<div class="row">
						<div class="col text-center mb-5">
							<a href="contact.php">
								<button id="hero-btn-1" class="text-center" data-aos="fade-right">Contact</button>
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
			<h1 class="text-center mx-auto mt-5 col-12 mb-5" data-aos="fade-up">Frontend developer from Denmark</h1>
		</div>

		<div class="row mb-5">
			<p class="col-lg-6 col-md-6" data-aos="fade-up">I am a frontend developer from Denmark. I have experience working with my own code, working with Wordpress and some Angular. I am always passionate about learning more and improving my skillset.</p>
			<p class="col-lg-6 col-md-6" data-aos="fade-up">I can work independently as well as in teams. I always do my best to complete whichever task i am currently working with. Here you can see some of my work.</p>
		</div>
		</main>
		
        <div class="row text-center pb-5">
                <div class="col-lg-3 col-sm-12 mb-5" title="Coding" data-aos="fade-up">
                    <a href="coding.php">
                        <i class="fas fa-code customFA"></i>
					</a>
					<a href="coding.php">
						<button class="btn-main">Coding</button>
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
 
                <div class="col-lg-3 col-sm-12 mb-5" title="Wordpress" data-aos="fade-up">
                    <a href="wordpress.php">
                        <i class="fab fa-wordpress customFA"></i>
					</a>
					<a href="wordpress.php">
						<button class="btn-main">Wordpress</button>
					</a>
                </div>
        
                <div class="col-lg-3 col-sm-12" title="Angular" data-aos="fade-up">
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