<div class="col-md-8">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <div class="like-button"><?php echo fb_like_button(); ?></div>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php // comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
</div>
<div class="col-md-4 col-xs-12">
  <div class="sidebar">
    <div class="about-author clearfix">
      <?php 
        $the_query = new WP_Query( 'page_id=25' );
        while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>
      <h1><?php the_title(); ?></h1>
      <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
      <?php the_excerpt(); ?>
        <?php endwhile;?> <!-- About author -->
    </div>
    <?php  dynamic_sidebar('home-side'); ?>
  </div>
</div>
