<?php

class Digital_Advertising_Agency_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $digital_advertising_agency_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $digital_advertising_agency_recommended_actions_title;
	
	private $digital_advertising_agency_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $digital_advertising_agency_install_button_label;
	
	private $digital_advertising_agency_activate_button_label;
	
	private $digital_advertising_agency_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Digital_Advertising_Agency_Customizer_Notify ) ) {
			self::$instance = new Digital_Advertising_Agency_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $digital_advertising_agency_customizer_notify_recommended_plugins;
		global $digital_advertising_agency_customizer_notify_digital_advertising_agency_recommended_actions;

		global $digital_advertising_agency_install_button_label;
		global $digital_advertising_agency_activate_button_label;
		global $digital_advertising_agency_deactivate_button_label;

		$this->digital_advertising_agency_recommended_actions = isset( $this->config['digital_advertising_agency_recommended_actions'] ) ? $this->config['digital_advertising_agency_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->digital_advertising_agency_recommended_actions_title = isset( $this->config['digital_advertising_agency_recommended_actions_title'] ) ? $this->config['digital_advertising_agency_recommended_actions_title'] : '';
		$this->digital_advertising_agency_recommended_plugins_title = isset( $this->config['digital_advertising_agency_recommended_plugins_title'] ) ? $this->config['digital_advertising_agency_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$digital_advertising_agency_customizer_notify_recommended_plugins = array();
		$digital_advertising_agency_customizer_notify_digital_advertising_agency_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$digital_advertising_agency_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->digital_advertising_agency_recommended_actions ) ) {
			$digital_advertising_agency_customizer_notify_digital_advertising_agency_recommended_actions = $this->digital_advertising_agency_recommended_actions;
		}

		$digital_advertising_agency_install_button_label    = isset( $this->config['digital_advertising_agency_install_button_label'] ) ? $this->config['digital_advertising_agency_install_button_label'] : '';
		$digital_advertising_agency_activate_button_label   = isset( $this->config['digital_advertising_agency_activate_button_label'] ) ? $this->config['digital_advertising_agency_activate_button_label'] : '';
		$digital_advertising_agency_deactivate_button_label = isset( $this->config['digital_advertising_agency_deactivate_button_label'] ) ? $this->config['digital_advertising_agency_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'digital_advertising_agency_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'digital_advertising_agency_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'digital_advertising_agency_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'digital_advertising_agency_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function digital_advertising_agency_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'digital-advertising-agency-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/digital-advertising-agency-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'digital-advertising-agency-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/digital-advertising-agency-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'digital-advertising-agency-customizer-notify-js', 'digitaladvertisingagencyCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'digital-advertising-agency' ),
			)
		);

	}

	
	public function digital_advertising_agency_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/digital-advertising-agency-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Digital_Advertising_Agency_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Digital_Advertising_Agency_Customizer_Notify_Section(
				$wp_customize,
				'digital-advertising-agency-customizer-notify-section',
				array(
					'title'          => $this->digital_advertising_agency_recommended_actions_title,
					'plugin_text'    => $this->digital_advertising_agency_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function digital_advertising_agency_customizer_notify_dismiss_recommended_action_callback() {

		global $digital_advertising_agency_customizer_notify_digital_advertising_agency_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'digital_advertising_agency_customizer_notify_show' ) ) {

				$digital_advertising_agency_customizer_notify_show_digital_advertising_agency_recommended_actions = get_option( 'digital_advertising_agency_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$digital_advertising_agency_customizer_notify_show_digital_advertising_agency_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$digital_advertising_agency_customizer_notify_show_digital_advertising_agency_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'digital_advertising_agency_customizer_notify_show', $digital_advertising_agency_customizer_notify_show_digital_advertising_agency_recommended_actions );

				
			} else {
				$digital_advertising_agency_customizer_notify_show_digital_advertising_agency_recommended_actions = array();
				if ( ! empty( $digital_advertising_agency_customizer_notify_digital_advertising_agency_recommended_actions ) ) {
					foreach ( $digital_advertising_agency_customizer_notify_digital_advertising_agency_recommended_actions as $digital_advertising_agency_lite_customizer_notify_recommended_action ) {
						if ( $digital_advertising_agency_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$digital_advertising_agency_customizer_notify_show_digital_advertising_agency_recommended_actions[ $digital_advertising_agency_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$digital_advertising_agency_customizer_notify_show_digital_advertising_agency_recommended_actions[ $digital_advertising_agency_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'digital_advertising_agency_customizer_notify_show', $digital_advertising_agency_customizer_notify_show_digital_advertising_agency_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function digital_advertising_agency_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$digital_advertising_agency_lite_customizer_notify_show_recommended_plugins = get_option( 'digital_advertising_agency_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$digital_advertising_agency_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$digital_advertising_agency_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'digital_advertising_agency_customizer_notify_show_recommended_plugins', $digital_advertising_agency_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
