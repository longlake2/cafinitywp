<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CafinityWP
 */
?>
    <!--Sidebar-->
	<div class="col-md-4">
	    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	    <?php dynamic_sidebar( 'sidebar' ); ?>
	    <?php endif; ?>
	</div>
	<!--/.Sidebar-->

	</div><!--  .row -->
</div><!--  .container -->


