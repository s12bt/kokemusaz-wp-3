<?php
  get_header();
?>

<!-- contents wrapper -->
<div class="contents-wrapper clearfix">
  <div class="sidePart">
    <div class="sidePart-inner">
      sidePart
      <?php get_sidebar(); ?>
    </div>
  </div>
  <div class="mainPart">
    <ul>
      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
            echo "<li>";
            echo "<a href='";
            the_permalink();
            echo "'>";
            the_title();
            echo "</a>";
            echo "</li>";
          endwhile;
        endif;
      ?>
    </ul>
  </div>
</div><!-- contents wrapper end -->

<?php
  get_footer();
?>