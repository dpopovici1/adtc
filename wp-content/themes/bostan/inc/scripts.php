<?php
add_action('wp_enqueue_scripts', 'asalah_enqueue_google_font');
function asalah_enqueue_google_font () {
		global $asalah_data;
		if ((isset($asalah_data['asalah_fonts_load_locally'])) && ($asalah_data['asalah_fonts_load_locally'] == 'yes')) {
			wp_enqueue_style( 'opensans' , get_template_directory_uri() . '/framework/googlefonts/opensans.css' );
		} else {
			wp_enqueue_style( 'opensans' , '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' );
		}
}

add_action( 'wp_enqueue_scripts', 'asalah_scripts' );
function asalah_scripts() {
	global $asalah_data;
	## Register All Scripts
        wp_register_script( 'asalah_modernizer', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ) );

	if (isset($asalah_data['asalah_1200_layout']) && $asalah_data['asalah_1200_layout']) {
		wp_register_script( 'asalah_bootstrap', get_template_directory_uri() . '/framework/bootstrap1200/js/bootstrap.min.js', array( 'jquery' ), false, true );
	}else{
		wp_register_script( 'asalah_bootstrap', get_template_directory_uri() . '/framework/bootstrap/js/bootstrap.min.js', array( 'jquery' ), false, true );
	}

	wp_register_script( 'asalah_eslider', get_template_directory_uri() . '/js/eslider/jquery.eislideshow.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_newsticker', get_template_directory_uri() . '/js/jquery.ticker.js', array( 'jquery' ), false, true );
  wp_register_script( 'asalah_flexslider', get_template_directory_uri() . '/js/flexslider/jquery.flexslider-min.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_scripts', get_template_directory_uri() . '/js/asalah.js', array( 'jquery' ), '6.31', true );
	wp_register_script( 'asalah_easing', get_template_directory_uri() . '/js/jquery.easing.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_tweets', get_template_directory_uri() . '/js/tweets/jquery.tweet.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_carousel', get_template_directory_uri() . '/js/carousel/jquery.carouFredSel-6.2.0-packed.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_jq_mobile', get_template_directory_uri() . '/js/jquery.mobile-1.4.5.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_jcarousel', get_template_directory_uri() . '/js/jquery.jcarousel.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_transmit', get_template_directory_uri() . '/js/jquery.transit.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_throttle', get_template_directory_uri() . '/js/jquery.ba-throttle-debounce.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_prettyphoto', get_template_directory_uri() . '/js/prettyphoto/js/jquery.prettyPhoto.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_component', get_template_directory_uri() . '/js/component.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_isotope', get_template_directory_uri() . '/js/isotope/jquery.isotope.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'asalah_imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), false, true );

	wp_register_script('asalah_owl_carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js', array( 'jquery' ), false, true );


	## Get Global Scripts
        wp_enqueue_script( 'asalah_modernizer' );
	wp_enqueue_script( 'asalah_bootstrap' );
	wp_enqueue_script( 'asalah_eslider' );
	wp_enqueue_script( 'asalah_fitvids' );
	wp_enqueue_script( 'asalah_newsticker' );
	wp_enqueue_script( 'asalah_flexslider' );
	wp_enqueue_script( 'asalah_easing' );
	wp_enqueue_script('asalah_owl_carousel');
	wp_enqueue_script( 'asalah_prettyphoto' );
	wp_enqueue_script( 'asalah_mousewheel' );
	wp_enqueue_script( 'asalah_carousel' );
	wp_enqueue_script( 'asalah_jq_mobile' );
	wp_enqueue_script( 'asalah_jcarousel' );
	wp_enqueue_script( 'asalah_transmit' );
	wp_enqueue_script( 'asalah_throttle' );
	wp_enqueue_script( 'asalah_component' );
	wp_enqueue_script( 'asalah_isotope' );
	wp_enqueue_script( 'asalah_tweets' );
	wp_enqueue_script( 'asalah_imagesloaded' );

	wp_enqueue_script( 'asalah_scripts' );

	## Register all css
	if (isset($asalah_data['asalah_1200_layout']) && $asalah_data['asalah_1200_layout']) {
		wp_register_style( 'asalah_bootstrap_css', get_template_directory_uri().'/framework/bootstrap1200/css/bootstrap.min.css', array(), '', 'all' );
	}else{
		wp_register_style( 'asalah_bootstrap_css', get_template_directory_uri().'/framework/bootstrap/css/bootstrap.min.css', array(), '', 'all' );
	}

	if (isset($asalah_data['asalah_enable_fontawesome']) && ($asalah_data['asalah_enable_fontawesome'])) {
		wp_register_style( 'asalah_fontawesome_css', get_template_directory_uri().'/framework/font-awesome/css/font-awesome.min.css', array(), '', 'all' );
		wp_enqueue_style( 'asalah_fontawesome_css' );
	}

	wp_register_style( 'asalah_fontello_css', get_template_directory_uri().'/framework/fontello/css/fontello.css', array(), '', 'all' );
	wp_register_style( 'asalah_fontelloanimation_css', get_template_directory_uri().'/framework/fontello/css/animation.css', array(), '', 'all' );
	wp_enqueue_style( 'asalah_bootstrap_css' );
	wp_enqueue_style( 'asalah_fontello_css' );
	wp_enqueue_style( 'asalah_fontelloanimation_css' );


	wp_register_style( 'asalah_eslider_css', get_template_directory_uri().'/js/eslider/style.css', array(), '', 'all' );

	wp_register_style( 'asalah_flexslider_css', get_template_directory_uri().'/js/flexslider/flexslider.css', array(), '', 'all' );
	wp_register_style( 'asalah_galleryslider_css', get_template_directory_uri().'/js/flexslider/galleryslider.css', array(), '', 'all' );
	wp_register_style( 'asalah_shortcodes_css', get_template_directory_uri().'/inc/shortcodes/style.css', array(), '', 'all' );
	wp_register_style( 'asalah_prettyphoto_css', get_template_directory_uri().'/js/prettyphoto/css/prettyPhoto.css', array(), '', 'all' );
	wp_register_style( 'asalah_tweets_css', get_template_directory_uri().'/js/tweets/jquery.tweet.css', array(), '', 'all' );
	wp_register_style( 'asalah_main_style', get_bloginfo( 'stylesheet_url' ), array(), '6.31', 'all' );
	wp_register_style( 'asalah_responsive_css', get_template_directory_uri().'/responsive.css', array(), '2.3', 'all' );
	wp_register_style( 'asalah_responsive_css1200', get_template_directory_uri().'/responsive1200.css', array(), '2.3', 'all' );
	wp_register_style( 'asalah_boxed_css', get_template_directory_uri().'/boxed.css', array(), '2.3', 'all' );
	wp_register_style( 'asalah_boxed1200_css', get_template_directory_uri().'/boxed1200.css', array(), '2.3', 'all' );
	wp_register_style( 'asalah_isotope_css', get_template_directory_uri().'/js/isotope/style.css', array(), '1', 'all' );

	wp_register_style('asalah_owl_carousel_css', get_template_directory_uri().'/js/owl-carousel/owl.carousel.css', array(), '', 'all' );

	wp_register_style('asalah_owl_theme_css', get_template_directory_uri().'/js/owl-carousel/owl.theme.css', array(), '', 'all' );




	wp_enqueue_style( 'asalah_flexslider_css' );
	wp_enqueue_style( 'asalah_galleryslider_css' );
	wp_enqueue_style( 'asalah_shortcodes_css' );
	wp_enqueue_style( 'asalah_tweets_css' );
	wp_enqueue_style( 'asalah_prettyphoto_css' );
	wp_enqueue_style( 'asalah_isotope_css' );
	wp_enqueue_style('asalah_owl_carousel_css');
	wp_enqueue_style('asalah_owl_theme_css');
	wp_enqueue_style( 'asalah_main_style' );
	wp_enqueue_style( 'asalah_responsive_css' );
	if (isset($asalah_data['asalah_1200_layout']) && $asalah_data['asalah_1200_layout']) {
		wp_enqueue_style( 'asalah_responsive_css1200' );
	}

	if (isset($asalah_data['asalah_boxed_layout']) && $asalah_data['asalah_boxed_layout']) {
	wp_enqueue_style( 'asalah_boxed_css' );
		if (isset($asalah_data['asalah_1200_layout']) && $asalah_data['asalah_1200_layout']) {
			wp_enqueue_style( 'asalah_boxed1200_css' );
		}
	}
}

add_action('wp_head', 'asalah_ie_scripts', 30);

function asalah_ie_scripts() {
	?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri() ?>/js/html5.js"></script>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/framework/fontawesome/css/font-awesome-ie7.min.css">
<![endif]-->
<?php
}
?>