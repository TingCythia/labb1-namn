<?php
/** 
* Change the settings in the header.php file
*
* @package labb1-namn
*/
?>

<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Website Title</title>
      <meta name="description" content="Website description">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css"/>
      <?php wp_head();?>
    </head>


<body <?php body_class(); ?>>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="home.php">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Search efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>


        
		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<<li class="current-menu-item" style="background-color: rgba(0, 0, 0, 0);">
                            <a href="home.php">Home</a>
							</li>
							<li>
								<a href="blogg.html">Blog</a>
							</li>
							<li>
								<a href="single.php">Single 1</a>
							</li>
							<li>
								<a href="undersida2.html">Single 2</a>
							</li>
							<li>
								<a href="undersida3.html">Single 3</a>
							</li>
							<li>
								<a href="undersida4.html">Single 4</a>
							</li>
							<li>
								<a href="kontakt.html">Contact </a>
							</li>

						</ul>
					</div>
				</div>
			</div> 
		</nav>
    </header>
