<?php
/*
 * Page Template File.
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
										<h1 class="post_title entry-title"><?php the_title(); ?></h1>
									
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

		
		
		<section class="content_wrap">
						<div class="container">
							<div class="row">
							<div class="column-2_3">
							<div class="sc_video_player alignleft margin_bottom_mini">
								<div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play inited" data-width="533" data-height="300" data-video="<iframe class=&quot;video_frame&quot; src=_https_/player.vimeo.com/video/1079713105782.html?autoplay=1%22 width=&quot;533&quot; height=&quot;300&quot; data-align=&quot;left&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;></iframe>" style="opacity: 1; width: 533px; height: 308px;" data-last-width="533">
									<?php the_post_thumbnail(array()); ?>
								</div>
								</div>
								<div class="">
									
									<?php while (have_posts()) : the_post(); ?>
									<?php
										the_content();
										wp_link_pages(array(
										'before' => '<div class="page-links">' . __('Pages:', 'jobile'),
										'after' => '</div>',
										));
									?>
									 
										
							<?php if ( !function_exists('dynamic_sidebar')
									|| !dynamic_sidebar(share) ) : ?>
								
								<p class="nowidget">No SideBar</p>
									<?php endif; // end primary widget area ?>
										
			

								</div>
							</div>
							<div class="column-1_3">
							<div class="sidebar widget_area bg_tint_light sidebar_style_light">
							<aside class="class_specs">
							
								
							<?php if ( !function_exists('dynamic_sidebar')
									|| !dynamic_sidebar(sidebar) ) : ?>
								
								<p class="nowidget">You Have not sideBar</p>
									<?php endif; // end primary widget area ?>
							</aside>
							<aside class="widget widget_tag_cloud">
						<h5 class="widget_title">Tags</h5>
						<div class="tagcloud">
						<?php the_tags(' ',' '); ?>
						</div>
					</aside>
							</div>
							</div>
							
							
							</div>
						</div>
						
						
					</section>
		
	<?php if (comments_open($post->ID)) { ?>
			   
	<?php comments_template(); ?>
			
    <?php } endwhile; ?>				

				
				
<?php get_footer(); ?>