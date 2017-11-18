<?php /* Template name: Schedule */ ?>
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
									<div class="post_thumb" data-image="<?php the_field('inner_pages_header_img') ?>" data-title="<?php the_field('inner_header_title') ?>">
										<img alt="Martial Arts" src="<?php the_field('inner_pages_header_img') ?>">
									</div>
									<div class="post_thumb_hover">
									<div class="content_wrap">
										<h1 class="post_title entry-title"><?php the_field('inner_header_title') ?></h1>
										<h3><?php the_field('inner_header_descr') ?></h3>
										
										<div class="post_button">
											<a href="<?php the_field('inner_header_link') ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_medium">Join Now</a>
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
				<?php the_field('schedule_content_editor') ?>
			</div>
		</div>

	
<?php get_footer(); ?>
