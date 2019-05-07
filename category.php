<?php
    get_header();
?>
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
              echo '<h1 class="titleText">Blog</h1>';
              echo '<p>#Canada’sTopMayorAward</p>';
       ?>
   </div>
</div>
<article class="page-content">
 <div class="container blogpage">
   <div class="row">
     <div class="col col-lg-8 col-md-12 col-sm-12 col-xsm-12 articles">

          <?php while ( have_posts() ) : the_post(); ?>

            <div id="Post" class="blogposts">

              <h2 class="post-title">
                  <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <?php the_content(); ?>
            </div>

          <?php endwhile; // End of the loop. ?>
          <div class="nav-previous alignleft"><?php previous_posts_link( 'VIEW NEWER POSTS <img src="'.home_url().'/wp-content/uploads/2019/01/RedArrow.jpg" width="40" class="newerarrow"/>' ); ?></div>
          <div class="nav-next alignleft"><?php next_posts_link( '<img src="'.home_url().'/wp-content/uploads/2019/01/RedArrow.jpg" width="40" class="morearrow"/> VIEW MORE' ); ?></div>

      </div>
      <div class="col col-lg-4 col-md-12 col-sm-12 col-xsm-12">

        <div class="blog-sidebar">
            <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
        </div>

       </div>
    </div>
  </div>
</article>
<?php echo do_shortcode( '[common_element  id="95"]' ); ?>
<?php echo do_shortcode( '[common_element  id="96"]' ); ?>
<?php
    get_footer();
