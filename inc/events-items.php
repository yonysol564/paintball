<?php $posts_to_show = get_field('posts_to_show'); ?>
<?php if ($posts_to_show) { ?>
	<section class="event_post_sec">
		<div class="row">
			<div class="large-12 column">
				<?php $posts_to_show_title = get_field('posts_to_show_title'); ?>
					<?php if ($posts_to_show_title)
					{
						echo $posts_to_show_title;
					}
					?>
			</div>
		</div>	
		<div class="row events_row">
			<?php foreach ($posts_to_show as $item) { ?>
				<div class="large-4 column cat_col">
					<a href="<?php echo get_permalink($item->ID); ?>"" title="<?php echo get_the_title($item->ID); ?>">
						<div class="event_box">
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) ); ?>
							<div class="event_img" style="background-image: url( <?php echo $url; ?>);">
								<div class="abs_title">
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
			<?php } ?>
		</div>
	</section>
<?php } ?>