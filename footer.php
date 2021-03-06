<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php
					/**
					 * Fires before the lubstarter footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'lubstarter_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'http://biuro.ryneklubelski.pl/', 'lubstarter' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'lubstarter' ), 'Biuro Rynek Lubelski' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
