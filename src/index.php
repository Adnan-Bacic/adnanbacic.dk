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
							<h1 class="text-light text-center font-weight-bold hero-title">Frontend developer making <span class="hero-focus">websites</span> and <span class="hero-focus">apps</span></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-5" data-aos="fade-right">
							<p class="text-light text-center hero-subtitle">Adnan Bacic</p>
						</div>
					</div>
					<div class="row">
						<div class="col text-center mb-5">
							<a href="#contact">
								<button class="hero-btn-1 text-center mr-3 mb-3" data-aos="fade-right">Contact</button>
							</a>
							<a href="#about">
								<button class="hero-btn-2 text-center mr-3 mb-3" data-aos="fade-right">About</button>
							</a>
							<a href="#projects">
								<button class="hero-btn-2 text-center mr-3" data-aos="fade-right">Projects</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
		<section class="container" id="about">
		<div class="row">
			<div class="text-center mx-auto mt-5 col-12 mb-5">
				<h2>About</h2>
			</div>
		</div>

		<div class="row mb-5">
			<div class="col-lg-6 col-md-6" data-aos="fade-up">
				<p>
					I am a frontend developer from Denmark. I have a bachelors degree in web development.
					As a web developer i have experience working with
					<span class="font-weight-bold">HTML</span>,
					<span class="font-weight-bold">CSS</span> and
					<span class="font-weight-bold">JavaScript</span>.
					Furthermore i have worked with modern libraries such as
					<span class="font-weight-bold">React</span>,
					<span class="font-weight-bold">Vue</span> and
					<span class="font-weight-bold">TypeScript</span>.
				</p>
			</div>
			<div class="col-lg-6 col-md-6" data-aos="fade-up">
				<p>
					Though my professional career has been primarily dominted, not as a web developer, but as an app developer.
					I have worked with
					<span class="font-weight-bold">React Native</span>
					to create cross-platform apps for Android and IOS.
				</p>
			</div>
		</div>
		</section>

		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-12">
					<hr class="mb-5 mt-5">
				</div>
			</div>
		</div>

		<section class="container" id="projects">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center mb-5">
						Projects i have worked on
					</h2>
				</div>
			</div>

		<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="col-lg-8">
				<h3>NIOMI</h3>
				<p>
				A health app where users can get infomation about various parts of their health. They can get infomation about categories such as gut health and brain health. They even get recommendations for their lifestyle and diet.
				</p>
				<p>
				This is achieved by buying a "NIOMI kit" where you send a sample of your feces to their lab. Then you answer questions in the app as well. Through a combination of your feces and answers they are able to determine scores and recommendations that users can see in the app.
				</p>
				<p>
				I was the primary developer for the this app in React Native. Here i handled API request through a REST API. I handled user authentication as well as general backend requests.
				
				I used Redux for global state management.
				</p>
				<p>
				I was on this project from the beginning and all the way to release. Then i was also responsible for updates after release.
				</p>
				<p>
					<a class="link" href="https://play.google.com/store/apps/details?id=com.niomi_react_native" target="_blank" rel="noopener noreferrer"><i class="fab fa-android mr-1"></i>Android link</a>
				</p>
				<p>
					<a class="link" href="https://apps.apple.com/dk/app/niomi/id1557434947" target="_blank" rel="noopener noreferrer"><i class="fab fa-apple mr-1"></i>IOS link</a>
				</p>
				<h6>Main technologies used:</h6>
					<ul class="list-unstyled">
						<li>
							<span class="badge badge-primary">React Native</span>
						</li>
						<li>
							<span class="badge badge-primary">React Navigation</span>
						</li>
						<li>
							<span class="badge badge-primary">Redux</span>
						</li>
					</ul>
		</div>
		<div class="col-lg-4">
		<a href="#" target="_blank" rel="noopener noreferrer">
				<img src="images/project-thumbnails/niomi-thumbnail-image.png" class="img-fluid border" alt="niomi image">
			</a>
		</div>
		</div>
	</div>

	<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="col-12">
				<hr class="mb-5 mt-5">
			</div>
		</div>
	</div>

		<div class="container" data-aos="fade-up">
		<div class="row">
		<div class="col-lg-4">
			<a href="#" target="_blank" rel="noopener noreferrer">
				<img src="images/project-thumbnails/omnipod-thumbnail-image.png" class="img-fluid border mr-3" alt="omnipod image">
			</a>
		</div>
			<div class="col-lg-8">
				<h3>Omnipod</h3>
				<p>
				A podcasting app where users can upload and listen to podcasts. Acts as a social media where users can like, share and comment.
				</p>
				<p>
				I was not on the initial development of this app. I was already done and published. I was working on a full redesign, bugfixes and code quality improvements.
				</p>
				<p>
					Part of working on the redesign includes working on making the existing code more maintainable by making it easier to reuse.
				</p>
				<p>
					<a class="link" href="https://play.google.com/store/apps/details?id=com.meew.omnipod" target="_blank" rel="noopener noreferrer"><i class="fab fa-android mr-1"></i>Android link</a>
				</p>
				<p>
					<a class="link" href="https://apps.apple.com/dk/app/omnipod-social-podcasting/id1474630284" target="_blank" rel="noopener noreferrer"><i class="fab fa-apple mr-1"></i>IOS link</a>
				</p>
				<h6>Main technologies used:</h6>
					<ul class="list-unstyled">
						<li>
							<span class="badge badge-primary">React Native</span>
						</li>
						<li>
							<span class="badge badge-primary">React Navigation</span>
						</li>
						<li>
							<span class="badge badge-primary">Redux</span>
						</li>
					</ul>
			</div>
		</div>
	</div>

	<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="col-12">
				<hr class="mb-5 mt-5">
			</div>
		</div>
	</div>

		<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="col-lg-8">
				<h3>Mit FDM</h3>
				<p>
					Mit FDM is an app available to all FDM members. Here they can login and see their benefits, usages and membership information.
				</p>
				<p>
					I was not on the initial development of the app. I was hired later to maintain the app.
				</p>
				<p>
					My tasks have been cleaning up, maintenance and adding new features.
				</p>
				<p>
					<a class="link" href="https://play.google.com/store/apps/details?id=com.oneclickdev.fdm" target="_blank" rel="noopener noreferrer"><i class="fab fa-android mr-1"></i>Android link</a>
				</p>
				<p>
					<a class="link" href="https://apps.apple.com/dk/app/mit-fdm/id432911195" target="_blank" rel="noopener noreferrer"><i class="fab fa-apple mr-1"></i>IOS link</a>
				</p>
				<h6>Main technologies used:</h6>
					<ul class="list-unstyled">
						<li>
							<span class="badge badge-primary">React Native</span>
						</li>
						<li>
							<span class="badge badge-primary">React Navigation</span>
						</li>
						<li>
							<span class="badge badge-primary">Redux</span>
						</li>
					</ul>
		</div>
		<div class="col-lg-4">
		<a href="#" target="_blank" rel="noopener noreferrer">
				<img src="images/project-thumbnails/mitfdm-thumbnail-image.png" class="img-fluid border w-100" alt="mit fdm image">
			</a>
		</div>
		</div>
	</section>

	<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="col-12">
				<hr class="mb-5 mt-5">
			</div>
		</div>
	</div>

		<section class="container" id="contact">
			<div class="row">
				<div class="col-12 text-center pt-5">
					<h2>Contact</h2>
				</div>
			</div>
	
			<div class="row" data-aos="fade-up">
				<div class="col-12 text-center">
					<p>If you want to contact me you can do so on the following E-mail address:</p>
					<div class="font-weight-bold">ab-one@adnanbacic.dk</div>
					<br>
					<p>You can also contact me directly from here:</p>
				</div>
			</div>
			<?php include 'includes/contact-form.php'; ?>
	</section>

    
	<?php include 'includes/footer.php'; ?>
	
	<?php //include __DIR__ . '/includes/footer.php'; ?>
	<?php //include( dirname( __FILE__ ) . '/includes/footer.php' ); ?>
	
	<?php include 'includes/scripts.php'; ?>
</body>
</html>