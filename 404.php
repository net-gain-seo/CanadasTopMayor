<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="mast page-mast">
   <?php
       if( has_post_thumbnail() ) {
           the_post_thumbnail();
       } else {
           echo '<img src="'.home_url().'/wp-content/uploads/2019/01/SubpageHoldingHands.jpg" />';
       }
       $mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
       $mast_description = get_post_meta( get_the_ID(), 'mast_description', true );
   ?>
   <div class="container mast-overlay">
       <?php
              echo '<h1 class="titleText">404 Page Not Found</h1>';
              echo '<p>#Canada’sTopMayorAward</p>';
       ?>
   </div>
</div>
<div class="container">
    <div class="row">
      <div class="col col-12 col-lg-9">
          <p>Oops, we’re sorry. We can’t find the page you’re looking for. </p>
          <p>The link you followed may be broken or the page may have been removed.</p>
          <p>Back to <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage</a></p>
			</div><!-- .page-wrapper -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
