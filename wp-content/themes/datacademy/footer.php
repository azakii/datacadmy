

						<section class="no_padding bg_image_13">
							<div class="container">
								<div class="row">
									<div class="sc_section overlay_padding_off bg_tint_none">
										<div class="sc_section_overlay">
											<section class="red_opacity_section">
												<div class="container">
													<div class="sc_section_content">
														<div class="sc_content content_wrap">
															<div class="sc_section bg_tint_dark aligncenter">
																<div class="sc_contact_form_item sc_contact_form_field label_over">
																	<h3>STAY UPDATED ABOUT UPCOMING EVENTS</h3>
																	<?php echo do_shortcode('[contact-form-7 id="4" title="newsletter"]'); ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
									<div class="sc_section overlay_padding_off bg_tint_none">
										<div class="sc_section_overlay">
											<section class="grey_opacity_section">
												<div class="container">
													<div class="sc_section_content">
														<div class="sc_content content_wrap">
															<div class="sc_section bg_tint_dark aligncenter">
																<h2 class="sc_title style_1">GET IN TOUCH</h2>
																<h5 class="sc_undertitle style_4">Have a question for us?</h5>
															</div>
														</div>
														<div class="sc_content content_wrap margin_top_middle">
															<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 custom_columns">
																<div class="column-1_2 sc_column_item sc_column_item_1 odd first">
																	<?php
																	while ( have_rows('footer_describtion' , 'option') ) : the_row();   ?>	
																	<div  class="bg_tint_dark">																	
																		<div class="column-1_2">
																			<p>
																				<strong><?php the_sub_field('footer_title_row') ?></strong>
																			</p>
																		</div>
																		<div class="column-1_2">
																			<p><?php the_sub_field('footer_describtion_row') ?></p>
																		</div>
																	</div>
																	<?php endwhile;  ?>
																</div>
																<div class="column-1_2 sc_column_item sc_column_item_2 bg_tint_dark even">
																	<div class="sc_contact_form sc_contact_form_standard contact_form_1">
																	    <form class="contact_1" method="post">
																		<?php echo do_shortcode('[contact-form-7 id="31" title="contact form"]'); ?>
																	    </form>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</div>
						</section>

					</div>
				</article>
			</div>
		</div>
		<div class="copyright_wrap">
			<div class="content_wrap with_menu">
				<div class="menu_foot_wrapper">
					<div class="menu">
					<div class="copyright_text">
					<p>
						<span><a href="#">Datacademy</a> © 2017 ALL RIGHTS RESERVED</span>
					</p>
				</div>
						
					</div>
					<div class="social">
						<div class="sc_socials sc_socials_size_small">
							<div class="sc_socials_item">
								<a href="<?php the_field('facebook_link' , 'option') ?>" target="_blank" class="social_icons social_facebook icons">
									<span class="icon-facebook"> </span>
								</a>
							</div>
							<div class="sc_socials_item">
								<a href="<?php the_field('twitter_link' , 'option') ?>" target="_blank" class="social_icons social_twitter icons">
									<span class="icon-twitter"> </span>
								</a>
							</div>
							<div class="sc_socials_item">
								<a href="<?php the_field('gplus' , 'option') ?>" target="_blank" class="social_icons social_gplus icons">
									<span class="icon-gplus"> </span>
								</a>
							</div>
							<div class="sc_socials_item">
								<a href="<?php the_field('youtube' , 'option') ?>" target="_blank" class="social_icons social_youtube icons">
									<span class="icon-youtube"> </span>
								</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<a href="#" class="scroll_to_top icon-up-dir" title="Scroll to top"></a>

	<div class="preloader">
	    <div class="preloader_image"></div>
	</div>
</div>



<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->

	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.3.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/revslider/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/custom/_main.js'></script>

	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/superfish.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.slidemenu.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/custom/core.utils.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/custom/core.init.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/custom/shortcodes.js'></script>
<?php if(is_page('membership')){
           echo ('<script type="text/javascript" src="'. get_stylesheet_directory_uri() . '/js/vendor/core.min.js"> </script>'); 
           echo ('<script type="text/javascript" src="'. get_stylesheet_directory_uri() . '/js/vendor/widget.min.js"> </script>'); 
           echo ('<script type="text/javascript" src="'. get_stylesheet_directory_uri() . '/js/vendor/accordion.min.js"> </script>'); 
		   
        } ?>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vendor/hover/jquery.hoverdir.js"></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.isotope.min.js'></script>
	
		
 

</body>
</html>