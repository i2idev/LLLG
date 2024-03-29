<?get_template_part('templates/page', 'header'); ?>

<div class="col-md-8 col-xs-12">
<?php echo do_shortcode( '[sliderpro id="1"]' ); ?>

	<h1 class="latest-news-home"><?php _e('Latest News','LLLG'); ?></h1>

	<?php  if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

<?php endwhile; ?>
<div class="wp_pagenavi">
	<h4><?php _e('Browse our posts','LLLG'); ?></h4>
	<?php wp_pagenavi(); ?>
</div>
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
