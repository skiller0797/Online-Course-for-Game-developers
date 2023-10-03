<?php
/**
 * The template for displaying the 404 template in the Avadanta theme.
 *
 * 
 * @subpackage Avadanta
 */
 
get_header();
?>
	<div class="section section-x page-extra-pd tc-bunker align-middle-md error-44">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8 text-center">
					<div class="error-content">
						<span class="error-text-large"><?php esc_html_e( '404', 'avadanta-dark' ); ?></span>
						<h5><?php esc_html_e( 'Opps! Why you are here?', 'avadanta-dark' ); ?></h5>
						<p><?php esc_html_e( 'We are very sorry for inconvenience. It looks like you are tring to access a page that either has been deleted or never existed.', 'avadanta-dark' ); ?></p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php esc_html_e( 'Go to Home', 'avadanta-dark' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
?>