<?php
	global $float;
	$logo 			= get_field('main_logo', 'option');
	$facebook_img 	= get_field( 'facebook_img', 'option');
	$facebook_url	= get_field( 'facebook_url', 'option');
	$google_plusimg = get_field( 'google_plusimg', 'option');
	$google_plusurl	= get_field( 'google_plusurl', 'option');
	$youtube_img	= get_field( 'youtube_img', 'option');
	$youtube_url	= get_field( 'youtube_url', 'option');
	$adrenaline		= get_field( 'adrenaline', 'option');
	$contact_text	= get_field( 'contact_text', 'option');
	$contact_link	= get_field( 'contact_link', 'option');
	$english_link	= get_field( 'english_link', 'option');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="qaU8Pr_AsiNmWTalSRt83gwi49PpzSFe-oWL4AJUJL8" />
<title><?php the_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
	$banner_autoplay = get_field('banner_autoplay');
?>
<?php wp_head(); ?>

<body <?php body_class(); ?>>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1663087937344262',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div class="clearfix"></div>

<div class="main_site_wrapper">

<header role="banner">

	<div class="top_socials">
		<div class="row">
			<div class="large-3 column mob_none">
				&nbsp;
			</div>
			<div class="large-6 column adrenaline">
				<?php echo $adrenaline; ?>
			</div>
			<div class="large-3 column">
				<div class="social_div">
					<div class="lang_con social_con">
						<a href="<?php echo $contact_link; ?>"  title="<?php echo $contact_text; ?>">
							<?php echo $contact_text; ?>
						</a>
					</div>

					<?php if($english_link): ?>
						<div class="lang_con lang_pad">
							<a href="<?php echo $english_link; ?>" title="en">EN</a>
						</div>
					<?php endif; ?>
				</div>

				<?php if ($google_plusurl) { ?>
					<div class="social_div">
						<a href="<?php echo $google_plusurl; ?>" target="_blank" title="google+">
							<img src="<?php echo $google_plusimg['url']; ?>" title="google+" alt="google+">
						</a>
					</div>
				<?php } ?>

				<?php if ($facebook_url) { ?>
					<div class="social_div">
						<a href="<?php echo $facebook_url; ?>" target="_blank" title="facebook">
							<img src="<?php echo $facebook_img['url']; ?>" title="facebook" alt="facebook">
						</a>
					</div>
				<?php } ?>

				<?php if ($youtube_url) { ?>
					<div class="social_div">
						<a href="<?php echo $youtube_url; ?>" target="_blank" title="youtube">
							<img src="<?php echo $youtube_img['url']; ?>" title="youtube" alt="youtube">
						</a>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
	<nav role="navigation">
		<div class="row">
			<div class="large-12 column">
				<div class="top-bar">


					<div class="top-bar-title logo_div">
					    <span class="title_icon" id="open-responsive-menu" >
					    	<button class="menu-icon dark" type="button" ></button>
					    </span>
					   	<a class="logo_img" href="<?php echo home_url(); ?>" title="">
					   		<img src="<?php echo $logo['url']; ?>" alt="<?php echo get_bloginfo('name'); ?>">
					   	</a>
					</div>
					<div id="responsive-menu" class="menu_div">
						<div class="top_bar_div top-bar-right">
							<div class="wrap_ul">
							    <?php
						           	wp_nav_menu( array(
						                  'theme_location'    => 'top_menu',
						                  'menu_class'        => '',
						                  'container'         => '',
						                  'container_class'   => '',
						                  )
						            );
						        ?>
							</div>
							<div class="wrap_search">
						        <a href="#" class="search_btn" title="">
									<img src="<?php echo THEME_DIR . '/images/searchicon.png'; ?>" title="" alt="search">
								</a>
								<div class="search_div">
									<form role="search" method="get" action="<?php echo home_url(); ?>" >
									    <div class="input_div">
									      <input class="form-control input_search" type="search" name="s" id="search" placeholder="<?php _e('הקלד לחיפוש','insightec');?>">
									    </div>
									    <div class="input_button">
									      <button class="search-submit" type="submit" role="button"><?php _e('חפש','insightec');?></button>
									    </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

</header>

<div class="main_wraper" role="main">
