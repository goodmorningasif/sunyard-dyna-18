<?php
/**
 * Footer
 *
 * Contans footer assets.
 *
 * @link https://github.com/sdco-partners/Init
 *
 * @package Wordpress
 * @subpackage Footer
 * @since 1.0
 * @version 1.0
 */

$_DIR = get_template_directory_uri();

?>

		</div> <!-- Container -->

		<footer id="foot">
			<div class="left wrapper">
				<div class="svg sun-shine">
					<?php echo file_get_contents( $_DIR . "/assets/svg/svg_sun.svg"); ?>
				</div>
			</div>
			<div class="right wrapper">
				<address>
					<a href="">
						<p>3000 St. Claude Avenue</p>
						<p><?php echo file_get_contents( $_DIR . "/assets/svg/svg_underline.svg"); ?>
						</p>
						<p>New Orleans, LA 70117</p>
						<p><?php echo file_get_contents( $_DIR . "/assets/svg/svg_underline.svg"); ?></p>
					<a href="">
						<p>info@thesunyard.com</p>
						<p><?php echo file_get_contents( $_DIR . "/assets/svg/svg_underline.svg"); ?></p>
					</a>
				</address>
			</div>
	
		</footer>
	</div><!-- Prime -->

<?php wp_footer(); ?>

	</body><!-- end -->
</html>
