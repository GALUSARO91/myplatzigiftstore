<?php get_header(); ?>

<div class="container my-4">

    <div class="row">

        <div class="col-12 text-center">

            <h2><?php the_archive_title(); ?> </h2>

            <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <div class="col-4 text-center-single-archive">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?>
                    <h4> <?php the_title();?></h4>
                </a>
            </div>
            <?php } }?>

        </div>

    </div>

</div>

<?php get_footer(); ?>