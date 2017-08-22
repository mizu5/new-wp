<?php get_header(); ?>
<div id="main">
  <div id="content">
    <h2>
      <?php single_cat_title('Category Archives : '); ?>
    </h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="jb-post-list">
        <h3>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
      </div>
    <?php endwhile; else: ?>
      <h2>Sorry!</h2>
    <?php endif; ?>
    <?php
      global $wp_query;
      $big = 999999999;
      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
      ) );
    ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>