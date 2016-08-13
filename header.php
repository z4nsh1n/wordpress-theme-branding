<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Test <?php  wp_title(); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="main">
		<div class="container">
			<header>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<?php 
					if(get_header_image() != ''){ 
					?>
						<?php echo "<img class='brand' src='" . get_header_image() . "'>" ?>
					<?php
					}else{ ?>
						<a class="navbar-brand" href="#"><?php bloginfo('name')?></a>

					<?php
					}
					?>

				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="#history">history</a></li>
					<li><a href="#services">services</a></li>
					<li><a href="#portfolio">portfolio</a></li>
					<li><a href="#pricing">pricing</a></li>
					<li><a href="#blog">blog</a></li>
					<li><a href="#contact">contact</a></li>
					<li><a><img src="<?php bloginfo('stylesheet_directory')?>/img/search-icon.png" alt=""></a></li>
				  </ul>
				</div>
			  </div>
			</nav>

			</header>
