<?php
/* Template Name: Homepage */
get_header();
$banner_autoplay = get_field('banner_autoplay');
?>
<script>
    <?php if( $banner_autoplay): ?>
        banner_autoplay = true;
    <?php else: ?>
        banner_autoplay = false;
    <?php endif; ?>
</script>

<?php if( have_rows('page_slider') ): ?>
<button class="play"><img src="<?php echo THEME_DIR . '/images/custplay.png'; ?>" title="Play" alt="Play"></button>
<button class="prev"><img src="<?php echo THEME_DIR . '/images/custprev.png'; ?>" title="Prev" alt="Prev"></button>
<button class="pause"><img src="<?php echo THEME_DIR . '/images/custpause.png'; ?>" title="Pause" alt="Pause"></button>
<button class="next"><img src="<?php echo THEME_DIR . '/images/custnext.png'; ?>" title="Next" alt="Next"></button>

<div class="home_banner_wrap">
    <?php while ( have_rows('page_slider') ) : the_row();
        $img_slider= get_sub_field('img_slider');
        $page_slider_text = get_sub_field('page_slider_text');
        ?>
			<div class="bg_home" style="background-image: url( <?php echo $img_slider['url']; ?>);">
			<!-- 	<div class="row home_row_banner">
					<div class="text_rep">
						<?php // echo $page_slider_text; ?>
					</div>
				</div> -->
			</div>
    <?php endwhile; ?>
</div>
<?php endif;?>

<?php get_template_part('inc/contact','form'); ?>

<section class="home_con_sec">
	<div class="row">
		<div class="large-12 column">
			<?php
			while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
			<?php
			endwhile;
			?>
		</div>
	</div>
</section>

<section class="home_services parent_page_sec">
	<?php
		$parent_pages_show = get_field('parent_pages_show');
	?>
		<div class="row parent_row">
			<?php
			if ($parent_pages_show) {
				foreach ($parent_pages_show as $item) {
			?>
				<div class="large-4 column parent_col end">
					<a href="<?php echo get_permalink($item->ID); ?>" title="<?php echo get_the_title($item->ID); ?>">
						<div class="parent_box">
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) ); ?>
							<div class="parent_img" style="background-image: url( <?php echo $url; ?>);">
								<div class="paret_abs_title">
									<div class="parent_inner_title">
										<?php echo get_the_title($item->ID); ?>
									</div>
									<div class="parent_inner_description">
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
</section>
<?php

while ( have_posts() ) : the_post(); ?>


<?php get_template_part('inc/general', 'banner'); ?>

<?php get_template_part('inc/events','items'); ?>

<?php
endwhile;
get_sidebar();
get_footer();
