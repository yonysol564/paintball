<?php
/* Template Name: Gallery */
	get_header();

	while ( have_posts() ) : the_post();  ?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/contact','form'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>

<section class="gallery_con_sec">
	<div class="row">
		<div class="large-12 column about_col_9">
			<div>
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="about_content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<section class="about_sec">
	<div class="row gallery">
	<?php if( have_rows('gallery_rep') ): ?>
	    <?php while ( have_rows('gallery_rep') ) : the_row();
	        $image 		  = get_sub_field('gallery_img');
			$image_alt 	  = $image['alt'];
	        $gallery_desc = get_sub_field('gallery_desc');
	    ?>
	       		<div class="large-4 medium-6 column gallery_col end">
		        	<a class="gallery-item" href="<?php echo $image['url']; ?>" title="<?php echo $image_alt; ?>" data-title="<?php echo $image_alt; ?>">
						<div class="img_wrap" style="background-image: url(<?php echo $image['url']; ?>)">
							<div class="title_div">
								<div class="inner_title"><?php echo $gallery_desc; ?></div>
							</div>
						</div>
		        	</a>
		        </div>
	    <?php endwhile; ?>
	<?php endif;?>

	</div>
</section>

<!-- Go to www.addthis.com/dashboard to generate a new set of sharing buttons -->

<?php get_template_part('inc/socials', 'shares'); ?>

<?php get_template_part('inc/general', 'banner'); ?>

<?php get_template_part('inc/events','items'); ?>

<?php
endwhile; // End of the loop.
get_sidebar();
get_footer();
?>
