<?php

if ( function_exists( 'vc_disable_frontend' ) ) {
	vc_disable_frontend();
}

add_action( 'vc_before_init', 'asalah_shortcodes_to_vc' );

function asalah_shortcodes_to_vc() {
  vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Action Button", 'bostan'),
        "base" => "action",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(

          array(
    				"type" => "textfield",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Title (optional)", 'bostan'),
    				"param_name" => "title",
    				"value" => '',
    			),
          array(
    				"type" => "textarea",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Content", 'bostan'),
    				"param_name" => "text",
    				"value" => '',
    			),
          array(
    				"type" => "textfield",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Button Text", 'bostan'),
    				"param_name" => "button",
    				"value" => '',
    			),
          array(
    				"type" => "textfield",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Button URL", 'bostan'),
    				"param_name" => "url",
    				"value" => '',
    			),
          array(
    				"type" => "dropdown",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Button Opens in", 'bostan'),
    				"param_name" => "buttontarget",
    				"value" => array_flip(array(
        			'default' => 'Same Tab',
        			'blank' => 'New Tab',
        		)),
    			),
          array(
    				"type" => "attach_image",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Image URL", 'bostan'),
    				"param_name" => "imageurl",
    				"value" => '',
    			),
          array(
    				"type" => "textfield",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Top Margin", 'bostan'),
    				"param_name" => "margintop",
    				"value" => '',
    			),
          array(
    				"type" => "textfield",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Image Width", 'bostan'),
    				"param_name" => "imagewidth",
    				"value" => '',
    			),
          array(
    				"type" => "dropdown",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Button Color", 'bostan'),
    				"param_name" => "color",
    				"value" => array_flip(array(
        			'blue' => 'Blue',
        			'orange' => 'Orange',
        			'green' => 'Green',
        			'pink' => 'Pink',
        			'white' => 'White',
        			'black' => 'Black'
        		)),
    			),
          array(
    				"type" => "dropdown",
    				"holder" => "div",
    				"class" => "",
    				"heading" => __("Button Size", 'bostan'),
    				"param_name" => "button_size",
    				"value" => array_flip(array(
        			'small' => 'Small',
        			'medium' => 'Medium',
        			'big' => 'Big'
        		)),
    			),
        ),
      ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Alerts", 'bostan'),
        "base" => "box",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(

          array(
     				"type" => "textarea_html",
     				"class" => "",
     				"heading" => "Alert Text (required)",
     				"param_name" => "content",
     				"value" => '',
             ),
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Alert Type",
     				"param_name" => "type",
     				"value" => array_flip(array(
      				'download' => 'Download',
      				'warning' => 'Warning',
      				'info' => 'Info',
							'success' => 'Succuss',
							'shadow' => 'Shadow',
      			)),
             ),
           ),
         ));

			$categories = get_categories();
	 		$cats_array = array(esc_attr__("All Categories", 'daynight') => '');
	 		foreach ($categories as $cat) {
	 		    $cats_array[$cat->name] = $cat->slug;
	 		}

			$order_array = array(
				'Date' => 'date',
				'Name' => 'name',
				'Comments Count' => 'comment_count',
				'Random' => 'rand',
			);
			$projects_order_array = array(
				'Date' => 'date',
				'Name' => 'name',
				'Random' => 'rand',
			);

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Blog Posts List", 'bostan'),
        "base" => "bloglist",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Blog Page URL",
     				"param_name" => "url",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Number Of Posts",
     				"param_name" => "postnumber",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Read more text (leave blank for default 'Read more...')",
     				"param_name" => "readmore_pharse",
     				"value" =>  '',
             ),
						 array(
	      				"type" => "dropdown",
	      				"class" => "",
	      				"heading" => "Categories",
	      				"param_name" => "cats",
	      				"value" =>  $cats_array,
	              ),
						 array(
	      				"type" => "dropdown",
	      				"class" => "",
	      				"heading" => "Order",
	      				"param_name" => "order",
	      				"value" =>  $order_array,
	              ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Tags (Seperated by comma)",
     				"param_name" => "tags_ids",
     				"value" =>  '',
             ),
           ),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Clear", 'bostan'),
        "base" => "clear",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Pick a horizontal line",
     				"param_name" => "horizontal_line",
     				"value" =>  array(
        			'none' => 'None',
        			'single' => 'Single',
        			'double' => 'Double',
        			'image' => 'Use Image',
        		),
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Height (optional)",
     				"param_name" => "height",
     				"value" =>  '',
             ),
          array(
     				"type" => "colorpicker",
     				"class" => "",
     				"heading" => "Pick a line color",
     				"param_name" => "line_color",
     				"value" =>  '',
             ),
           ),
         ));
				 $clients_order_array = array(
					 'Date' => 'date',
					 'Name' => 'title',
					 'Random' => 'rand',
				 );
      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Clients Carousel", 'bostan'),
        "base" => "clients",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title (optional)",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Number",
     				"param_name" => "number",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Number to show per slide",
     				"param_name" => "show_number",
     				"value" =>  '',
             ),
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Clients Order",
     				"param_name" => "client_order",
     				"value" =>  $clients_order_array,
             ),
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Autoplay Carousel",
     				"param_name" => "autoplay_car",
     				"value" =>  array(
							'No' => 'no',
							'Yes' => 'yes',
						),
             ),
           ),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Bostan - Map", 'bostan'),
        "base" => "googlemap",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "URL",
     				"param_name" => "src",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Width",
     				"param_name" => "width",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Height",
     				"param_name" => "height",
     				"value" =>  '',
             ),
           ),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Projects Carousel", 'bostan'),
        "base" => "projects",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textarea",
     				"class" => "",
     				"heading" => "Description Text",
     				"param_name" => "desc",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Portfolio Page URL",
     				"param_name" => "url",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Number Of Posts",
     				"param_name" => "postnumber",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Max Number To Appear In Page",
     				"param_name" => "max",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Number Of Items To Switch Each Cycle",
     				"param_name" => "cycle",
     				"value" =>  '',
             ),
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Heading Position",
     				"param_name" => "pos",
     				"value" =>  array_flip(array(
      				'top' => 'Top',
      				'side' => 'Left Side',
      				'hidden' => 'Hidden',
      			)),
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Tags (Seperated by comma)",
     				"param_name" => "tags_ids",
     				"value" =>  '',
             ),
						 array(
	      				"type" => "dropdown",
	      				"class" => "",
	      				"heading" => "Projects Order",
	      				"param_name" => "projects_order",
	      				"value" =>  $clients_order_array,
	              ),
	           array(
	      				"type" => "dropdown",
	      				"class" => "",
	      				"heading" => "Autoplay Carousel",
	      				"param_name" => "autoplay_car",
	      				"value" =>  array(
	 							'No' => 'no',
	 							'Yes' => 'yes',
	 						),
	              ),
           ),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Pricing Table", 'bostan'),
        "base" => "pricingblock",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(

          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title (optional)",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Table ID (required)",
     				"param_name" => "tableid",
     				"value" =>  '',
             ),
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Columns",
     				"param_name" => "columns",
     				"value" =>  array_flip(array(
      				'one' => 'One',
      				'two' => 'Two',
      				'three' => 'Three',
      				'four' => 'Four',
      				'five' => 'Five',
      			)),
             ),
           ),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Progress Container", 'bostan'),
        "base" => "progresscon",
        "as_parent" => array('only' => 'progress'),
        "is_container" => true,
        "class" => "",
				"content_element" => true,
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Progress Style",
     				"param_name" => "type",
     				"value" =>  array_flip(array(
      				'basic' => 'basic',
      				'striped' => 'striped',
      				'animated' => 'Animated'
      			)),
             ),
           ),
           "js_view" => 'VcColumnView',
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Progress Bar", 'bostan'),
        "base" => "progress",
        "as_child" => array('only' => 'progresscon'),
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Progress Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Percent",
     				"param_name" => "percent",
     				"value" =>  '',
             ),
           ),
         ));

         //Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
						if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
						    class WPBakeryShortCode_progresscon extends WPBakeryShortCodesContainer {
						    }
						}
						if ( class_exists( 'WPBakeryShortCode' ) ) {
						    class WPBakeryShortCode_progress extends WPBakeryShortCode {
						    }
						}

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Revolution Slider", 'bostan'),
        "base" => "revslider",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(

          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Slider Alias (required)",
     				"param_name" => "alias",
     				"value" =>  '',
             ),
           ),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Bostan - RichText", 'bostan'),
        "base" => "asalah_richtext",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title (optional)",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textarea_html",
     				"class" => "",
     				"heading" => "Content",
     				"param_name" => "content",
     				"value" =>  '',
             ),
           ),
         ));

         //get all registered sidebars
     		global $wp_registered_sidebars;
     		$sidebar_options = array(); $default_sidebar = '';
     		foreach ($wp_registered_sidebars as $registered_sidebar) {
     			$default_sidebar = empty($default_sidebar) ? $registered_sidebar['id'] : $default_sidebar;
     			$sidebar_options[$registered_sidebar['id']] = $registered_sidebar['name'];
     		}

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Bostan - Widget", 'bostan'),
        "base" => "widget",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Choose Widget Area",
     				"param_name" => "sidebar",
     				"value" =>  array_flip($sidebar_options),
             ),
           ),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Bostan - Space", 'bostan'),
        "base" => "space",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Service", 'bostan'),
        "base" => "service",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textarea",
     				"class" => "",
     				"heading" => "Content",
     				"param_name" => "text",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => 'Icon Class (Fontello Icon Class to add icon go to <a target="_blank" href="http://www.fontello.com/">Fontello</a>, choose your icon, hover on it to see it\'s name then write icon-name in this field for example: icon-search)',
     				"param_name" => "icon_class",
     				"value" =>  '',
             ),
          array(
     				"type" => "attach_image",
     				"class" => "",
     				"heading" => 'Custom Image Url (Put the url of your custom photo to use instead of Fontello icon.)',
     				"param_name" => "custom_image",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => 'URL',
     				"param_name" => "url",
     				"value" =>  '',
             ),
           ),
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Bostan - Tabs", 'bostan'),
        "base" => "tabs",
        "as_parent" => array('only' => 'tab'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
				"content_element" => true,
				"is_container" => true,
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "dropdown",
     				"class" => "",
     				"heading" => "Vertical",
     				"param_name" => "vertical",
     				"value" =>  array(
              'True' => 'true',
              'False' => 'false',
            ),
             ),
           ),
           "js_view" => 'VcColumnView',
         ));

      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Bostan - Tab", 'bostan'),
        "base" => "tab",
        "as_child" => array('only' => 'tabs'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)

        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textarea_html",
     				"class" => "",
     				"heading" => "Content",
     				"param_name" => "content",
     				"value" =>  '',
             ),
           ),
         ));

         //Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
							if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
									class WPBakeryShortCode_tabs extends WPBakeryShortCodesContainer {
									}
							}
							if ( class_exists( 'WPBakeryShortCode' ) ) {
									class WPBakeryShortCode_tab extends WPBakeryShortCode {
									}
							}



      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Testimonials  Carousel", 'bostan'),
        "base" => "testimonials",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Number Of Testimonials",
     				"param_name" => "number",
     				"value" =>  '',
             ),
           ),
         ));


      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Bostan - Video", 'bostan'),
        "base" => "video",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Video url",
     				"param_name" => "video_url",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Height",
     				"param_name" => "height",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Width",
     				"param_name" => "width",
     				"value" =>  '',
             ),
           ),
         ));


      vc_map( array(
        "icon" => get_template_directory_uri().'/img/default.jpg',
        "name" => __("Team Carousel", 'bostan'),
        "base" => "teamblock",
        "class" => "",
        "category" => __('Bostan', 'bostan'),
        "params" => array(

          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Title",
     				"param_name" => "title",
     				"value" =>  '',
             ),
          array(
     				"type" => "textarea",
     				"class" => "",
     				"heading" => "Description Text",
     				"param_name" => "desc",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Number Of Members",
     				"param_name" => "postnumber",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Max Number To Appear In Page",
     				"param_name" => "max",
     				"value" =>  '',
             ),
          array(
     				"type" => "textfield",
     				"class" => "",
     				"heading" => "Number Of Items To Switch Each Cycle",
     				"param_name" => "cycle",
     				"value" =>  '',
             ),
						 array(
	      				"type" => "dropdown",
	      				"class" => "",
	      				"heading" => "Team Order",
	      				"param_name" => "team_order",
	      				"value" =>  $clients_order_array,
	              ),
	           array(
	      				"type" => "dropdown",
	      				"class" => "",
	      				"heading" => "Autoplay Carousel",
	      				"param_name" => "autoplay_car",
	      				"value" =>  array(
	 							'No' => 'no',
	 							'Yes' => 'yes',
	 						),
	              ),
           ),
         ));

}