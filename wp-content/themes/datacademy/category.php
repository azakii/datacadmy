<?php /* Template name: class */ ?>
<?php
/*
 * Page Template File.
 */
get_header( 'inner' );
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
										<h1 class="post_title entry-title"><?php the_category('title_li='); ?></h1>
									
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
								
								<div class="isotope_wrap " data-columns="3">
								
								        <?php if(have_posts()) : ?>
											<?php while(have_posts()) : the_post(); ?>

									<div class="isotope_item isotope_item_masonry isotope_item_masonry_3 isotope_column_3">
									
										<article class="post_item post_item_masonry post_item_masonry_3  post_format_standard odd">
											<div class="post_featured">
												<div class="post_thumb" data-image="images/Depositphotos_11198979_original.jpg" data-title="<?php the_title(); ?>">
													<a class="hover_icon hover_icon_link" href="<?php the_permalink(); ?>">
														<?php 
														 $data_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'large' );
																			if ($data_image[0] != '') {?>
																<img src="<?php echo esc_url($data_image[0]); ?>" width="100%" height="auto" alt="<?php the_title(); ?>" />
																<?php
																			}
														 ?>
														<span class="hover_img_bg"></span>
														<span class="hover_img_overlay"></span>
													</a>
												</div>
											</div>
											<div class="post_content isotope_item_content">
												<h4 class="post_title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h4>
												<div class="post_info">
													<span class="post_info_item post_info_posted">
														Posted
														<a class="post_info_date"><?php the_time('F j, Y'); ?></a>
													</span>
													<span class="post_info_item post_info_posted_by">
														by
														<a class="post_info_author"><?php the_author(); ?></a>
													</span>
												</div>
												<div class="post_descr">
													<?php the_excerpt(); ?>
													<a href="<?php the_permalink(); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_small">READ MORE</a>
												</div>
											</div>
										</article>
									</div>
									
								  <?php endwhile; ?>
								  <?php else : ?>
								  <p>No Posts</p>
								  <?php endif; ?>

								</div>
								


							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		




<?php get_footer(); ?>
