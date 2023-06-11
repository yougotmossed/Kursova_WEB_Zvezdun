<?php
// Leonid Zvezdun UP-211 Kursova robota WEB
?>
<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'unite'); ?></label>
  <div class="input-group">
    <input type="search" value="<?php echo esc_attr(get_search_query()); ?>" name="s" class="search-field form-control" placeholder="<?php esc_attr_e('Search...', 'unite'); ?>">
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
    </span>
  </div>
</form>
