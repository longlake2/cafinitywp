<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CafinityWP
 */

?>

	</div><!-- #content -->

<!--Footer-->
<footer class="page-footer light-blue accent-4 center-on-small-only">
       <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-lg-3 col-md-6 ml-auto">

                    <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
            <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

            <!--Second column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                       <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
          <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cafinitywp' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'cafinitywp' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cafinitywp' ), 'cafinitywp', '<a href="http://mikeandshar.com">longlake</a>' );
			?>
		</div><!-- .site-info -->
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
<?php wp_footer(); ?>

</body>
</html>