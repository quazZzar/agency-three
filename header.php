<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   	 <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head><!--/head-->
<body>
	<div class="wrapper">
		<div class="menu-trigger">
			<span class="menu-bar"></span>
			<span class="menu-bar"></span>
			<span class="menu-bar"></span>
		</div>
		<div class="header <?php if(!is_front_page() || !class_exists('RevSliderFront') || !_go('slider_name')) echo 'normal'; ?>">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<a href="<?php echo home_url('/'); ?>">
							<div id="logo">
								<img src="<?php if(_go('site_logo') && _go('site_logo')!= "") : echo _go('site_logo'); else :  echo get_template_directory_uri().'/assets/images/ad-logo.png'; endif; ?>">
							</div>
						</a>
					</div>
					<div class="col-md-9">
						<div id="nav">
							<ul id="menu">
								<?php wp_nav_menu( 
									array(
										'title_li' => '',
										'theme_location' => 'main_menu',
										'container' => false,
										'items_wrap' => '%3$s',
										'fallback_cb' => 'wp_list_pages'
									)
								); ?>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
if(class_exists('RevSliderFront') && is_front_page() && _go('slider_name')) :
	putRevSlider(_go('slider_name'));
endif; 