<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/x-icon"  href="<?php echo url('assets/images/favicon.ico') ?>">
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <?php echo css('assets/styles/normalize.css') ?>
  <?php echo css('assets/fonts/PT-Sans/stylesheet.css') ?>
  <?php echo css('assets/styles/styles.css') ?>
  	<!--[if IE]>
	   <?php echo css('assets/styles/ie.css') ?>
	<![endif]-->

	<!--[if IE]>
		<?php echo js('assets/javascript/html5shiv.js') ?>
	<![endif]-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <?php echo js('assets/javascript/responsiveslides.min.js') ?>
  <?php echo js('assets/javascript/jquery.fitvids.min.js') ?>
  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-39599242-1', 'beccin.co.uk');
	  ga('send', 'pageview');
  </script>
</head>

<body>
  <header class="site">
  	<div class="grid">
	  	<div class="grid-unit-a">
	  		<div class="logo">
	   		<a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" alt="Logo" class=""/>
</a>
	  		</div>
	  	</div>
	  	<div class="grid-unit-b">
	  	<?php snippet('primary-nav') ?>
	  	</div>
  	</div>
    
  </header>
