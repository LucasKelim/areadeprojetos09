<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zakra
 */

?>

<section class="zak-no-results zak-not-found">
	<header class="page-header">
		<?php if ( 'page-header' !== zakra_page_title_position() ) : ?>
			<h1 class="page-title zak-page-content__title"><?php esc_html_e( 'Nothing Found', 'zakra' ); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->

	<img
		src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/Website.svg' ); ?>"
		alt=""
	/>

	<header class="zak-content-header">
		<h1 class="zak-page-title"><?php esc_html_e( 'No Results Found', 'zakra' ); ?></h1>
	</header><!-- .cm-page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . __( 'Ready to publish your first post?', 'zakra' ) . '</p>',
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'We couldnt find any results for your search. Use more generic words or double check your spelling.', 'zakra' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'zakra' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .zak-no-results -->
