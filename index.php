<?php get_header();?>

<div class="row">
    <?php get_sidebar(); ?>
</div>  
<div class="row">
    <div class="col-lg-offset-1 col-lg-11">
        <?php
            if ( have_posts() ) {
                    while ( have_posts() ) {

                            the_post(); ?>

                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            
                            
                            <?php the_content(); ?>

                    <?php }
        }
    
        ?>
    </div>
</div>


<?php get_footer(); ?>