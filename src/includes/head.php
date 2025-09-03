	<?php
	//Declaring variables for meta tags
	$title = 'Adnan Bacic - Frontend developer';
	$description = 'Adnan Bacic - Frontend developer from Denmark.';
	$image = 'https://adnanbacic.dk/' . 'images/social-media-thumbnail-1200x630.png';
	$name = 'Adnan Bacic';
	$url = 'https://adnanbacic.dk/';
	?>
	<!--Meta general-->
	<title><?php echo $title; ?></title>
	<link rel="icon" href="images/favicon.ico"> <!--https://www.iconfinder.com/icons/367821/code_coding_html_html5_markup_programming_web_icon-->
	
	<!--Meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="author" content="<?php echo $name; ?>">
	<meta name="robots" content="index, follow">

	<!--Opengraph Facebook meta-->
	<meta property="og:title" content="<?php echo $title; ?>">
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta property="og:image" content="<?php echo $image; ?>">
	<meta property="og:url" content="<?php echo $url; ?>">
	<meta property="og:site_name" content="<?php echo $name; ?>">

	<meta property="og:type" content="website">

	<!--Twitter-->
	<meta name="twitter:card" content="summary">

	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="<?php echo $description; ?>">
	<meta name="twitter:image" content="<?php echo $image; ?>">
		<meta name="twitter:image:alt" content="Website thumbnail">
	<meta name="twitter:site" content="<?php echo $url; ?>">
	<meta name="twitter:creator" content="<?php echo $name; ?>">

	<!--Google-->
	<meta name="google-site-verification" content="QzDAIEUJvbxNGip5ZxurWJWxic5gtQekOuYOa9mTvbY" />
	
	<!--EXTERNAL LINKS-->

	<!--Google font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">

	<!--Icon for scroll-to-top-btn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

	<!--animate scroll
	https://michalsnik.github.io/aos/
	https://github.com/michalsnik/aos
	-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!--CSS after external css-->
	<link rel="stylesheet" href="css/stylesheet.css">