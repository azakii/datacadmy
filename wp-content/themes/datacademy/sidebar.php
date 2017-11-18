<?php
/*
 * Main Sidebar File.
 */
?>

<aside class="col-md-4">
    	<div class="contenu_aside">
		<h2><?php single_cat_title(); ?></h2>
        <?php if ( ! dynamic_sidebar( 'sidebar-links' )) : ?>
       
        <?php endif; ?>
        </div>


		<?php if ( ! dynamic_sidebar( 'sidebar-address' )) : ?>
       
        <?php endif; ?>


    	
    </aside><!----col-md-8-->