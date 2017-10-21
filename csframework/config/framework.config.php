<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

if(get_option('subscribers_list')) :
	$subscribers_content = '<h3>There are '. count(get_option('subscribers_list')).' subscribers</h3><ul>';
	foreach(get_option('subscribers_list') as $subscriber) :
		$subscribers_content .= '<li>' . $subscriber . '</li>';
	endforeach;
	$subscribers_content .= '</ul>';
endif;

$settings = array(
	'menu_title'      => 'Agency Three Options',
	'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
	'menu_slug'       => 'theme_options',
	'ajax_save'       => false,
	'show_reset_all'  => false,
	'framework_title' => 'Agency Three <small>Options</small>',
);

$options[]      = array(
	'name'        => 'general',
	'title'       => 'General',
	'icon'        => 'fa fa-star',
	'fields'      => array(
		array(
			'id'      => 'site_favicon',
			'type'    => 'upload',
			'title'   => 'Website Favicon',
			'desc' => 'Changes the website favicon'
		),
		array(
			'id'      => 'site_logo',
			'type'    => 'upload',
			'title'   => 'Website Logo',
			'desc' => 'Changes the website Logo from the header'
		),
		array(
			'id'      => 'page_layout_text',
			'type'    => 'text',
			'title'   => 'Page Layout Media Title',
			'desc' => 'Changes: As seen or heard on...'
		),
	), // end: fields
);

$options[]      = array(
	'name'        => 'slider_settings',
	'title'       => 'Index Slider',
	'icon'        => 'fa fa-picture-o',
	'fields'      => array(
		array(
			'id'      => 'slider_name',
			'type'    => 'text',
			'title'   => 'Slider name',
			'desc' => 'If you have the Revolution slider plugin activated and you have created a slider, give that slider\'s name here to show it on the index page'
		)
	), // end: fields
);

$options[]      = array(
	'name'        => 'section1',
	'title'       => 'Video Section',
	'icon'        => 'fa fa-youtube',
	'fields'      => array(
		array(
			'id'      => 'section1_title',
			'type'    => 'text',
			'title'   => 'Title',
			'desc' => 'Changes: American Demo Financial'
		),
		array(
			'id'      => 'section1_video_link',
			'type'    => 'text',
			'title'   => 'Video embed link',
			'desc' => 'Changes the video link, if you add someyoutube embed link'
		)
	), // end: fields
);

$options[]      = array(
	'name'        => 'section2',
	'title'       => 'Services Section',
	'icon'        => 'fa fa-cogs',
	'fields'      => array(
		array(
			'id'      => 'section2_title',
			'type'    => 'text',
			'title'   => 'Title',
			'desc' => 'Changes: Overview of Services'
		),
		array(
			'id'      => 'section2_subtitle',
			'type'    => 'textarea',
			'title'   => 'Subtitle',
			'desc' => 'Changes: At American Demo Financial we ...'
		),
		array(
			'id'      => 'section2_shortcode',
			'type'    => 'text',
			'title'   => 'Shortcode',
			'desc' => 'Something like: [carousel-horizontal-posts-content-slider]'
		)
	) // end: fields
);

$options[]      = array(
	'name'        => 'section3',
	'title'       => 'News Section',
	'icon'        => 'fa fa-newspaper-o',
	'fields'      => array(
		array(
			'id'      => 'section3_title',
			'type'    => 'text',
			'title'   => 'Title',
			'desc' => 'Changes: Financial News'
		),
		array(
			'id'      => 'section3_subtitle',
			'type'    => 'textarea',
			'title'   => 'Subtitle',
			'desc' => 'Changes: It is important to feel ...'
		),
		array(
			'id'      => 'news_items_nr',
			'type'    => 'text',
			'title'   => 'Articles to show',
			'desc' => 'Defaults to 2 articles, accepts values like 2, 4, 6 etc...'
		),
		array(
			'id'      => 'section3_ttlcolor',
			'type'    => 'color_picker',
			'title'   => 'Title text color',
			'desc' => 'Defaults to black'
		),
		array(
			'id'      => 'section3_ttlbgcolor',
			'type'    => 'color_picker',
			'title'   => 'Title background color',
			'desc' => 'Default is a transparent pink'
		),
		array(
			'id'      => 'section3_bgimg',
			'type'    => 'upload',
			'title'   => 'Section Background Image',
			'desc' => 'Defaults to a sakura park image'
		),
	), // end: fields
);

$options[]      = array(
	'name'        => 'section4',
	'title'       => 'Team Section',
	'icon'        => 'fa fa-user',
	'fields'      => array(
		array(
			'id'      => 'section4_title',
			'type'    => 'text',
			'title'   => 'Title',
			'desc' => 'Changes: Our Team'
		),
		array(
			'id'      => 'section4_subtitle',
			'type'    => 'textarea',
			'title'   => 'Subtitle',
			'desc' => 'Changes: The team at this Demo Agency ...'
		),
		array(
			'id'      => 'section4_btn_title',
			'type'    => 'text',
			'title'   => 'Button title',
			'desc' => 'Changes: About Us'
		),
		array(
			'id'      => 'section4_btn_link',
			'type'    => 'text',
			'title'   => 'Button URL',
			'desc' => 'you may want to put the about page link in here'
		)
	) // end: fields
);

$options[]      = array(
	'name'        => 'section5',
	'title'       => 'Contact Us Section',
	'icon'        => 'fa fa-envelope',
	'fields'      => array(
		array(
			'id'      => 'section5_title',
			'type'    => 'text',
			'title'   => 'Title',
			'desc' => 'Changes: We\'re standing by ...'
		),
		array(
			'id'      => 'section5_subtitle',
			'type'    => 'textarea',
			'title'   => 'Subtitle',
			'desc' => 'Changes: If you would like to learn more about ...'
		),
		array(
			'id'      => 'section5_btn_title',
			'type'    => 'text',
			'title'   => 'Button title',
			'desc' => 'Changes: Contact Us'
		),
		array(
			'id'      => 'section5_btn_link',
			'type'    => 'text',
			'title'   => 'Button URL',
			'desc' => 'you may want to put the contact page link in here'
		),
		array(
			'id'      => 'section5_bgimg',
			'type'    => 'upload',
			'title'   => 'Section Background Image',
			'desc' => 'Defaults to an office image'
		),
	) // end: fields
);

$options[]      = array(
	'name'        => 'section6',
	'title'       => 'Events Section',
	'icon'        => 'fa fa-calendar',
	'fields'      => array(
		array(
			'id'      => 'section6_title',
			'type'    => 'text',
			'title'   => 'Title',
			'desc' => 'Changes: Upcoming Events'
		),
		array(
			'id'      => 'section6_subtitle',
			'type'    => 'textarea',
			'title'   => 'Subtitle',
			'desc' => 'Changes: Are you prepared to avoid ...'
		)
	), // end: fields
);

$options[]      = array(
	'name'        => 'section7',
	'title'       => 'Gray Footer Section',
	'icon'        => 'fa fa-th-large',
	'fields'      => array(
		array(
			'id'      => 'section7_bgcolor',
			'type'    => 'color_picker',
			'title'   => 'Background color',
			'desc' => 'Defaults to Dark Gray'
		),
		array(
			'id'        => 'fieldset_col_1',
			'type'      => 'fieldset',
			'un_array'  => true,
			'title'     => 'Col 1 Settings',
			'fields'    => array(
				array(
					'id'    => 'section7_col1_use_html',
					'type'  => 'switcher',
					'title' => 'Col 1 Use HTML ?',
					'label' => 'Do you want to use the default content or to add some custom HTML for this column ?',
				),
				array(
					'id'       => 'section7_col1_html',
					'type'     => 'wysiwyg',
					'title'    => 'Column 1 Content',
					'settings' => array(
						'textarea_rows' => 5,
						'tinymce'       => true,
						'media_buttons' => true,
					),
					'desc' => 'Use this editor to replace the first column\'s content',
					'dependency' => array( 'section7_col1_use_html', '==', 'true' ) // dependency rule
				)
			),
		),
		array(
			'id'        => 'fieldset_col_2',
			'type'      => 'fieldset',
			'un_array'  => true,
			'title'     => 'Col 2 Settings',
			'fields'    => array(
				array(
					'id'    => 'section7_col2_use_html',
					'type'  => 'switcher',
					'title' => 'Col 2 Use HTML ?',
					'label' => 'Do you want to use the default content or to add some custom HTML for this column ?',
				),
				array(
					'id'       => 'section7_col2_html',
					'type'     => 'wysiwyg',
					'title'    => 'Column 2 Content',
					'settings' => array(
						'textarea_rows' => 5,
						'tinymce'       => true,
						'media_buttons' => true,
					),
					'desc' => 'Use this editor to replace the second column\'s content',
					'dependency' => array( 'section7_col2_use_html', '==', 'true' ) // dependency rule
				),
			)
		),
		array(
			'id'        => 'fieldset_col_3',
			'type'      => 'fieldset',
			'un_array'  => true,
			'title'     => 'Col 3 Settings',
			'fields'    => array(
				array(
					'id'    => 'section7_col3_use_html',
					'type'  => 'switcher',
					'title' => 'Col 3 Use HTML ?',
					'label' => 'Do you want to use the default content or to add some custom HTML for this column ?',
				),
				array(
					'id'       => 'section7_col3_html',
					'type'     => 'wysiwyg',
					'title'    => 'Column 3 Content',
					'settings' => array(
						'textarea_rows' => 5,
						'tinymce'       => true,
						'media_buttons' => true,
					),
					'desc' => 'Use this editor to replace the third column\'s content',
					'dependency' => array( 'section7_col3_use_html', '==', 'true' ) // dependency rule
				),
			)
		),
		array(
			'id'        => 'fieldset_col_4',
			'type'      => 'fieldset',
			'un_array'  => true,
			'title'     => 'Col 4 Settings',
			'fields'    => array(
				array(
					'id'    => 'section7_col4_use_html',
					'type'  => 'switcher',
					'title' => 'Col 4 Use HTML ?',
					'label' => 'Do you want to use the default content or to add some custom HTML for this column ?',
				),
				array(
					'id'       => 'section7_col4_html',
					'type'     => 'wysiwyg',
					'title'    => 'Column 4 Content',
					'settings' => array(
						'textarea_rows' => 5,
						'tinymce'       => true,
						'media_buttons' => true,
					),
					'desc' => 'Use this editor to replace the third column\'s content',
					'dependency' => array( 'section7_col4_use_html', '==', 'true' ) // dependency rule
				),
			)
		),

		
	), // end: fields
);

$options[]      = array(
	'name'        => 'team_page',
	'title'       => 'Team Page',
	'icon'        => 'fa fa-user',
	'fields'      => array(
		array(
			'id'      => 'team_members_number',
			'type'    => 'text',
			'title'   => 'Members to show',
			'desc' 	=> 'Accepts 3, 6, 9 members to show in the grid on the team page.',
			'default'	=> 9
		)
	), // end: fields
);

$options[]      = array(
	'name'        => 'services_page',
	'title'       => 'Services Page',
	'icon'        => 'fa fa-cubes',
	'fields'      => array(
		array(
			'id'      => 'services_number',
			'type'    => 'text',
			'title'   => 'Services to show',
			'desc' 	=> 'Accepts 3, 6, 9 services to show in the grid on the services page.',
			'default'	=> 9
		),
		array(
			'id'      => 'services_title_color',
			'type'    => 'color_picker',
			'title'   => 'Services title color',
			'desc' 	=> 'Default it is white, #fff'
		),
		array(
			'id'      => 'services_background_color',
			'type'    => 'color_picker',
			'title'   => 'Services title background color',
			'desc' 	=> 'The default is almost black, you can choose the opaciti of the color right from here'
		),
	), // end: fields
);

$options[]      = array(
	'name'        => 'press_page',
	'title'       => 'Media Page',
	'icon'        => 'fa fa-cubes',
	'fields'      => array(
		array(
			'id'      => 'press_number',
			'type'    => 'text',
			'title'   => 'Media items to show',
			'desc' 	=> 'Accepts 3, 6, 9 12 items to show in the grid on the media page.',
			'default'  => 12
		)
	), // end: fields
);

$options[]      = array(
	'name'        => 'footer',
	'title'       => 'Footer',
	'icon'        => 'fa fa-star',
	'fields'      => array(
		array(
			'id'       => 'footer_copyrights',
			'type'     => 'text',
			'title'    => 'Footer Copyrights',
			'desc' => 'Use this editor to replace the footer\'s content'
		)
	), // end: fields
);
CSFramework::instance( $settings, $options );