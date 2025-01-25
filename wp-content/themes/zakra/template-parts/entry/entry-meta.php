<?php
/**
 * Entry meta template file.
 *
 * @package zakra
 *
 * TODO: @since.
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$meta_orders    = get_theme_mod(
	'zakra_blog_meta_elements', array(
		'author',
		'date',
		'categories',
		'tags',
		'comments',
	)
);

if (is_singular()) {
    $meta_orders = get_theme_mod(
        'zakra_single_meta_elements', array(
            'author',
            'date',
            'categories',
            'tags',
            'comments',
        )
    );
}

if ( 'post' === get_post_type() ) :
?>
	<div class="zak-entry-meta">
		<?php
		foreach ( $meta_orders as $key => $meta_order ) {

			if ( 'author' === $meta_order ) {

				zakra_posted_by();

			}
		}

		do_action( 'zakra_entry_meta_end' );
		?>
	</div> <!-- .zak-entry-meta -->
<?php
endif;
