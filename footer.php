<?php
/**
 * Theme footer — always loads Trade Africa Direct footer (not Hello dynamic footer).
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	if ( ! function_exists( 'hello_elementor_display_header_footer' ) || hello_elementor_display_header_footer() ) {
		get_template_part( 'template-parts/footer' );
	}
}
?>

<?php wp_footer(); ?>

</body>
</html>
