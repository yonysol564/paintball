<?php
	get_header(); 
	$page_banner     	 = get_field('page_banner');
	$page_banner_text    = get_field('page_banner_text');
	$contact_form_general   = get_field('contact_form_general','option');
?>
<?php
while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>

<section class="about_sec sing_ser_sec">
	<div class="row">
		<div class="large-9 column about_col_9">
			<div>
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="about_content">		
				<?php the_content(); ?>	
			</div>
			<div class="wrap_service_slider">
				<div class="service_slider">
					<?php if( have_rows('service_slider') ): ?>
					    <?php while ( have_rows('service_slider') ) : the_row(); 
					        $img_slider= get_sub_field('service_slider_img');
					        ?>          
								<div class="slider_inner" style="background-image: url( <?php echo $img_slider['url']; ?>);">

								</div>
					    <?php endwhile; ?>       
					<?php endif;?>
				</div>
			</div>

		</div>
		<div class="large-3 column about_col_3">
			
			<div class="about_wraper">	
				<h2>
					שירותים נוספים
				</h2>
				<div class="single_nav">
					<div class="row">
						<div class="large-12 column">
							<ul>
								<?php wp_nav_menu( array( 'theme_location' => 'service_menu', 'menu_class' => 'service_menu' ) ); ?> 
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="form_div">
				<h3>נשמח לעמוד <span>לשרותכם</span></h3>	
				<div>
				 	<?php echo do_shortcode($contact_form_general); ?>	
				</div>
			</div>
		</div>
	</div>
</section>

<?php
endwhile; // End of the loop.
get_sidebar();
get_footer();
?>
