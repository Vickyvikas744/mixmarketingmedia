<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'digital_advertising_agency_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'digital-advertising-agency' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_advertising_agency_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'digital-advertising-agency' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-advertising-agency' ),
			'off' => esc_html__( 'Disable', 'digital-advertising-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_advertising_agency_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'digital-advertising-agency' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-advertising-agency' ),
			'off' => esc_html__( 'Disable', 'digital-advertising-agency' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'digital_advertising_agency_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'digital-advertising-agency' ),
	) );

	Kirki::add_section( 'digital_advertising_agency_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'digital-advertising-agency' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_all_headings_typography',
		'section'     => 'digital_advertising_agency_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'digital_advertising_agency_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'digital-advertising-agency' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_body_content_typography',
		'section'     => 'digital_advertising_agency_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'digital_advertising_agency_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'digital-advertising-agency' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'digital_advertising_agency_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'digital-advertising-agency' ),
	) );

	// COLOR SECTION

	Kirki::add_section( 'digital_advertising_agency_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'digital-advertising-agency' ),
	    'panel'          => 'digital_advertising_agency_panel_id',
	    'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_global_colors',
		'section'     => 'digital_advertising_agency_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'digital_advertising_agency_global_color',
		'label'       => __( 'choose your Appropriate Color', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_section_color',
		'default'     => '#f0017b',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'digital_advertising_agency_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_section_color',
		'default'     => '#6c0daf',
	] );

	// Additional Settings

	Kirki::add_section( 'digital_advertising_agency_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'digital-advertising-agency' ),
	    'description'    => esc_html__( 'Scroll To Top', 'digital-advertising-agency' ),
	    'panel'          => 'digital_advertising_agency_panel_id',
	    'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_advertising_agency_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'digital_advertising_agency_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'digital-advertising-agency' ),
			'Center' => esc_html__( 'Center', 'digital-advertising-agency' ),
			'Right'  => esc_html__( 'Right', 'digital-advertising-agency' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'digital_advertising_agency_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'digital-advertising-agency' ),
		'section'  => 'digital_advertising_agency_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_digital_advertising_agency',
		'label'       => esc_html__( 'Menus Text Transform', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'digital-advertising-agency' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'digital-advertising-agency' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'digital-advertising-agency' ),

		],
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'digital_advertising_agency_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_additional_settings',
		'default' => 'Zoom Out',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'Zoomout' => __('Zoom Out','digital-advertising-agency'),
            'Zoominn' => __('Zoom Inn','digital-advertising-agency'),
            
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'digital_advertising_agency_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_advertising_agency_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'digital_advertising_agency_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_additional_settings',
		'default' => 'One Column',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','digital-advertising-agency'),
            'Right Sidebar' => __('Right Sidebar','digital-advertising-agency'),
            'One Column' => __('One Column','digital-advertising-agency')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'digital_advertising_agency_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'digital-advertising-agency' ),
			'description'    => esc_html__( 'Shop Page', 'digital-advertising-agency' ),
			'panel'          => 'digital_advertising_agency_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_advertising_agency_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_advertising_agency_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_advertising_agency_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
		[
			'settings' => 'digital_advertising_agency_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'digital-advertising-agency' ),
			'section'  => 'digital_advertising_agency_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'digital_advertising_agency_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'digital-advertising-agency' ),
			'section'  => 'digital_advertising_agency_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
	);

		new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'digital-advertising-agency' ),
		'section'  => 'digital_advertising_agency_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'digital-advertising-agency' ),
		'section'  => 'digital_advertising_agency_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'digital_advertising_agency_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','digital-advertising-agency'),
            'Right Sidebar' => __('Right Sidebar','digital-advertising-agency')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'digital_advertising_agency_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','digital-advertising-agency'),
            'Right Sidebar' => __('Right Sidebar','digital-advertising-agency')
		],
	] );

	new \Kirki\Field\Radio_Buttonset( [
		'settings'    => 'digital_advertising_agency_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'digital-advertising-agency' ),
			'Center' => esc_html__( 'Center', 'digital-advertising-agency' ),
			'Right'  => esc_html__( 'Right', 'digital-advertising-agency' ),
		],
	]
	);

}

	// POST SECTION

	Kirki::add_section( 'digital_advertising_agency_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'digital-advertising-agency' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'digital-advertising-agency' ),
	    'panel'          => 'digital_advertising_agency_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'digital_advertising_agency_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'digital-advertising-agency' ),
		'section'  => 'digital_advertising_agency_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'digital-advertising-agency' ),
			'option2' => esc_html__( 'Post Title', 'digital-advertising-agency' ),
			'option3' => esc_html__( 'Post Content', 'digital-advertising-agency' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'digital_advertising_agency_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_advertising_agency_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'digital_advertising_agency_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','digital-advertising-agency'),
            'Right Sidebar' => __('Right Sidebar','digital-advertising-agency'),
            'Three Column' => __('Three Column','digital-advertising-agency'),
            'Four Column' => __('Four Column','digital-advertising-agency'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','digital-advertising-agency'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','digital-advertising-agency'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','digital-advertising-agency')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'digital_advertising_agency_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','digital-advertising-agency'),
            'Right Sidebar' => __('Right Sidebar','digital-advertising-agency'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'digital_advertising_agency_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','digital-advertising-agency'),
            'Right Sidebar' => __('Right Sidebar','digital-advertising-agency'),
            'Three Column' => __('Three Column','digital-advertising-agency'),
            'Four Column' => __('Four Column','digital-advertising-agency'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','digital-advertising-agency'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','digital-advertising-agency'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','digital-advertising-agency')
		],
	] );

	Kirki::add_field( 'digital_advertising_agency_config', [
		'type'        => 'select',
		'settings'    => 'digital_advertising_agency_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'digital-advertising-agency' ),
				'2' => __( '2 Column', 'digital-advertising-agency' ),
			],
	] );

		// Breadcrumb
	Kirki::add_section( 'digital_advertising_agency_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'digital-advertising-agency' ),
	    'description'    => esc_html__( 'Here you can get Breadcrumb settings', 'digital-advertising-agency' ),
	    'panel'          => 'digital_advertising_agency_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_enable_breadcrumb_heading',
		'section'     => 'digital_advertising_agency_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_advertising_agency_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-advertising-agency' ),
			'off' => esc_html__( 'Disable', 'digital-advertising-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'digital_advertising_agency_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'digital-advertising-agency' ),
        'section'  => 'digital_advertising_agency_bradcrumb',
    ] );


	// HEADER SECTION

	Kirki::add_section( 'digital_advertising_agency_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'digital-advertising-agency' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'digital-advertising-agency' ),
	    'panel'          => 'digital_advertising_agency_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_enable_location_heading',
		'section'     => 'digital_advertising_agency_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Announcement Text', 'digital-advertising-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'digital_advertising_agency_annocment_text' ,
        'section'  => 'digital_advertising_agency_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_enable_myaccount_heading',
		'section'     => 'digital_advertising_agency_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Contact Us Button', 'digital-advertising-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'label'       => esc_html__( 'Button Text', 'digital-advertising-agency' ),
        'settings' => 'digital_advertising_agency_contact_text' ,
        'section'  => 'digital_advertising_agency_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'label'       => esc_html__( 'Button URL', 'digital-advertising-agency' ),
        'settings' => 'digital_advertising_agency_contact_link' ,
        'section'  => 'digital_advertising_agency_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_enable_socail_link',
		'section'     => 'digital_advertising_agency_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'digital_advertising_agency_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'digital-advertising-agency' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'digital-advertising-agency' ),
		'settings'     => 'digital_advertising_agency_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'digital-advertising-agency' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'digital-advertising-agency' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'digital-advertising-agency' ),
				'description' => esc_html__( 'Add the social icon url here.', 'digital-advertising-agency' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'digital_advertising_agency_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'digital-advertising-agency' ),
        'panel'          => 'digital_advertising_agency_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_enable_heading',
		'section'     => 'digital_advertising_agency_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_advertising_agency_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-advertising-agency' ),
			'off' => esc_html__( 'Disable', 'digital-advertising-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_advertising_agency_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-advertising-agency' ),
			'off' => esc_html__( 'Disable', 'digital-advertising-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_advertising_agency_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-advertising-agency' ),
			'off' => esc_html__( 'Disable', 'digital-advertising-agency' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_slider_heading',
		'section'     => 'digital_advertising_agency_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'digital_advertising_agency_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'digital_advertising_agency_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'digital-advertising-agency' ),
		'priority'    => 10,
		'choices'     => digital_advertising_agency_get_categories_select(),
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_slider_phone_heading',
		'section'     => 'digital_advertising_agency_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => 'Phone Text',
		'settings' => 'digital_advertising_agency_phone_text',
		'section'  => 'digital_advertising_agency_blog_slide_section',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => 'Phone Number',
		'settings' => 'digital_advertising_agency_phone_number',
		'section'  => 'digital_advertising_agency_blog_slide_section',
		'default'  => '',
	] );

	// ABOUT US SECTION

	Kirki::add_section( 'digital_advertising_agency_about_us_section', array(
        'title'          => esc_html__( 'About Us Settings', 'digital-advertising-agency' ),
        'panel'          => 'digital_advertising_agency_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_about_us_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_about_us_section_enable_heading',
		'section'     => 'digital_advertising_agency_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable About Us Section', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_advertising_agency_about_us_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_about_us_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-advertising-agency' ),
			'off' => esc_html__( 'Disable', 'digital-advertising-agency' ),
		],
	] );

	new \Kirki\Field\Image(
		[
			'settings'    => 'digital_advertising_agency_about_us_image',
			'label'       => esc_html__( 'Image', 'digital-advertising-agency' ),
			'description' => esc_html__( 'About Image.', 'digital-advertising-agency' ),
			'section'     => 'digital_advertising_agency_about_us_section',
			'default'     => '',
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_about_us_section_title_heading',
		'section'     => 'digital_advertising_agency_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Title', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_advertising_agency_about_us_section_title',
		'section'  => 'digital_advertising_agency_about_us_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_about_us_section_title_headingss',
		'section'     => 'digital_advertising_agency_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Main Title', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_advertising_agency_about_us_main_section_title',
		'section'  => 'digital_advertising_agency_about_us_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_about_us_section_title_headingsss',
		'section'     => 'digital_advertising_agency_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Content', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_advertising_agency_about_us_section_content',
		'section'  => 'digital_advertising_agency_about_us_section',
		'default'  => '',
		'priority' => 10,
	] );

	new \Kirki\Field\Number(
		[
			'settings' => 'digital_advertising_agency_about_us_progress_count',
			'label'    => esc_html__( 'List Control', 'digital-advertising-agency' ),
			'section'  => 'digital_advertising_agency_about_us_section',
			'default'  => '',
			'choices'  => [
				'min'  => 0,
				'max'  => 5,
				'step' => 1,
			],
		]
	);

	$digital_advertising_agency_progress_count = get_theme_mod('digital_advertising_agency_about_us_progress_count');

	for ($i=1; $i <= $digital_advertising_agency_progress_count; $i++) { 
		
		new \Kirki\Field\Text(
			[
				'settings' => 'digital_advertising_agency_about_us_list'.$i,
				'label'    => esc_html__( 'List ', 'digital-advertising-agency' ).$i,
				'section'  => 'digital_advertising_agency_about_us_section',
			]
		);

	}

	// FOOTER SECTION

	Kirki::add_section( 'digital_advertising_agency_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'digital-advertising-agency' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'digital-advertising-agency' ),
        'panel'          => 'digital_advertising_agency_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'digital-advertising-agency' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'digital-advertising-agency' ) . '</a><br><a class="premium_info_bundle" target="_blank" href="' . esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ) . '">' . __( 'GET ALL THEMES', 'digital-advertising-agency' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'digital_advertising_agency_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'digital-advertising-agency' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_footer_enable_heading',
		'section'     => 'digital_advertising_agency_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_advertising_agency_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-advertising-agency' ),
			'off' => esc_html__( 'Disable', 'digital-advertising-agency' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_advertising_agency_footer_text_heading',
		'section'     => 'digital_advertising_agency_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'digital-advertising-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_advertising_agency_footer_text',
		'section'  => 'digital_advertising_agency_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'digital_advertising_agency_footer_text_heading_2',
	'section'     => 'digital_advertising_agency_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'digital-advertising-agency' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'digital_advertising_agency_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'digital-advertising-agency' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'digital-advertising-agency' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'digital-advertising-agency' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'digital-advertising-agency' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'digital_advertising_agency_footer_text_heading_1',
	'section'     => 'digital_advertising_agency_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'digital-advertising-agency' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'digital_advertising_agency_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'digital-advertising-agency' ),
		'section'     => 'digital_advertising_agency_footer_section',
		'default'     => '',
	] );
}

/*
 *  Customizer Notifications
 */

$digital_advertising_agency_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'digital-advertising-agency' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'digital-advertising-agency' ) . '</strong>'
            ),
        ),
    ),
    'digital_advertising_agency_recommended_actions'       => array(),
    'digital_advertising_agency_recommended_actions_title' => esc_html__( 'Recommended Actions', 'digital-advertising-agency' ),
    'digital_advertising_agency_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'digital-advertising-agency' ),
    'digital_advertising_agency_install_button_label'      => esc_html__( 'Install and Activate', 'digital-advertising-agency' ),
    'digital_advertising_agency_activate_button_label'     => esc_html__( 'Activate', 'digital-advertising-agency' ),
    'digital_advertising_agency_deactivate_button_label'   => esc_html__( 'Deactivate', 'digital-advertising-agency' ),
);

Digital_Advertising_Agency_Customizer_Notify::init( apply_filters( 'digital_advertising_agency_customizer_notify_array', $digital_advertising_agency_config_customizer ) );