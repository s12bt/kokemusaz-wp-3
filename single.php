<?php get_header(); ?>

<!-- contents wrapper -->
<div class="contents-wrapper clearfix">
  <div class="sidePart">
    <div class="sidePart-inner">
      sidePart
      <?php //get_sidebar(); ?>
    </div>
  </div>
  <div class="mainPart">
    <?php
      if (have_posts()) :
        while ( have_posts() ) :
          the_post();
          the_title("<h1>","</h1>");
          the_date();
          the_author();
          the_content();
        endwhile;
      endif;
    ?>
  </div>
</div><!-- contents wrapper end -->



<?php get_footer(); ?>