<?php
	$permalink = get_permalink();
	$title     = get_the_title();
	$excerpt   = get_the_excerpt();
	$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
	$thumb_url = $thumb['0'];
?>
<div class="row share_sidebar_inner">
	<div class="large-12 column">
	    <a data-title="<?php echo $title; ?>" data-img="<?php echo $thumb_url ? $thumb_url : ''; ?>" data-desc="<?php echo $excerpt; ?>" data-url="<?php echo $permalink; ?>"
	    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>" target="_blank">
	    	<img src="<?php echo THEME_DIR . '/images/add_facebook.png'; ?>" alt="facebook">
	    </a>

	    <a data-title="<?php echo $title; ?>" data-img="<?php echo $thumb_url ? $thumb_url : ''; ?>" data-desc="<?php echo $excerpt; ?>" data-url="<?php echo $permalink; ?>"
	    href="https://plus.google.com/share?url=<?php echo $permalink; ?>" target="_blank">
	    	<img src="<?php echo THEME_DIR . '/images/add_google.png.png'; ?>" alt="google+">
	    </a>

	    <a data-title="<?php echo $title; ?>" data-img="<?php echo $thumb_url ? $thumb_url : ''; ?>" data-desc="<?php echo $excerpt; ?>" data-url="<?php echo $permalink; ?>"
	    href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $title; ?>&summary=&source=" target="_blank">
	    	<img src="<?php echo THEME_DIR . '/images/add_linkdin.png'; ?>" alt="Linkdin">
	    </a>

	    <a href="mailto:friend@mail.com" target="_blank">
	    	<img src="<?php echo THEME_DIR . '/images/add_mail.png'; ?>" alt="Mail">
	    </a>

	    <a data-title="<?php echo $title; ?>" data-img="<?php echo $thumb_url ? $thumb_url : ''; ?>" data-desc="<?php echo $excerpt; ?>" data-url="<?php echo $permalink; ?>"
	    href="https://twitter.com/home?status=<?php echo $permalink; ?>" target="_blank">
	    	<img src="<?php echo THEME_DIR . '/images/add_twitter.png'; ?>" alt="Twitter">
	    </a>

	    <a href="whatsapp://send?text=<?php echo $title; ?> - <?php echo $permalink; ?>" data-action="share/whatsapp/share" target="_blank">
	    	<img src="<?php echo THEME_DIR . '/images/add_whatsapp.png'; ?>" alt="WhatsApp">
	    </a>
	</div>
</div>
