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
					<i class="fab fa-php customFA align-self-start mb-5" title="PHP"></i>
				</div>
			</div>

			<div class="row">
				<div class="col-12 mt-3">
					<h1>PHP</h1>
					<p>Projects made PHP.</p>
				</div>
			</div>

			<hr class="mb-5 mt-3">
			
			<div class="row">
			<div class="col-lg-8">
					<h5 class="mt-0">Postit Board</h5>
					<p>This was our first advanced PHP assignment. Here we implemented a login system with SQL. Users then have the option to create postits which will be shown on a wall and they may delete their own postits.</p>
					<p>
						<a class="link" href="https://adnanbacic.dk/folders/php/postit/postitboard.php" target="_blank" rel="noopener noreferrer"><i class="fas fa-desktop mr-1"></i>See project</a>
					</p>
					<p>
						<a class="link" href="https://github.com/Adnan-Bacic/postit" target="_blank" rel="noopener noreferrer"><i class="fab fa-github mr-1"></i>Github link</a>
					</p>
					<h6>Main technologies used:</h6>
						<ul>
							<li>
								<span class="badge badge-primary">HTML</span>
							</li>
							<li>
								<span class="badge badge-primary">CSS</span>
							</li>
							<li>
								<span class="badge badge-primary">PHP</span>
							</li>
							<li>
								<span class="badge badge-primary">SQL</span>
							</li>
						</ul>
				</div>
				<div class="col-lg-4">
					<a href="https://adnanbacic.dk/folders/php/postit/postitboard.php" target="_blank" rel="noopener noreferrer">
						<img src="images/project-thumbnails/postit-board-thumbnail.png" class="img-fluid border" alt="PHP postitboard">
					</a>
				</div>
			</div>

			<hr class="mb-5 mt-5">
			
			<div class="row">
			<div class="col-lg-4">
				<a href="https://adnanbacic.dk/folders/php/politiker-tweet/" target="_blank" rel="noopener noreferrer">
					<img src="images/project-thumbnails/politiker-tweet-thumbnail.png" class="img-fluid border" alt="PHP politician twitter">
				</a>
			</div>
				<div class="col-lg-8">
					<h5 class="mt-0">Twitter API</h5>
					<p>In this assignment we had to work with an API. My group worked with the Twitter API. We made a websites centered around follow danish politics on Twitter. Here you can filter for specific party members and see the popular #dkpol hashtag on the page.</p>
					<p>
						<a class="link" href="https://adnanbacic.dk/folders/php/politiker-tweet/" target="_blank" rel="noopener noreferrer"><i class="fas fa-desktop mr-1"></i>See project</a>
					</p>
					<p>
						<a class="link" href="https://github.com/Adnan-Bacic/twitter-api" target="_blank" rel="noopener noreferrer"><i class="fab fa-github mr-1"></i>Github link</a>
					</p>
					<h6>Main technologies used:</h6>
						<ul>
							<li>
								<span class="badge badge-primary">HTML</span>
							</li>
							<li>
								<span class="badge badge-primary">Bootstrap</span>
							</li>
							<li>
								<span class="badge badge-primary">PHP</span>
							</li>
						</ul>
				</div>
			</div>

			<hr class="mb-5 mt-5">
			
			<div class="row">
				<div class="col-lg-8">
					<h5 class="mt-0">Learning platform</h5>
					<p>This was a exam project in which we had to make a website for a company. My group chose to make a website for Sunset.<br>
					This should serve as a online platform where they could teach their new employees the how to work there. Admin users could create categories and upload videos while non-admin users could only watch the videos. If they tried to acces the admin-only page it would tell them they cannot view that.<br>
					This website is also supposed to be for employees only so you cannot see it unless you are login in.</p>
					<p>If you wish to see how it looks like after logging in:<br>
					Username: user<br>
					Passowrd: user</p>
					<p>There arent any categories, but as mentioned, users who are administrators can add them.</p>
                    <p>
						<a class="link" href="https://adnanbacic.dk/folders/php/sunset/" target="_blank" rel="noopener noreferrer"><i class="fas fa-desktop mr-1"></i>See project</a>
					</p>
					<p>
						<a class="link" href="https://github.com/Adnan-Bacic/3sem-eksamen" target="_blank" rel="noopener noreferrer"><i class="fab fa-github mr-1"></i>Github link</a>
					</p>
					<h6>Main technologies used:</h6>
						<ul>
							<li>
								<span class="badge badge-primary">HTML</span>
							</li>
							<li>
								<span class="badge badge-primary">Bootsteap</span>
							</li>
							<li>
								<span class="badge badge-primary">PHP</span>
							</li>
							<li>
								<span class="badge badge-primary">SQL</span>
							</li>
						</ul>
				</div>
				<div class="col-lg-4">
					<a href="https://adnanbacic.dk/folders/php/sunset/" target="_blank" rel="noopener noreferrer">
						<img src="images/project-thumbnails/sunset-thumbnail.png" class="img-fluid border" alt="learning platform">
						<!--d-block to not be next to other image-->
						<img src="images/project-thumbnails/sunset-thumbnail2.png" class="img-fluid d-block mt-3 mb-3 border" alt="learning platform">
					</a>
				</div>
			</div>

			<hr class="mb-5 mt-5">

			<div class="row">
				<div class="col-lg-4">
					<a href="https://adnanbacic.dk/folders/php/oopphp_webshop/index.php" target="_blank" rel="noopener noreferrer">
						<img src="images/project-thumbnails/php-webshop-thumbnail.png" class="img-fluid border" alt="PHP webshop">
					</a>
				</div>
                <div class="col-lg-8">
					<h5 class="mt-0">PHP webshop</h5>
					<p>This is a demo of a PHP webshop. Users can add items to their wishlist and admins can create, edit and delete items.</p>
					<p>Users can also control if their wishlist is public or private.</p>
					<p>There is no option to actually buy, hence why it is a demo.</p>
					<p>
						<a class="link" href="https://adnanbacic.dk/folders/php/oopphp_webshop/" target="_blank" rel="noopener noreferrer"><i class="fas fa-desktop mr-1"></i>See project</a>
					</p>
					<p>
						<a class="link" href="https://github.com/Adnan-Bacic/php_object_oriented_webshop" target="_blank" rel="noopener noreferrer"><i class="fab fa-github mr-1"></i>Github link</a>
					</p>
					<h6>Main technologies used:</h6>
						<ul>
							<li>
								<span class="badge badge-primary">HTML</span>
							</li>
							<li>
								<span class="badge badge-primary">Bootstrap</span>
							</li>
							<li>
								<span class="badge badge-primary">Object oriented PHP</span>
							</li>
							<li>
								<span class="badge badge-primary">SQL</span>
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