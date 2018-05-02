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
                 <?php
  if (is_single()){
    the_content();
  }
  else {
    the_excerpt();
  ?>
    <!--"Read more" button-->
    <a href="<?php echo get_permalink() ?>"><button class="btn btn-primary">Read more</button></a>
  <?php
  }
  ?>  
            </div>