<?php
/**
 * Entry header template file.
 *
 * @package zakra
 *
 * TODO: @since.
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="zak-post-content">
	<header class="zak-entry-header">
		<?php
		if ( is_singular() ) {

			if ( 'page-header' !== zakra_page_title_position() ) {

				the_title( '<h1 class="entry-title">', '</h1>' );
			}
		} else {

			the_title( '<h2 class="entry-title">', '</h2>' );
			
		}
		?>
	</header> <!-- .zak-entry-header -->
