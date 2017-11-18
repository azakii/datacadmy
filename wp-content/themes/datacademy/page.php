<?php
/*
 * Page Template File.
 */
get_header();
?>


<div class="clearfix"></div>
<section class="content">
<div class="titre_haut">
  <div class="titre_heut_2 wrapper container"> <?php the_title(); ?> </div>
</div>

<div class="container">
<div class="beadcrumb">
	<?php the_breadcrumb(); ?>
    </div>

<div class="row">
    <div class="col-md-8">
    <div class="team-page">
    	<h1><?php the_title(); ?></h1>
    	<div class="page-container">
        	<?php while (have_posts()) : the_post(); ?>


<?php
				    the_content();
				    wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'jobile'),
					'after' => '</div>',
				    ));
				    ?>
				
    
    			 
    <?php if (comments_open($post->ID)) { ?>
			   
	<?php comments_template(); ?>
			
    <?php } endwhile; ?>

        
        <!-- Insert to your webpage where you want to display the carousel -->
<div id="amazingcarousel-container-1">
    <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:960px;margin:0px auto 0px;">
        <div class="amazingcarousel-list-container">
            <ul class="amazingcarousel-list">
            <?php
			while ( have_rows('post_slider') ) : the_row();   ?>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<a href="<?php the_sub_field( "post_slider_img" ); ?>" title="20-large"  class="html5lightbox" data-group="amazingcarousel-1"><img src="<?php the_sub_field( "post_slider_img" ); ?>"  alt="<?php the_sub_field( "post_describtion" ); ?>" /></a>
</div>                    </div>
                </li>
                <?php  endwhile;  ?>
            </ul>
            <div class="amazingcarousel-prev"></div>
            <div class="amazingcarousel-next"></div>
        </div>
        <div class="amazingcarousel-nav"></div>
    </div>
</div>
<!-- End of body section HTML codes -->


        </div>
        </div>
        
        </div>
        
<?php get_sidebar(); ?>
        
    </div><!----col-md-8-->
   

</div>
</div>
</section>

	
<?php get_footer(); ?>