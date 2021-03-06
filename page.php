<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CafinityWP
 */

	get_header(); ?>

	<main id="main" class="site-main" role="main">
	<!--Main layout-->
	<div class="container">
	    <div class="row col-md-8">
	        <!--Main column-->
	        <?php echo "FARTZ" ?>

	            <?php
	            if ( have_posts() ) {
	            while ( have_posts() ) {
	            the_post();
	            ?>
	            <!--Post-->
	            <div class="post-wrapper">
	                <!--Post data-->
	                <a href="<?php echo get_permalink() ?>"><h1 class="h1-responsive"><?php the_title(); ?></h1></a>
	                <h5>Written by <a href=""><?php the_author(); ?></a>, <?php echo get_the_date(); ?></h5>
	                <br>
	                <!--Featured image -->
	                <div class="view overlay hm-white-light z-depth-1-half">
	                    <?php the_post_thumbnail( 'full', array( 'class'=> 'img-fluid z-depth-2')); ?>
	                    <div class="mask">
	                    </div>
	                </div>
	                <br>
	                <!--Post excerpt-->
	                <p><?php the_excerpt(); ?></p>
	                <!--"Read more" button-->
	                <a href="<?php echo get_permalink() ?>"><button class="btn btn-primary">Read more</button></a>
	            </div>
	            <!--/.Post-->
	            <hr>
	            <?php
	            } // end while
	            } // end if
	            ?>
	   
	           
	    </div>

	<!--/.Main layout-->
	</main>

<?php
get_sidebar();
get_footer();
