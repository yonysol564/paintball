<?php
	$footer_copy     = get_field('footer_copy' ,'option');
	$footer_webbuild = get_field('footer_webbuild' ,'option');
	$footer_info     = get_field('footer_info' ,'option');
?>
<footer role="contentinfo">

	<?php get_template_part("inc/footer","customers-carousel"); ?>

	<section class="footer_menu_sec">
		<div class="row">
			<div class="large-8 column">
				<div class="row">
					<div class="medium-3 small-12 column footer_col">
		                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_one', 'menu_class' => 'footer_menu_one' ) ); ?>
		            </div>
		            <div class="medium-3 small-12 column footer_col">
		                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_tow', 'menu_class' => 'footer_menu_tow' ) ); ?>
		            </div>
		            <div class="medium-3 small-12 column footer_col">
		                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_three', 'menu_class' => 'footer_menu_three' ) ); ?>
		            </div>
		            <div class="medium-3 small-12 column footer_col end">
		                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_four', 'menu_class' => 'footer_menu_four' ) ); ?>
		            </div>
				</div>
			</div>
			<div class="large-3 column">
				<?php echo $footer_info; ?>
			</div>
		</div>
	</section>

	<section class="footer_copy_sec">
		<div class="row">
			 <div class="large-12 column">
				<div class="footer_copy">
					<?php echo $footer_copy; ?>
				</div>
				<div class="footer_build">
					<div class="fleft web_left">
						<?php echo $footer_webbuild; ?>
					</div>
					<div class="fleft menu_left">
						<?php wp_nav_menu( array( 'theme_location' => 'copy_menu_footer', 'menu_class' => 'copy_menu_footer' ) ); ?>
					</div>
				</div>
			 </div>
		</div>
	</section>

</footer>

<?php wp_footer(); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->

</div><!-- end Wraper  -->
 <!-- Go to www.addthis.com/dashboard to customize your tools -->
 <?php
 ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5731a47f298c9820"></script>

</div>

</body>
</html>
