<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <!-- favicon -->
        <?php global $asalah_data; ?>
        <?php if ($asalah_data['asalah_fav_url'] != ''): ?>
            <link rel="shortcut icon" href="<?php echo $asalah_data['asalah_fav_url']; ?>" title="Favicon" />
        <?php endif; ?>
        <?php if ($asalah_data['asalah_apple_57']): ?>
            <link rel="apple-touch-icon" href="<?php echo $asalah_data['asalah_apple_57']; ?>" />
        <?php endif; ?>
        <?php if ($asalah_data['asalah_apple_72']): ?>
            <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $asalah_data['asalah_apple_114']; ?>" />
        <?php endif; ?>
        <?php if ($asalah_data['asalah_apple_114']): ?>
            <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $asalah_data['asalah_apple_114']; ?>" />
        <?php endif; ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php
        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');
        ?>
        <!-- Your custom head codes will go here -->
        <?php if ($asalah_data['asalah_header_code']): ?>
            <?php echo $asalah_data['asalah_header_code']; ?>
        <?php endif; ?>
        <!-- custom head codes-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class('body_width'); ?>>
        <?php if ($asalah_data['asalah_use_sdk']): ?>
            <!-- Load facebook SDK -->
            <div id="fb-root"></div>
            <script>
                window.fbAsyncInit = function() {
                FB.init({
    <?php if ($asalah_data['asalah_fb_id']): ?>
                    appId      : '<?php echo $asalah_data['asalah_fb_id']; ?>', // App ID
    <?php endif; ?>
                status     : true, // check login status
                        cookie     : true, // enable cookies to allow the server to access the session
                        xfbml      : true  // parse XFBML
                });
                };
                        // Load the SDK Asynchronously
                                (function(d){
                                var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return; }
                                js = d.createElement('script'); js.id = id; js.async = true;
                                        js.src = "//connect.facebook.net/en_US/all.js";
                                        d.getElementsByTagName('head')[0].appendChild(js);
                                }(document));
            </script>
            <!-- End Load facebook SDK -->
        <?php endif; ?>
        <script type="text/javascript">jQuery(document).bind("mobileinit", function(){jQuery.extend(  jQuery.mobile , {autoInitializePage: false})});</script>
        <!-- start site header -->
        <header class="header_container body_width">
            <!-- start top header -->
            <div class="container-fluid top_header">
                <div class="container">
                    <div class="row-fluid"><div class="span12">

                        <?php if ($asalah_data['asalah_tw_url'] || $asalah_data['asalah_fb_url'] || $asalah_data['asalah_gp_url'] || $asalah_data['asalah_linked_url'] || $asalah_data['asalah_youtube_url'] || $asalah_data['asalah_vimeo_url'] || $asalah_data['asalah_vk_url'] || $asalah_data['asalah_instagram_url'] || $asalah_data['asalah_pin_url'] || $asalah_data['asalah_500px_url'] || $asalah_data['asalah_github_url'] || $asalah_data['asalah_flickr_url'] || !$asalah_data['asalah_disable_rss']): ?>
                            <!-- start header tools span -->
                            <div class="top_header_tools_holder pull-right">
                                <div class="header_items_line ">
                                    <div class="social_icons pull-right">
                                        <ul class="social_icons_list clearfix">
                                            <?php asalah_social_icons(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end header tools span -->
                        <?php endif; ?>

                    </div></div>
                </div>
            </div>
            <!-- end top header -->

            <!-- start below header -->
            <div id="below_header" class="container-fluid body_width below_header <?php if ($asalah_data['asalah_sticky_header']) { ?>headerissticky<?php } ?>">
                <div class="container">
                    <div class="row-fluid"><div id="below_header_span" class="span12">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="logo <?php if (!$asalah_data['asalah_logo_url_retina']) { echo 'no_retina';} ?>">
                                      <?php if ($asalah_data['asalah_logo_url'] || $asalah_data['asalah_logo_url_retina']): ?>
                                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                                        <?php if ($asalah_data['asalah_logo_url']): ?>
                                          <img class="default_logo" width="<?php echo $asalah_data['asalah_logo_url_w']; ?>" height="<?php echo $asalah_data['asalah_logo_url_h']; ?>"  src="<?php echo $asalah_data['asalah_logo_url']; ?>" alt="<?php bloginfo('name'); ?>">
                                        <?php endif; ?>
                                        <?php if ($asalah_data['asalah_logo_url_retina']) { ?>
                                          <img class="retina_logo" width="<?php echo $asalah_data['asalah_logo_url_w']; ?>" height="<?php echo $asalah_data['asalah_logo_url_h']; ?>" src="<?php echo $asalah_data['asalah_logo_url_retina']; ?>" alt="<?php bloginfo('name'); ?>">
                                        <?php } ?>
                                            <h1><strong class="hidden"><?php bloginfo('name'); ?></strong></h1></a>
                                        <?php else: ?>
                                            <a href="<?php echo home_url(); ?>"><h1><?php echo get_bloginfo('name'); ?></h1></a>
                                        <?php endif; ?>
                                    </div>
                                    <div id="gototop" title="<?php _e('Scroll To Top', 'asalah'); ?>" class="gototop pull-right">
                                        <i class="icon-up-open"></i>
                                    </div>
                                    <div class="mobile_menu_button">
                                      <i class="icon-menu"></i>
                                      <p class="mobile_menu_text"><?php echo _x( 'Menu', 'Used for mobile menu.', 'asalah' ); ?></p>
                                    </div>

                        <!-- start contact info span -->
                        <?php if ($asalah_data['asalah_header_phone'] || $asalah_data['asalah_header_mail']) : ?>
                            <div class="contact_info_holder">
                                <div class="contact_info_line">
                                    <?php if ($asalah_data['asalah_header_mail']) : ?>
                                      <?php if (asalah_cross_option('asalah_linkable_email')) { $linkable_mail = 'yes'; } ?>
                                        <i class="icon-mail contact_info_icon"></i> <span class="mail_address contact_info_item"><?php if (isset($linkable_mail)) { ?><a href="mailto:<?php echo $asalah_data['asalah_header_mail']; ?>"><?php } ?><?php echo $asalah_data['asalah_header_mail']; ?><?php if (isset($linkable_mail)) { ?></a><?php } ?></span>
                                    <?php endif; ?>

                                    <?php if ($asalah_data['asalah_header_phone']) : ?>
                                      <?php if (asalah_cross_option('asalah_linkable_phone')) { $linkable_phone = 'yes'; } ?>
                                        <i class="icon-phone-outline contact_info_icon"></i> <span class="phone_number contact_info_item"><?php if (isset($linkable_phone)) { ?><a href="tel:<?php echo $asalah_data['asalah_header_phone'];?>" ><?php } ?><?php echo $asalah_data['asalah_header_phone']; ?><?php if (isset($linkable_phone)) { ?></a><?php } ?></span>
                                    <?php endif; ?>


                                </div>

                            </div>
                        <?php endif; ?>
                        <!-- end contact info span -->

                                    <nav class="span navbar main_navbar pull-right desktop_menu">
                                        <?php
                                        wp_nav_menu(array(
                                            'container' => 'div',
                                            'container_class' => 'main_nav',
                                            'theme_location' => 'primarymenu',
                                            'menu_class' => 'nav',
                                            'fallback_cb' => '',
                                            'walker' => new asalah_header_walker_nav_menu(),
                                        ));
                                        ?>
                                    </nav>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end below header -->

            <?php if (asalah_cross_option('asalah_sticky_header')) { ?>
              <!-- start below header -->
              <div class="container-fluid body_width below_header hidden_header">
              </div>
              <!-- end below header -->
            <?php } ?>

            <div class="header_shadow_separator"></div>
        </header>
        <!-- end site header -->


        <div class="body_width site_middle_content">
