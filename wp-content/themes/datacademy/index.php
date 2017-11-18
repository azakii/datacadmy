<?php /* Template name: Home page */ ?>

<?php
/*
 * Page Template File.
 */
get_header();
?>




		<section id="mainslider_1" class="slider_wrap slider_fullwide slider_engine_revo slider_alias_homepage_slider_gym1 mainslider_1">
			<div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">

				<div id="rev_slider_1" class="rev_slider fullwidthabanner">
					<ul>
					<?php
					while ( have_rows('slider', 2) ) : the_row();   ?>
					
						<li data-transition="slideup,slidedown,slideright,slideleft,fade,fadefromright,fadefromleft,fadefromtop,fadefrombottom" data-slotamount="7"  data-randomtransition="on" data-masterspeed="300"  data-saveperformance="off" >
							<img src="<?php the_sub_field('slider_image') ?>"  alt="main-slider-1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							<div class="tp-caption lfl"
								data-x="-100"
								data-y="-180"
								data-speed="900"
								data-start="0"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
							</div>
							<!-- LAYER NR. 2 -->
							<div class="tp-caption lfr"
								data-x="870"
								data-y="-450"
								data-speed="900"
								data-start="500"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
							</div>
							<!-- LAYER NR. 3 -->
							<div class="tp-caption -main-title tp-fade tp-resizeme"
								data-x="340"
								data-y="280"
								data-speed="600"
								data-start="500"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
									<?php the_sub_field('slider_title') ?>
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption -main-text tp-fade tp-resizeme"
								data-x="340"
								data-y="500"
								data-speed="600"
								data-start="1500"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
									<?php the_sub_field('short_slider_desc') ?>
							</div>
							
							<!-- LAYER NR. 5 -->
							<div class="tp-caption black tp-fade tp-resizeme"
								data-x="340"
								data-y="650"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
									<a href='<?php the_sub_field('slider_link') ?>' class='tp-button lightgrey small'>GET STARTED</a>
							</div>
							<!-- LAYER NR. 9 -->
							<div class="tp-caption tp-fade"
								data-x="center" data-hoffset="10"
								data-y="center" data-voffset="365"
								data-speed="300"
								data-start="2000"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
								<div class="tp-layer-inner-rotation1 rs-pulse"  data-easing="Power3.easeInOut" data-speed="2" data-zoomstart="0.8" data-zoomend="0.9">
									<img src="<?php bloginfo('template_directory'); ?>/images/main-slider-el-3.png" alt="">
								</div>
							</div>
							<!-- LAYER NR. 10 -->
							<div class="tp-caption tp-fade tp-scrollbelowslider"
								data-x="center" data-hoffset="10"
								data-y="center" data-voffset="360"
								data-speed="300"
								data-start="2300"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								data-scrolloffset="1"
								>
								<div class="tp-layer-inner-rotation1 rs-pulse"  data-easing="Power3.easeInOut" data-speed="2" data-zoomstart="1" data-zoomend="1.2">
									<a href="#">
										<img src="<?php bloginfo('template_directory'); ?>/images/main-slider-el-4.png" alt="">
									</a>
								</div>
							</div>
						<!-- LAYER NR. 11 -->
							<div class="tp-caption tp-fade"
								data-x="1010"
								data-y="bottom" data-voffset="-170"
								data-speed="300"
								data-start="2600"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
									<img src="<?php bloginfo('template_directory'); ?>/images/main-slider-el-5.png" alt="">
							</div>
							<!-- LAYER NR. 12 -->
							<div class="tp-caption -main-text-sub tp-fade tp-resizeme"
								data-x="1060"
								data-y="725"
								data-speed="300"
								data-start="2800"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								>
									JOIN TODAY!
							</div>
						</li>
						<?php  endwhile;  ?>
						</ul>
				</div>
			</div>
		</section>

		<div class="page_content_wrap" >
			<div class="content">
				<article class="post_item post_item_single post_format_standard page">
					<div class="post_content">

						<section class="grey_section">
							<div class="container">
								<div class="row">
									<div class="sc_section bg_tint_none">
										<div class="sc_content content_wrap">
											
										<div class="sc_blogger homeLinks layout_square_3 template_portfolio  sc_blogger_horizontal">
											<div class="isotope_wrap" data-columns="3">
											<?php
											while ( have_rows('cms_page',2 ) ) : the_row();   ?>
												<div class="isotope_item isotope_item_square isotope_item_square_3 isotope_column_3">
													<div class="post_item post_item_square post_item_square_3 post_format_standard odd">
														<div class="post_content isotope_item_content ih-item colored circle effect1 left_to_right">
															<div class="spinner"></div>
															<div class="post_featured img">
																<a href="<?php the_sub_field('cms_link') ?>">
																	<img alt="<?php the_sub_field('icon_title') ?>" src="<?php the_sub_field('image_icon') ?>">
																</a>
															</div>
															<div class="post_info_wrap info">
																<div class="info-back">
																	<h4 class="post_title">
																	<a href="<?php the_sub_field('cms_link') ?>"><?php the_sub_field('icon_title') ?></a>
																	</h4>
																	<div class="post_descr">
																		<p>
																			<?php the_sub_field('cms_descr') ?>
																		</p>
																		<a href="<?php the_sub_field('cms_link') ?>">
																			<span class="hover_icon icon-plus-1"></span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<?php  endwhile;  ?>
												
												</div>
											</div>
									
											</div>
										
										</div>
									</div>
								</div>
							</div>
						</section>

						<section class="grayContainer">
							<div class="container">
								<div class="row">
									<div class="sc_content content_wrap">
										<h2 class="sc_title style_1 sc_align_center">OUR BLOG</h2>
										<h5 class="sc_undertitle style_1 sc_align_center">Our articles on healthy living and healthy eating</h5>
										<div class="sc_blogger layout_excerpt_2 template_excerpt_2 custom_isotope sc_blogger_vertical no_description">
											<div class="isotope_wrap" data-columns="2">
											<!-- Events Post -->
											<?php query_posts('cat=1&posts_per_page=3'); ?>
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
										<div class="sc_section bg_tint_none aligncenter">
											<a href="<?php bloginfo('url'); ?>/category/blog/" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color2 sc_button_size_large  sc_button_iconed inherit">VIEW ALL POSTS</a>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section class="no_padding sc_parallax bg_tint_dark" data-parallax-speed="0.3" data-parallax-x-pos="50%" data-parallax-y-pos="50%">
							<div class="container sc_parallax_content bg_image_12">
								<div class="row">
									<div class="sc_section bg_tint_none">
										<div class="sc_section_overlay texture_bg_1">
											<div class="sc_section_content">
												<div class="sc_content content_wrap">
													<div class="sc_section bg_tint_none aligncenter">
													<?php
													while ( have_rows('black_strip',2 ) ) : the_row();   ?>

														<h1 class="sc_title style_1"><?php the_sub_field('strip_title') ?></h1>
														<h4 class="sc_undertitle style_2"><?php the_sub_field('strip_description') ?></h4>
														<a href="<?php the_sub_field('strip_link_url') ?>"  class="sc_button sc_button_square sc_button_style_border sc_button_bg_color3 sc_button_size_large"><?php the_sub_field('strip_link_title') ?></a>
														<?php  endwhile;  ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						
						<section class="">
							<div class="container">
								<div class="row">
									<div class="sc_section bg_tint_none">
										<div class="sc_content content_wrap">
											<div class="sc_section bg_tint_none aligncenter">
												<h2 class="sc_title style_1">WHAT OUR CLIENTS SAY ABOUT US</h2>
												<h5 class="sc_undertitle style_3"></h5>
											</div>
											<div class="sc_testimonials sc_slider_swiper_off swiper-slider-container-off sc_slider_nopagination sc_slider_controls" data-interval="7000">
												<?php
												while ( have_rows('home_client_comments',2 ) ) : the_row();   ?>
												
												<div class="sc_testimonials_grid columns_2">
													<div class="sc_testimonial_item_grid_wrapper">
														<div class="sc_testimonial_item">
															<div class="sc_testimonial_avatar_wrapper">
																<div class="sc_testimonial_avatar">
																	<img alt="testimonial-3.jpg" src="<?php the_sub_field('client_image') ?>">
																</div>
															</div>
															<div class="sc_testimonial_content_wrapper">
																<div class="sc_testimonial_author">
																	<a href="#/"><?php the_sub_field('client_name') ?></a>
																</div>
																<div class="sc_testimonial_content">
																	<p><?php the_sub_field('client_comment') ?></p>
																	
																</div>
															</div>
														</div>
													</div>
												</div>
												<?php  endwhile;  ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

<?php get_footer(); ?>