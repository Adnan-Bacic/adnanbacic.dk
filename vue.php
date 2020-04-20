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
					<i class="fab fa-vuejs customFA align-self-start mb-5" title="Vue"></i>
				</div>
			</div>

			<div class="row">
				<h1 class="col-12 mt-3">Vue</h1>
			</div>

			<hr class="mb-5 mt-5">

			<div class="media">
				<div class="media-body mr-3 m-0">
					<h5 class="mt-0">Ninja smoothies CRUD</h5>
					<p>This is a Vue and Firebase CRUD project. It is possible to Create, Read, Update and Delete smoothies.
                        <br>All the data of the smoothies is stored in firebase and displayed with Vue</p>
					<p>
						<a class="link" href="https://adnanbacic.dk/folders/vue/vue_ninja_smoothies/#/" target="_blank">Link</a>
					</p>
					<h6>Main technologies used:</h6>
						<ul>
							<li>HTML</li>
                            <li>Vue</li>
                            <li>Firebase</li>
                            <li>Materialize css</li>
						</ul>
				</div>
				<a href="https://adnanbacic.dk/folders/vue/vue_ninja_smoothies/#/" target="_blank">
					<img src="images/ninja-smoothies-thumbnail.png" width="300" height="200" class="align-self-start mr-3 border" alt="ninja smoothies">
				</a>
			</div>

            <hr class="mb-5 mt-5">
            
            <div class="media">
            <a href="https://adnanbacic.dk/folders/vue/vue_products_chat/#/" target="_blank">
					<img src="images/products-chat-thumbnail1.png" width="300" height="200" class="align-self-start mr-3 border" alt="Learning platform">
					<!--d-block to not be next to other image-->
					<img src="images/products-chat-thumbnail2.png" width="300" height="200" class="align-self-start d-block mt-3 mb-3 mr-3 border" alt="Learning platform">
				</a>
				<div class="media-body mr-3 m-0">
					<h5 class="mt-0">Products CRUD and live chat</h5>
					<p>In this project it is possible to CRUD aswell as having a live chat, which can only be entered if you first enter a name from the products page.
					<p>
						<a class="link" href="https://adnanbacic.dk/folders/vue/vue_products_chat/#/" target="_blank">Link</a>
					</p>
					<h6>Main technologies used:</h6>
						<ul>
							<li>HTML</li>
                            <li>Vue</li>
                            <li>Firebase</li>
                            <li>Bootstrap</li>
						</ul>
				</div>
            </div>

            <hr class="mb-5 mt-5">
            
		</div>
		<main role="main">
	</section>

	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>
</body>
</html>