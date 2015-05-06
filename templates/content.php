<article class="clearfix" <?php post_class(); ?>>
  	<div class="pull-left thumbnail"><?php the_post_thumbnail(); ?></div>
  	<div class="pull-left">
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
 	<div class="entry-summary">
    <?php 
		$content = get_the_content();
		$trimmed_content = wp_trim_words( $content, 10 );
		echo $trimmed_content;
    ?>
    <div class="like-button">
    <?php echo sharing_display(); ?><?php echo fb_like_button(); ?>
    <a class="tweet" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" onclick="window.open(this.href,'targetWindow','toolbar=no, location=no, status=no,menubar=no,scrollbars=yes,  resizable=yes, width=500,height=500');return false;"><img src="<?= get_template_directory_uri(); ?>/dist/images/tweet.png" alt="Retweet" /></a>
    <a class="read-more pull-right" href="<?php the_permalink() ?>"> Read More</a></div>

  	</div>
    
  </div>
</article>
