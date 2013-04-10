<?php get_header(); ?>

<!-- contents wrapper -->
<div class="contents-wrapper clearfix">
  <?php
    if (have_posts()) :
      while ( have_posts() ) :
        the_post();
        the_title("<h1>","</h1>");
        the_content();
      endwhile;
    endif;
  ?>
</div><!-- contents wrapper end -->



<?php get_footer(); ?>