<?php /* Template name: membership */ ?>
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
								<div class="post_featured bg_tint_dark cover removeOverlay">
									<div class="post_thumb" data-image="<?php the_field('inner_pages_header_img') ?>" data-title="<?php the_field('inner_header_title') ?>">
										<img alt="Martial Arts" src="<?php the_field('inner_pages_header_img') ?>">
									</div>
									<div class="post_thumb_hover">
									<div class="content_wrap">
									<div class="percentDes">
										<h1 class="post_title entry-title"><?php the_field('inner_header_title') ?></h1>
										<h3><?php the_field('inner_header_descr') ?></h3>
										
										<div class="post_button">
											<a href="<?php the_field('inner_header_link') ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_medium">Become a member</a>
										</div>
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
			<div class="sc_content content_wrap margin_top_middle">
				<h2 class="sc_title style_1">PRICING TABLE</h2>
				<h5 class="sc_undertitle style_3 aligncenter">Simple Clear, Flexable.</h5>
				</div>
				
			
				<div class="isotope_wrap " data-columns="2">
							<?php
							while ( have_rows('table_price') ) : the_row();   ?>
									<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_3 isotope_column_3">
									<div class="sc_column_item sc_column_item_1 odd first">
														<div class="sc_price_block sc_price_block_style_1">
															<div class="sc_price_block_title"><?php the_sub_field('pricing_head_title') ?></div>
															<div class="sc_price_block_money">
																<div class="sc_price_block_icon inherit"></div>
																<div class="sc_price">
																	<span class="sc_price_currency">AED</span>
																	<span class="sc_price_money">
																		<?php the_sub_field('price_money') ?>
																	</span>
																	<span class="sc_price_info">
																		<span class="sc_price_period"><?php the_sub_field('type_of_plan') ?></span>
																	</span>
																</div>
															</div>
															
															<div class="sc_price_block_link">
																<a href="<?php the_sub_field('subscribe_link') ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_small">subscribe NOW!</a>
															</div>
														</div>
													</div>
									</div>

									<?php  endwhile;  ?>
				
			</div>
		</div>
		
<div class="no_padding grayContainer paddingSections">

										<div id="sc_tab_faq" class="sc_tabs_content faq even">
											<div class="sc_content content_wrap margin_top_middle">
												<h2 class="sc_title style_1">FREQUENTLY ASKED QUESTIONS</h2>
												<h5 class="sc_undertitle style_3 aligncenter">General</h5>
												<div class="sc_accordion sc_accordion_style_2" data-active="0">
													<?php
													while ( have_rows('accordion') ) : the_row();   ?>
													
													<div class="sc_accordion_item">
														<h5 class="sc_accordion_title">
														<span class="sc_accordion_icon sc_accordion_icon_closed icon-plus-1"> </span>
														<span class="sc_accordion_icon sc_accordion_icon_opened icon-minus-1"> </span>
														<?php the_sub_field('acctitle') ?>
														</h5>
														<div class="sc_accordion_content">
															<div class="">
																<p><?php the_sub_field('acc_describtion') ?></p>
															</div>
														</div>
													</div>
													<?php  endwhile;  ?>
													
													
													</div>
											</div>
										</div>



	</div>
<?php get_footer(); ?>
