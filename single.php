
<?php  get_header(); ?>
<main>
<!--Main layout-->
<div class="container">
    <div class="row">
        <!--Main column-->
        <div class="col-md-8">
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
                <!-- Post Content -->
                <p><?php the_content(); ?></p>
            </div>
            <!--/.Post-->
            <hr>
            <?php
            } // end while
            } // end if
            ?>
        </div>
        <!--Sidebar-->
        <div class="col-md-4">
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
        </div>
        <!--/.Sidebar-->
    </div>
</div>
<!--/.Main layout-->
</main>
<?php  get_footer(); ?>
            