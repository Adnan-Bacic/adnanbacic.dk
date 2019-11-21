<?php include 'includes/config.php' ?>

<!doctype html>
<html lang="en">
<head>
<!--Making sure not to index 404 page on google-->
<meta name="robots" content="noindex">

<?php include 'includes/head.php'; ?>
<style>
	.container-fluid{
		margin-top: 100px;
	}
</style>
</head>

<body>
	<div class="container-fluid" data-aos="fade-up">
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
				<button id="backbtn" class="btn btn-lg btn-primary mx-auto">Go back to the last page</button>
			</div>
		</div>
	</div>
	
	<?php include 'includes/scripts.php'; ?>
</body>
</html>