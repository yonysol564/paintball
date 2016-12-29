<?php
/* Template Name: Birthday */ 
	get_header(); 
	$about_main_img   		= get_field('about_main_img');
	$contact_form_general   = get_field('contact_form_general','option');

	$page_children = get_pages(array(
		'child_of' => $post->ID,
		'post_type' => 'page'
	));
	//print_r($page_children);

?>
<?php

while ( have_posts() ) : the_post(); ?>

<?php get_template_part('inc/page', 'banner'); ?>
<?php get_template_part('inc/contact','form'); ?>
<?php get_template_part('inc/breadcrumbs'); ?>


<section class="about_sec">
	<div class="row">
		<div class="large-9 column about_col_9">

			<div>
				<h1><?php the_title(); ?></h1>
			</div>

			<div class="about_content">		
				<?php the_content(); ?>	
			</div>

			<div class="row services_row">
				<?php 
				if ($page_children) {
					foreach ($page_children as $item) {
				?>
					<div class="large-4 column service_col end">
						<a href="<?php echo get_permalink($item->ID); ?>"" title="<?php echo get_the_title($item->ID); ?>">
							<div class="seminar_box">
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) ); ?>
								<div class="service_img seminar_img" style="background-image: url( <?php echo $url; ?>);">
									<div class="abs_title abs_seminar_title">
										<div class="inner_title">	
											<?php echo get_the_title($item->ID); ?>
										</div>
										<div class="inner_description">
											<?php dynamic_excerpt(70); ?>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php
						}
					}
				?>
			</div>


			<div class="free_text_zone">
				<?php 
				$free_text_zone = get_field('free_text_zone');
				if($free_text_zone) {
					echo $free_text_zone;
				}
				?>
			</div>

			<?php get_template_part('inc/socials', 'shares'); ?>




		</div>
		<div class="large-3 column about_col_3">
			
			<div class="proffesional_nav parent_pro_nav">
				<div class="row">
					<div class="large-12 column">
						 <?php wp_nav_menu( array( 'theme_location' => 'Professional_info' ) ); ?> 
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
<?php endwhile; // End of the loop. ?>

<?php get_template_part('inc/general', 'banner'); ?>

<?php get_template_part('inc/events','items'); ?>

<?php
get_sidebar();
get_footer();
?>
