<?php include 'includes/config.php' ?>

<!doctype html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>

<body>
	<?php include 'includes/navbar.php'; ?>

	<section class="container">
	<main role="main">
		<div class="col-xl-12 mx-auto">
			<div class="row pt-5">
				<div class="col-12">
					<i class="fab fa-react customFA align-self-start mb-5" title="react native"></i>
				</div>
			</div>

			<div class="row">
				<div class="col-12 mt-3">
					<h1>React Native</h1>
					<p>Projects created with React Native</p>
				</div>
			</div>

			<hr class="mb-5 mt-5">

			<div class="row">
				<div class="col-lg-8">
					<h5 class="mt-0">NIOMI</h5>
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
					<p>
						<a class="link" href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-github mr-1"></i>No Github link as this is a private repository.</a>
					</p>
					<h6>Main technologies used:</h6>
						<ul>
							<li>
								<span class="badge badge-primary">React Native</span>
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

			<hr class="mb-5 mt-5">

			<div class="row">
			<div class="col-lg-4">
				<a href="#" target="_blank" rel="noopener noreferrer">
					<img src="images/project-thumbnails/omnipod-thumbnail-image.png" class="img-fluid border mr-3" alt="omnipod image">
				</a>
			</div>
				<div class="col-lg-8">
					<h5 class="mt-0">Omnipod</h5>
					<p>
					A podcasting app where users can upload and listen to podcasts. Acts as a social media where users can like, share and comment.
					</p>
					<p>
					I was not on the initial development of this app. I was already done and published. I was working on a redesign, bugfixes and code quality improvements.
					</p>
					<p>
						<a class="link" href="https://play.google.com/store/apps/details?id=com.meew.omnipod" target="_blank" rel="noopener noreferrer"><i class="fab fa-android mr-1"></i>Android link</a>
					</p>
					<p>
						<a class="link" href="https://apps.apple.com/dk/app/omnipod-social-podcasting/id1474630284" target="_blank" rel="noopener noreferrer"><i class="fab fa-apple mr-1"></i>IOS link</a>
					</p>
					<p>
						<a class="link" href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-github mr-1"></i>No Github link as this is a private repository.</a>
					</p>
					<h6>Main technologies used:</h6>
						<ul>
							<li>
								<span class="badge badge-primary">React Native</span>
							</li>
							<li>
								<span class="badge badge-primary">Redux</span>
							</li>
						</ul>
				</div>

			</div>

			<hr class="mb-5 mt-5">
		</div>
		</main>
	</section>

	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>
</body>
</html>