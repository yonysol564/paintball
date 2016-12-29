<?php
/* Template Name: Info */ 
get_header();
?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/contact','form'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>



<section class="info_sec">

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="large-12 column">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>	
		<div class="row info_con_row">
			<div class="large-12 column">
				<div class="info_content"><?php the_content(); ?></div>
			</div>
		</div>	

	<?php endwhile; wp_reset_query(); // End of the loop. ?>

	<div class="row info_posts_row">

		<?php $info_show_posts = get_field('info_show_posts');

		foreach ($info_show_posts as $item) {
		?>
			<div class="large-4 column info_col end">
				<a href="<?php echo get_permalink($item->ID); ?>" title="">
					<div class="info_box">
						<div class="info_box_title">
							<div class="inner_title">	
								<?php echo get_the_title($item->ID); ?>
							</div>
						</div>
					    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) ); ?>
						<div class="box_detailes">	
							<div class="box_img">
								<img src="<?php echo $url; ?>" title="" alt="">
							</div>
							<div class="box_excerpt">
								<?php dynamic_excerpt(300); ?>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</a>
			</div>
		<?php
		}
		?>

	</div>
</section>

<section>
<?php $general_info_desc = get_field('2general_info_desc'); ?>
	<div class="row">
		<div class="large-12 column">
			<?php echo $general_info_desc; ?>
		</div>
	</div>
</section>

<?php
get_sidebar();
get_footer();
