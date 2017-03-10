<?php 
$themePath = $this->baseurl."/templates/".$this->template;
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<meta charset="utf-8">


	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Core Meta Data -->
	<meta name="author" content="Innovison Lab">
	<meta name="description" content="Persona. Minimal resume and CV landing page.">
	<meta name="keywords" content="template,CV,resume,landing page,minimal,responsive,html5,css3,jquery">
	<?php
		$doc = JFactory::getDocument();

		unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
		// unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
		// unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
		// unset($doc->_scripts[JURI::root(true) . '/media/system/js/core.js']);
		// unset($doc->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
		// unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
		// unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
		// unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
		// unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
	?>
	<jdoc:include type="head" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo $themePath; ?>/favicon.png" type="image/png">

	<!-- Apple Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $themePath; ?>/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $themePath; ?>/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $themePath; ?>/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $themePath; ?>/apple-touch-icon-57x57-precomposed.png">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo $themePath; ?>/css/framework.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $themePath; ?>/css/<?php echo $this->params->get('home_layout')?>-style.css"/>
	
	<!-- Colors -->
	<!-- DEMO ONLY -->
	<?php $colorTheme = $this->params->get('color_theme');?>

	<link rel="stylesheet" type="text/css" href="<?php echo $themePath; ?>/css/colors/<?php echo ($colorTheme==-1)?'ruby-red':$colorTheme; ?>.css" title="<?php echo $colorTheme;?>" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo $themePath; ?>/css/colors/aqua-blue.css" title="blue" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo $themePath; ?>/css/colors/mint-green.css" title="green" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo $themePath; ?>/css/colors/rose-pink.css" title="pink" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo $themePath; ?>/css/colors/sunflower-yellow.css" title="yellow" media="screen">
	<!-- DEMO ONLY -->
	<style type="text/css">
		.hero {background: url("<?php echo $this->params->get('banner_image');?>") no-repeat top;}
	</style>

	<!-- Javascript -->
	<script src="<?php echo $themePath; ?>/js/modernizr.js"></script>
	<script src="<?php echo $themePath; ?>/js/jquery.js"></script>
	<?php echo $this->params->get('headTags');?>
</head>
<body>
	<!-- Begin Pageloader -->
	<?php if($this->params->get('enable_loader')=='1'){?>
	<div id="pageloader">
		<!-- Content -->
		<div class="pageloader-content">
			<img src="<?php echo $themePath; ?>/images/loading.gif" alt="">
			<h6>loading</h6>
		</div><!-- END Content -->
	</div><!-- END Pageloader -->
	<?php }?>
	<!-- Sticky Nav -->
	<header>
		<!-- Container -->
		<div class="container">
			<div class="row header-inner">

				<!-- Logo -->
				<div class="col-xs-6 col-lg-2">
					<img class="logo has-retina" src="<?php echo $this->params->get('main_logo');?>" alt="Persona">
				</div>

				<!-- Nav Button -->
				<div class="menu-button">
					<span class="before"></span>
					<span class="main"></span>
					<span class="after"></span>
				</div>

				<!-- Navigation -->
				<nav class="col-xs-12 col-lg-2 col-lg-offset-8">
					<jdoc:include type="modules" name="menu" style="xhtml" />
				</nav><!-- END Navigation -->
			</div>
		</div><!-- END Container -->
	</header><!-- END Sticky Nav -->

	<!-- Begin Hero -->
	<section class="hero">
		<div class="container">
			<!-- Hero Content -->
			<div class="row hero-content" data-0="opacity: 1; transform: translate3d(0px, 0px, 0px);" data-top-bottom="opacity: 0; transform: translate3d(0px, 300%, 0px);">
				<!-- Logo -->
				<div class="col-xs-12 col-lg-2">
					<img class="logo has-retina" src="<?php echo $this->params->get('main_logo');?>" alt="Persona">
				</div>

				<!-- Intro -->
				<div class="col-xs-10 col-sm-9 col-lg-7">
					<h2><?php echo $this->params->get('banner_heading');?></h2>
					<h1><?php echo $this->params->get('banner_desc');?></h1>
					<a href="#about" class="scroll-to"></a>
				</div>
			</div><!-- END Hero Content -->
		</div><!-- END Container -->
	</section><!-- END Hero -->
	

	<div class="container">
		<!-- About -->
		 <?php if($this->countModules('about') OR $this->countModules('skill')):?>
			<section id="about" class="padded-top">

				<!-- Content -->
				 <?php if($this->countModules('about')){?>
				<div class="row">
					<div class="col-xs-12 col-lg-8 col-lg-offset-2">
					  <jdoc:include type="modules" name="about" style="xhtml" />
					</div>
				</div>
				<?php }?>

				<?php if($this->countModules('skill')){?>
				<div class="row">
					<div class="col-xs-12 col-lg-8 col-lg-offset-2">
					  <jdoc:include type="modules" name="skill" style="xhtml" />
					</div>
				</div>
				<?php }?>
			</section>
		<?php endif;?><!-- END About -->

		<?php if($this->countModules('work')):?>
			<!-- Work -->
			<section id="work">
				<jdoc:include type="modules" name="work" style="none" />
			</section><!-- END Work -->
		<?php endif;?>

		<?php if($this->countModules('experience')):?>
			<!-- Experience -->
			<section id="experience">
				<jdoc:include type="modules" name="experience" style="none" />
			</section><!-- END Experience -->
		<?php endif;?>

		<?php if($this->countModules('clients')):?>
			<!-- Clients -->
			<section id="clients">
				<jdoc:include type="modules" name="clients" style="none" />
			</section><!-- END Clients -->
		<?php endif;?>
		
			<?php if($this->countModules('contact')):?>
			<!-- Contact -->
			<section id="contact">
				<jdoc:include type="modules" name="contact" style="none" />
			</section><!-- END Contact -->
		<?php endif;?>
	</div><!-- END Container -->

	<!-- Footer -->
	<footer class="padded">
		<!-- Container -->
		<div class="container">

			<!-- Social List -->
			<?php if($this->params->get("social")=='1'){?>
			<div class="row">
				<div class="social-list col-xs-12 col-lg-8 col-lg-offset-2">
					<?php 
					echo($this->params->get('twitter_url')!='')?'<a href="'.$this->params->get('twitter_url').'"><i class="social-icon-twitter"></i></a>':'';
					echo($this->params->get('facebook_url')!='')?'<a href="'.$this->params->get('facebook_url').'"><i class="social-icon-facebook"></i></a>':'';
					echo($this->params->get('google_plus_url')!='')?'<a href="'.$this->params->get('google_plus_url').'"><i class="social-icon-google"></i></a>':'';
					echo($this->params->get('youtube_url')!='')?'<a href="'.$this->params->get('youtube_url').'"><i class="social-icon-youtube"></i></a>':'';
					echo($this->params->get('dribbble_url')!='')?'<a href="'.$this->params->get('dribbble_url').'"><i class="social-icon-dribbble"></i></a>':'';
					echo($this->params->get('behance_url')!='')?'<a href="'.$this->params->get('behance_url').'"><i class="social-icon-behance"></i></a>':'';
					echo($this->params->get('instagram_url')!='')?'<a href="'.$this->params->get('instagram_url').'"><i class="social-icon-instagram"></i></a>':'';
					echo($this->params->get('linkedin_url')!='')?'<a href="'.$this->params->get('linkedin_url').'"><i class="social-icon-linkedin"></i></a>':'';
					?>
				</div>
			</div><!-- END Social List -->
			<?php }?>
			<!-- Copyright -->
			<div class="row">
				<div class="social-list col-xs-12 col-lg-8 col-lg-offset-2">
					<p class="copyright"><?php echo $this->params->get('copyright');?></p>
				</div>
			</div><!-- END Copyright -->
		</div><!-- END Container -->
	</footer><!-- END Footer -->

	<!-- DEMO ONLY -->
	<!-- Style Switch -->
	<!-- <div id="customizer">
		<div class="corner"><div class="cog"></div></div>
		<div id="options">
			<div class="options-segment clearfix">
				<h6>Layout Type</h6>
				<a id="default" class="customize-button" href="#">Default</a>
				<a class="customize-button" href="dark/index.html">Dark</a>
			</div>
			<div class="options-segment clearfix">
				<h6>Color Skins</h6>
				<ul class="color-scheme clearfix">
					<li class="red"><a href="#" data-rel="red" class="styleswitch"></a></li>
					<li class="blue"><a href="#" data-rel="blue" class="styleswitch"></a></li>
					<li class="pink"><a href="#" data-rel="pink" class="styleswitch"></a></li>
					<li class="green"><a href="#" data-rel="green" class="styleswitch"></a></li>
					<li class="yellow"><a href="#" data-rel="yellow" class="styleswitch"></a></li>
				</ul>
			</div>	
		</div>
	</div> --><!-- END Style Switch -->
	<!-- DEMO ONLY -->

	<!-- Javascript -->
	<script type="text/javascript">
	function resizeNow() {
        var browserwidth = $(window).width();
        var browserheight = $(window).height();
        $('.pageloader-content').css('right', ((browserwidth - $(".pageloader-content").width()) / 2)).css('top', ((browserheight - $(".pageloader-content").height()) / 2));
    }

    resizeNow();
    $(window).resize(resizeNow);
	</script>
	<script src="<?php echo $themePath; ?>/js/plugins.js"></script>
	<script src="<?php echo $themePath; ?>/js/main.js"></script>

	<!-- DEMO ONLY -->
	<script src="<?php echo $themePath; ?>/js/styleswitch.js"></script>
	<!-- DEMO ONLY -->
</body>
</html>
