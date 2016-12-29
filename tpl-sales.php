<?php
	/* Template Name: Sales */ 
	get_header(); 
	$page_banner     	 = get_field('page_banner');
	$page_banner_text    = get_field('page_banner_text');
	$contact_form_general   = get_field('contact_form_general','option');
?>
<?php
while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/page', 'banner'); ?>
<?php get_template_part('inc/contact','form'); ?>
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

			<div>
				<?php $sing_free_text  = get_field('sing_free_text'); 
					echo $sing_free_text;
				?>	
			</div>

		</div>
		<div class="large-3 column about_col_3">
			
			<div class="about_wraper">	
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


				<h3>פיינטבול העמוד הרשמי</h3>	
				<div>

				<div class="fb-page" data-href="https://www.facebook.com/Gamelandisrael/" data-tabs="timeline" data-width="226px" data-height="396px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
				 
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('inc/events','items'); ?>
<?php
endwhile; // End of the loop.
get_sidebar();
get_footer();
?>
