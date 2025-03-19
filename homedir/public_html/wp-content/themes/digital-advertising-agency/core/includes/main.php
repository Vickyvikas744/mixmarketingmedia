<?php
/**
* Get started notice
*/

add_action( 'wp_ajax_digital_advertising_agency_dismissed_notice_handler', 'digital_advertising_agency_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function digital_advertising_agency_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function digital_advertising_agency_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {?>

            <?php
            require_once get_template_directory() .'/core/includes/demo-import.php';
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_digital-advertising-agency-guide-page') {
             $digital_advertising_agency_comments_theme = wp_get_theme(); ?>
            <div class="digital-advertising-agency-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="digital-advertising-agency-notice">
				<div class="digital-advertising-agency-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'digital-advertising-agency'); ?>">
				</div>
				<div class="digital-advertising-agency-notice-content">
				<div class="digital-advertising-agency-notice-heading"><?php esc_html_e('Thanks for installing ','digital-advertising-agency'); ?><?php echo esc_html( $digital_advertising_agency_comments_theme ); ?> <?php esc_html_e('Theme','digital-advertising-agency'); ?></div>
				<p><?php echo esc_html('Get started with the wordpress theme installation','digital-advertising-agency'); ?></p>
				<div class="diplay-flex-btn">
					<a class="button button-primary" href="<?php echo esc_url(admin_url('themes.php?page=digital-advertising-agency-guide-page')); ?>"><?php echo esc_html('More Option','digital-advertising-agency'); ?></a>
					<?php if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){ ?>
			    		<a class="button button-success" href="<?php echo esc_url(home_url()); ?>" target="_blank"><?php echo esc_html('Go to Homepage','digital-advertising-agency'); ?></a> <span class="imp-success"><?php echo esc_html('Imported Successfully','digital-advertising-agency'); ?></span>
			    	<?php } else { ?>
					<form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php" method="POST">
			        	<input  type="submit" name="submit" value="<?php esc_attr_e('Demo Import','digital-advertising-agency'); ?>" class="button button-primary">
			    	</form>
			    	<?php } ?>
				</div>
			</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'digital_advertising_agency_deprecated_hook_admin_notice' );

function digital_advertising_agency_admin_enqueue_scripts() {
	wp_enqueue_style( 'digital-advertising-agency-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'digital-advertising-agency-admin-script', get_template_directory_uri() . '/js/digital-advertising-agency-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'digital-advertising-agency-admin-script', 'digital_advertising_agency_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
     wp_enqueue_script( 'digital-advertising-agency-demo-script', get_template_directory_uri() . '/js/demo-script.js', array( 'jquery' ), '', true );
}
add_action( 'admin_enqueue_scripts', 'digital_advertising_agency_admin_enqueue_scripts' );

add_action( 'admin_menu', 'digital_advertising_agency_getting_started' );
function digital_advertising_agency_getting_started() {
	add_theme_page( esc_html__('Get Started', 'digital-advertising-agency'), esc_html__('Get Started', 'digital-advertising-agency'), 'edit_theme_options', 'digital-advertising-agency-guide-page', 'digital_advertising_agency_test_guide');
}
if ( ! defined( 'DIGITAL_ADVERTISING_AGENCY_DOCS_FREE' ) ) {
define('DIGITAL_ADVERTISING_AGENCY_DOCS_FREE',__('https://demo.misbahwp.com/docs/digital-advertising-agency-free-docs/','digital-advertising-agency'));
}
 if ( ! defined( 'DIGITAL_ADVERTISING_AGENCY_DOCS_PRO' ) ) {
define('DIGITAL_ADVERTISING_AGENCY_DOCS_PRO',__('https://demo.misbahwp.com/docs/digital-advertising-agency-pro-docs/','digital-advertising-agency'));
}
if ( ! defined( 'DIGITAL_ADVERTISING_AGENCY_BUY_NOW' ) ) {
define('DIGITAL_ADVERTISING_AGENCY_BUY_NOW',__('https://www.misbahwp.com/products/advertising-agency-wordpress-theme','digital-advertising-agency'));
}
if ( ! defined( 'DIGITAL_ADVERTISING_AGENCY_SUPPORT_FREE' ) ) {
define('DIGITAL_ADVERTISING_AGENCY_SUPPORT_FREE',__('https://wordpress.org/support/theme/digital-advertising-agency/','digital-advertising-agency'));
}
if ( ! defined( 'DIGITAL_ADVERTISING_AGENCY_REVIEW_FREE' ) ) {
define('DIGITAL_ADVERTISING_AGENCY_REVIEW_FREE',__('https://wordpress.org/support/theme/digital-advertising-agency/reviews/#new-post','digital-advertising-agency'));
}
if ( ! defined( 'DIGITAL_ADVERTISING_AGENCY_DEMO_PRO' ) ) {
define('DIGITAL_ADVERTISING_AGENCY_DEMO_PRO',__('https://demo.misbahwp.com/digital-advertising-agency/','digital-advertising-agency'));
}
if( ! defined( 'DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE' ) ) {
define('DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','digital-advertising-agency'));
}

function digital_advertising_agency_test_guide() { ?>
	<?php $digital_advertising_agency_theme = wp_get_theme();
	require_once get_template_directory() .'/core/includes/demo-import.php'; ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( DIGITAL_ADVERTISING_AGENCY_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'digital-advertising-agency' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'digital-advertising-agency' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( DIGITAL_ADVERTISING_AGENCY_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'digital-advertising-agency' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( DIGITAL_ADVERTISING_AGENCY_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'digital-advertising-agency' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','digital-advertising-agency'); ?><?php echo esc_html( $digital_advertising_agency_theme ); ?>  <span><?php esc_html_e('Version: ', 'digital-advertising-agency'); ?><?php echo esc_html($digital_advertising_agency_theme['Version']);?></span></h3>
				<div class="demo-import-box">
					<h4><?php echo esc_html('Import homepage demo in just one click.','digital-advertising-agency'); ?></h4>
					<p><?php echo esc_html('Get started with the wordpress theme installation','digital-advertising-agency'); ?></p>
					<?php if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){ ?>
			    		<span class="imp-success"><?php echo esc_html('Imported Successfully','digital-advertising-agency'); ?></span>  <a class="button button-success" href="<?php echo esc_url(home_url()); ?>" target="_blank"><?php echo esc_html('Go to Homepage','digital-advertising-agency'); ?></a>
			    	<?php } else { ?>
					<form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php" method="POST">
			        	<input  type="submit" name="submit" value="<?php esc_attr_e('Demo Import','digital-advertising-agency'); ?>" class="button button-primary">
			    	</form>
			    	<?php } ?>
				</div>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $digital_advertising_agency_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$digital_advertising_agency_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $digital_advertising_agency_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'digital-advertising-agency' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','digital-advertising-agency'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( DIGITAL_ADVERTISING_AGENCY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'digital-advertising-agency' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( DIGITAL_ADVERTISING_AGENCY_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'digital-advertising-agency' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( DIGITAL_ADVERTISING_AGENCY_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'digital-advertising-agency' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'digital-advertising-agency' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','digital-advertising-agency'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','digital-advertising-agency'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','digital-advertising-agency'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( DIGITAL_ADVERTISING_AGENCY_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'digital-advertising-agency' ) ?></a>
					</div>
				</div>
				<div class="d-table">
				    <ul class="d-column">
				      <li class="feature"><?php esc_html_e('Features','digital-advertising-agency'); ?></li>
				      <li class="free"><?php esc_html_e('Pro','digital-advertising-agency'); ?></li>
				      <li class="plus"><?php esc_html_e('Free','digital-advertising-agency'); ?></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('24hrs Priority Support','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('LearnPress Campatiblity','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Kirki Framework','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Posttype','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('One Click Demo Import','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Section Reordering','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Enable / Disable Option','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Multiple Sections','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Color Pallete','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Widgets','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Page Templates','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Typography','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Section Background Image / Color ','digital-advertising-agency'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
		  		</div>
			</div>
		</div>
	</div>

<?php } ?>
