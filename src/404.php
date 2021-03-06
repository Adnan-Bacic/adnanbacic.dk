<?php include 'includes/config.php' ?>

<!doctype html>
<html lang="en">
<head>
<!--Making sure not to index 404 page on google-->
<meta name="robots" content="noindex">

<?php include 'includes/head.php'; ?>
<style>
	/*
	Pushing content down only on 404 page
	*/
	.container-fluid{
		margin-top: 50px;
	}
	/*
	Removing full width on btn only on 404 page
	*/
	.btn-main{
		width: auto;
	}

	/*mobile padding on btn*/
	@media screen and (max-width: 480px) {
		.container-fluid{
			margin-bottom: 50px;
		}
	}
</style>
</head>

<body>
	<section class="container-fluid" data-aos="fade-up">
		<main role="main">
		<div class="row">
			<div class="col-12 text-center" title="404">
				<i class="far fa-file-code customFA"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-12 mt-5 mb-5">
				<h1 class="text-center">404 <br> Page not found</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<button id="backbtn" class="btn-main">Go to last page</button>
			</div>
			<div class="col-12 text-center">
				<a href="index.php"><button class="btn-main">Go to frontpage</button></a>
			</div>
		</div>
		</main>
	</section>
	
	<?php include 'includes/scripts.php'; ?>
</body>
</html>