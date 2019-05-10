<?php
    get_header();
?>
<?php
    $postId = get_the_post_id();
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
              echo '<h1 class="titleText">'.get_the_title().'</h1>';
              echo '<p>#Canada’sTopMayorAward</p>';
       ?>
   </div>
</div>
<div class="container blog-content">
    <div class="row">
        <div class="col col-12 col-lg-12">
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="Post" class="blogposts">
                    <div  class="post-title">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="blog-article">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile; // End of the loop. ?>

            <div class="col col-12 col-lg-12 next-prev">
                <div class="nav-previous alignleft"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> <span>%title</span>', FALSE); ?></div>
                <div class="nav-next alignright"><?php next_post_link('%link', '<span>%title</span> <i class="fa fa-angle-double-right"></i>', FALSE); ?></div>
            </div>
        </div>

    </div>

</div>
<?php echo do_shortcode( '[common_element  id="95"]' ); ?>
<?php echo do_shortcode( '[common_element  id="96"]' ); ?>
<?php
    get_footer();
