<?php $general_banner = get_field('general_page_banner'); ?>
<?php if ($general_banner) { ?>
	<section class="general_banner" style="background-image: url(<?php echo $general_banner['url']; ?>)">
		
	</section>
<?php } ?>
