<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
    <button type="submit" class="search-submit btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
</form>
