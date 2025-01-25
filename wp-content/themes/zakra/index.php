<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zakra
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<main id="zak-primary" class="zak-primary">
	<h1>Adicionar postagem</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<?php wp_nonce_field('save_post', 'save_post_nonce'); ?>

		<label for="post_title">Título:</label>
		<input type="text" name="post_title" id="post_title" required>

		<label for="post_content">Conteúdo:</label>
		<textarea name="post_content" id="post_content" required></textarea>

		<label for="post_image">Imagem:</label>
		<input type="file" name="post_image" id="post_image" accept="image/*" required>

		<input type="submit" value="Enviar" name="submit_post">
	</form>
	<h1 style="margin-top: 20px;">Lista de postagens</h1>
	<?php echo apply_filters('zakra_after_primary_start_filter', false); // WPCS: XSS OK. 
	?>

	<?php
	/**
	 * Hook for post listing content.
	 *
	 * @hooked zakra_content_loop - 10
	 */
	do_action('zakra_content');
	?>

	<?php echo apply_filters('zakra_after_primary_end_filter', false); // // WPCS: XSS OK. 
	?>
</main> <!-- /.zak-primary -->

<?php
