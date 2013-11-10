<?php
/*
Template Name: Places Map
*/
get_header();
?>


<div class="se-page-outer-wrap">
  <?php while ( have_posts() ) : the_post(); ?>

    <!-- Content -->
    <div class="se-page-inner-wrap">

      <!-- Header -->
      <header class="se-page-header">

        <h1 class="se-page-header-title"><?php the_title(); ?></h1>

        <div class="se-page-map-wrap">
          <iframe src="http://mapsengine.google.com/map/embed?mid=zwWst9VDdCx0.kmoCxTsXHzWM" height="480"></iframe>
        </div>

      </header>


      <!-- Body -->
      <?php get_template_part('content', 'page-body'); ?>

    </div><!-- /.se-page-inner-wrap -->

  <?php endwhile; ?>
</div>


<?php get_footer();
