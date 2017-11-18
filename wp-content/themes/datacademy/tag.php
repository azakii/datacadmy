<?php
/*
 * Search Template File.
 */
get_header(inner);
?>

		<div class="page_content_wrap">
			<div class="content">

				<article class="post_item post_item_single_courses post_featured_center has-post-thumbnail">
					

					<section class="no_padding">
						<div class="container">
							<div class="row">
								<div class="post_featured bg_tint_dark cover">
									<div class="post_thumb" data-image="images/crossfit.jpg" data-title="crossfit">
										<img alt="Martial Arts" src="<?php bloginfo('template_directory'); ?>/images/crossfit.jpg">
									</div>
									<div class="post_thumb_hover">
									<div class="content_wrap">
									<div class="post_icon icon-weightlifter2"></div>
										<h1 class="post_title entry-title"><?php the_search_query(); ?></h1>
									
										<div class="post_button">
											<a href="<?php bloginfo('url'); ?>/contact" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_medium">SUBSCRIBE</a>
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					

				</article>

			</div>
		</div>
		
		<div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
			<div class="breadcrumbs">
				<div class="content_wrap textleft">
					<?php the_breadcrumb(); ?>
				</div>
			</div>
		</div>
		
		<div class="page_content_wrap">
			<div class="content_wrap">
				<div class="content">
					<section class="no_padding">
						<div class="container">
							<div class="row">

							
						<div class="page-header grayContainer text-center padding">
							<div class="pagetitle text-center">
								<h3 class="page-title"><b> <?php echo $wp_query->found_posts; ?>
									<?php _e('SEARCH RESULTS', 'locale'); ?>: </b></h3>
								<h4><?php the_search_query(); ?></h4>
							</div>
						</div><!-- .page-header -->
						

						<?php while (have_posts()) {
                                the_post(); ?>
								<article class="post_item post_item_excerpt post_featured_center post">
									
									<h3 class="post_title">
									<a href="<?php the_permalink(); ?>">
										<span class="post_icon icon-pitch"></span>
										<span class="post_title_text"><?php the_title(); ?></span>
									</a>
									</h3>
									<div class="post_content clearfix">
										<div class="post_descr">
											<?php the_excerpt(); ?>
											<a href="<?php the_permalink(); ?>" class="sc_button sc_button_square sc_button_style_border sc_button_bg_color3 sc_button_size_small">READ MORE</a>
										</div>
									</div>
								</article>
								<?php } ?>
							</div>
						</div>
					</section>
				</div>
				
			</div>
		</div>
		
		    

<?php get_footer(); ?>
