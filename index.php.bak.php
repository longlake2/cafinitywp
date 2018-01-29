<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CafinityWP
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
	<!--Main layout-->
	<div class="container">
	    <div class="row">
	        <!--Main column-->
	  

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
	   
	         </div><!--.row-->  
	    

<?php
get_sidebar();
get_footer();
