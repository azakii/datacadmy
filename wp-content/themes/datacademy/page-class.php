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
										<h1 class="post_title entry-title"><?php the_title(); ?></h1>
									
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
			<section class="no_padding content_wrap">
						<div class="container">
							<div class="row">
								<div class="sc_section bg_tint_none">
									<div class="sc_content content_wrap">
										<div class="sc_section bg_tint_none aligncenter">
											<h2 class="sc_title style_3"><?php the_field('page_title') ?></h2>
										</div>
										<div class="">
											<p><?php the_field('page_descrr') ?></p>
										</div>
									
									</div>
								</div>
								<div class="sc_line sc_line_style_solid margin_top_middle margin_bottom_none"></div>
							</div>
						</div>
			</section>
			
			</div>
		</div>
		

		
		<section class="no_padding grayContainer paddingSections">
						<div class="container">
							<div class="row">
								<div class="sc_section bg_tint_none">
									<div class="sc_content content_wrap">
										<div class="sc_section bg_tint_none aligncenter">
											<h2 class="sc_title style_3">OUR CLASSES</h2>
										</div>
										<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3 trainers_3 newClss">
										<div class="column-1_3 sc_column_item sc_column_item_2 even directionRtl">
											<?php
											while ( have_rows('fitness_describtion') ) : the_row();   ?>
												<span class="sc_icon sc_icon_shape_none sc_icon_bg_custom alignleft style_1">
													<img src="<?php the_sub_field('image_left_side') ?>" width="40" />
												</span>
												<div class="sc_section overflow_hidden bg_tint_none">
													<span class="sc_highlight style_6">
														<strong><?php the_sub_field('title_left_side') ?></strong>
													</span>
													<div class="">
														<p><?php the_sub_field('left_side_describtion') ?></p>
													</div>
												</div>
											<?php  endwhile;  ?>
												
												
												
											</div>
											
											<div class="column-1_3 sc_column_item sc_column_item_2 odd first">
												<figure class="sc_image  aligncenter sc_image_shape_square">
													<img src="<?php the_field('our_classes_image') ?>" alt="">
												</figure>
											</div>
											
											<div class="column-1_3 sc_column_item sc_column_item_2 even">
											<?php
											while ( have_rows('fitness_describtion_right_side') ) : the_row();   ?>
												<span class="sc_icon sc_icon_shape_none sc_icon_bg_custom alignleft style_1">
													<img src="<?php the_sub_field('image_right_side') ?>" width="40" />
												</span>
												<div class="sc_section overflow_hidden bg_tint_none">
													<span class="sc_highlight style_6">
														<strong><?php the_sub_field('title_right_side') ?></strong>
													</span>
													<div class="">
														<p><?php the_sub_field('right_side_describtion') ?></p>
													</div>
												</div>
												<?php  endwhile;  ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			</section>
		

		<section class="inner">
							<div class="container">
								<div class="row">
									<div class="sc_content content_wrap">
										<h2 class="sc_title style_1 sc_align_center">OUR CLASSES BLOG</h2>
										<h5 class="sc_undertitle style_1 sc_align_center">Our articles on healthy living and healthy eating</h5>
										<div class="sc_blogger layout_excerpt_2 template_excerpt_2 custom_isotope sc_blogger_vertical no_description">
											<div class="isotope_wrap" data-columns="2">
											<!-- Events Post -->
											<?php query_posts('cat=4'); ?>
												<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
												<div class="isotope_item isotope_item_excerpt isotope_item_excerpt_3 isotope_column_3">
													<div class="post_item post_item_excerpt post_format_quote post">
														<div class="post_featured">
															<div class="post_thumb" data-title="Quote post">
																<div class="post_content clearfix">
																	<div class="post_descr">
																	<div class="imageDiv"><?php the_post_thumbnail(); ?></div>
																	<div class="caption">	
																		<div class="blog-title">
																		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																		<p><?php the_field('article_short_describtion') ?></p>
																		</div>
																		<div class="readMore alignleft">
																		<a href="<?php the_permalink(); ?>">Read More</a>
																		</div>
																		</div>																	</div>
																</div>
															</div>
														</div>
														
													</div>
												</div>
												
												<?php endwhile; endif; ?>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</section>
<?php get_footer(); ?>
