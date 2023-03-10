<?php
/**
 * The template for displaying search forms in activello
 *
 * @package activello
 */
?>

<form role="search" method="get" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
	  <label class="screen-reader-text" for="s"><?php _e( 'Recherche pour:', 'activello' ); ?></label>
	<input type="text" class="form-control search-query" placeholder="Rechercher" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Recherche pour:', 'label', 'activello' ); ?>" />
	<span class="input-group-btn">
	  <button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="<?php echo _e( 'Rechercher', 'activello' ); ?>"><?php echo esc_attr_x( 'Rechercher', 'submit button', 'activello' ); ?></button>
	</span>
  </div>
</form>
