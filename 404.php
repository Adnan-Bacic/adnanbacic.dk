<!doctype html>
<html lang="en">
<head>
<!--Making sure not to index 404 page on google-->
<meta name="robots" content="noindex">

<?php include 'includes/head.php'; ?>
<style>
	.container-fluid{
		background: white;
		margin-top: 200px;
	}
</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<h2 class="mx-auto col-xl-6 text-center">
				<div class="mt-5" id="msg"></div>
			</h2>
		</div>
		
		<div class="row">
			<h1 class="mx-auto text-center">Page not found</h1>
		</div>
		<div class="row">
			<button id="backbtn" class="btn btn-primary mx-auto">Go back to the last page</button>
		</div>
	</div>
	
	<?php include 'includes/scripts.php'; ?>
</body>
</html>