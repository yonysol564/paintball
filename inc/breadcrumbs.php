<div class="breadcrumbs_div">
	<div class="row">
		<div class="large-12 column">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			    <?php
			    	$custom_breadcrumbs = get_field('custom_breadcrumbs');
			    	if ($custom_breadcrumbs) {
			    		echo $custom_breadcrumbs;
			    	} else {	
						if ( function_exists('yoast_breadcrumb') ) {
						     yoast_breadcrumb('<p id="breadcrumbs">','</p>');
						}
			    	}
				?>
			</div>
		</div>
	</div>
</div>