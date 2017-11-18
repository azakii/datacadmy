<?php /* Template name: landing page */ ?>
<?php
/*
 * Page Template File.
 */
get_header(landing);
?>


    
<!-- start of banner -->
<div id="banner" class="clearfix" style="background:url('<?php the_field('landingbg') ?>') no-repeat top center">
	<div class="container">
    	<div class="row">
        	<div class="banner-inner jw-animate-gen clearfix"  data-gen-offset="100%" data-gen="fadeInDown">
                <div class="banner-inner-right">
                	<h2> 50% Discount for New Members </h2>
                    <h1> JOIN DAT ACADEMY </h1>
            		<a href="#form-site" class="btn btn-banner">JOIN NOW! <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- end of banner -->

<!-- start of services -->
<div id="services" class="clearfix">
	<div class="container">
    	<div class="row">
        	<div class="services-top text-center jw-animate-gen clearfix noOpacity" data-gen-offset="100%" data-gen="fadeInDown">
            	<h1> Fitness for Life - <span class="bold">DAT Academy </span> </h1>
            </div>
            <div class="services-inner clearfix">
            	<?php
				while ( have_rows('fitness_icons') ) : the_row();   ?>

				<div class="service-box jw-animate-gen noOpacity col-lg-4 col-md-4 col-sm-4 text-center" data-gen-offset="90%" data-gen="fadeIn">
                	<img src="<?php the_sub_field('fitness_img_icon') ?>" alt="DAT Academy icon" />
                    <a class="span3"> <?php the_sub_field('fitness_title') ?> </a>
                    <p> <?php the_sub_field('fitness_descr') ?> </p> 
                </div>
				
				<?php  endwhile;  ?>
                
            </div>
        </div>
    </div>
</div>
<!-- end of services -->

<!-- start of form section -->
<div id="form-site" class="clearfix">
	<div class="container">
    	<div class="row">
        	<div class="form-content  col-lg-7 col-md-6 col-sm-6">
            	<h1> Benefits - <span class="bold">Join Today! </span> </h1>
                <ul>
                	<li class="digit1 jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeInDown"> <?php the_field('benefits_to_join1') ?> </li>
                    <li class="digit2 jw-animate-gen noOpacity" data-gen-offset="88%" data-gen="fadeInDown"> <?php the_field('benefits_to_join2') ?> </li>
                    <li class="digit3 jw-animate-gen noOpacity" data-gen-offset="86%" data-gen="fadeInDown"> <?php the_field('benefits_to_join3') ?> </li>
                    <li class="digit4 jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInDown"> <?php the_field('benefits_to_join4') ?> </li>
                </ul>
            </div>
            <div class="form-inner col-lg-4 col-md-5 col-sm-5">
            	<img src="<?php echo get_template_directory_uri(); ?>/landing/images/formbg.png" alt="DAT Academy icon" />
            	<div id="contact" class="registerForm">
                    <?php the_field('contact_dynamic_form') ?>
                </div>
            </div>
            <div class="form-img jw-animate-gen noOpacity col-lg-1 col-md-1 col-sm-1" data-gen-offset="50%" data-gen="fadeIn">
            	<img src="<?php echo get_template_directory_uri(); ?>/landing/images/form-img.png" alt="DAT Academy icon" />
            </div>
        </div>
    </div>
</div>
<!-- end of form section --> 

<!-- start of video section -->
<div id="video-site" class="clearfix">
	<div class="container">
    	<div class="row">
        	<div class="video-content col-lg-5 col-md-6 col-sm-6 jw-animate-gen noOpacity" data-gen-offset="70%" data-gen="fadeInLeft">
            	<h1> Watch our Gym <br> <span class="bold"> Trainers Video </span>  </h1>
                <p> <?php the_field('video_descr') ?> </p>
                <a href="#form-site" class="btn btn-video">JOIN US NOW! </a>
            </div>
            <div class="video col-lg-6 col-md-6 col-sm-6">
            	  <?php the_field('video_iframe') ?>
            </div>
        </div>
    </div>
</div>
<!-- start of membership section -->

<!-- start of membership section -->
<div id="membership-package" class="clearfix">
	<div class="container">
    	<div class="row"> 
        	<div class="membership-top text-center jw-animate-gen noOpacity" data-gen-offset="100%" data-gen="fadeInDown">
            	<h1> Membership <span class="bold"> Packages </span> </h1>
            </div>
			<?php
			while ( have_rows('membership_packages') ) : the_row();   ?>
            <div class="membership-box col-lg-4 col-md-4 col-sm-4 text-center jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeIn">
            	<div class="membership-box-inner">
                    <h2 class="greenbg"><?php the_sub_field('membership_packages_price') ?> </h2>
                    <h3> <?php the_sub_field('membership_packages_contract') ?> </h3>
                    <p> <?php the_sub_field('membership_packages_descr') ?> </p>
                    <a href="#form-site" class="btn form-btn"> JOIN NOW! </a>
                </div>
            </div>
            <?php  endwhile;  ?>
			
        </div>
    </div>
</div>
<!-- end of membership section -->

<!-- start of footerTop section -->
<div id="footerTop" class="clearfix">
	<div class="container">
    	<div class="row">
	
			<div class="footerBox col-lg-12 col-md-12 col-sm-12 clearfix">
            	<h2> Contact Us </h2>
                <ul class="contact">
				<?php
				while ( have_rows('landing_contact_us') ) : the_row();   ?>
                	<li><h3><?php the_sub_field('landing_contact_title') ?></h3><?php the_sub_field('landing_contact_descr') ?></li>
                <?php  endwhile;  ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end of footerTop section -->



<?php get_footer(landing); ?>
