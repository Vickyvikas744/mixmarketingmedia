<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function digital_advertising_agency_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'digital-advertising-agency' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	digital_advertising_agency_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'digital_advertising_agency_register_recommended_plugins' );