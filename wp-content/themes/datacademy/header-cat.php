<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"/>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media />


</head>
<body class="cat">
<div class="body_wrap">
	<div class="page_wrap">
		<div class="top_panel_fixed_wrap"></div>
		<header class="top_panel_wrap bg_tint_dark bg_type_image menu_bg_color_1">
			<div class="menu_main_wrap logo_left">
				<div class="content_wrap clearfix">
					<div class="logo">
						<span class="logo_shape">
							<a href="<?php bloginfo('url'); ?>">
								<img src="<?php bloginfo('template_directory'); ?>/images/logo_dark.png" class="logo_main" alt="">
								<img src="<?php bloginfo('template_directory'); ?>/images/logo_dark.png" class="logo_fixed" alt="">
								<span class="logo_slogan"> </span>
							</a>
						</span>
					</div>
					<div class="search_wrap search_style_regular" title="Open/close search form">
						<a href="#" class="search_icon icon-search-1"> </a>
						<div class="search_form_wrap">
							<form role="search" method="get" class="search_form" action="<?php echo get_site_url(); ?>/">
								<button type="submit" id="button" class="search_submit icon-zoom-1" title="Start search"></button>
								<input type="text" class="search_field" <?php the_search_query(); ?> placeholder="" value="" name="s" title=""/>
							</form>
						</div>
						<div class="search_results widget_area bg_tint_light">
							<a class="search_results_close icon-cancel-1"> </a>
							<div class="search_results_content"></div>
						</div>
					</div>
					<a href="#" class="menu_main_responsive_button icon-menu-1"> </a>
					<nav role="navigation" class="menu_main_nav_area menu_color_bg_2">
						
						<?php
							wp_nav_menu( array(
								 'menu'              => 'main',
								 'theme_location'    => 'primary',
								 'depth'             => 2,
								 'container'         => '',
								 'container_class'   => 'menu_main_nav',
								 'container_id'      => '',
								 'menu_class'        => 'menu_main_nav',
								 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								 'walker'            => new wp_bootstrap_navwalker())
							 );
							 ?>
							 
						
					</nav>
				</div>
			</div>
		</header>