<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'digital-advertising-agency' ); ?></a>

<?php if ( get_theme_mod('digital_advertising_agency_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'digital-advertising-agency' ); ?></h1>
    </div>
<?php endif; ?>

<div class="header-box">
	<?php if ( get_theme_mod('digital_advertising_agency_annocment_text') ) : ?>
		<div class="top-header text-center text-md-start">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-12">
					</div>
					<div class="col-lg-9 col-md-12">
						<p class="mb-0 text-center text-md-start"><?php echo esc_html(get_theme_mod('digital_advertising_agency_annocment_text'));?></p>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<header id="site-navigation">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 align-self-center">
					<div class="logo text-center">
			    		<div class="logo-image">
			    			<?php the_custom_logo(); ?>
				    	</div>
				    	<div class="logo-content">
					    	<?php
					    		if ( get_theme_mod('digital_advertising_agency_display_header_title', true) == true ) :
						      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      			echo esc_html(get_bloginfo('name'));
						      		echo '</a>';
						      	endif;

						      	if ( get_theme_mod('digital_advertising_agency_display_header_text', false) == true ) :
					      			echo '<span>'. esc_html(get_bloginfo('description')) . '</span>';
					      		endif;
				    		?>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-12 align-self-center box-shadow-box">
					<div class="header-inner">
						<div class="row">
							<div class="col-lg-8 col-md-12 align-self-center text-center">
								<button class="menu-toggle toggle-menu my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
									<span aria-hidden="true"><?php esc_html_e( 'Menu', 'digital-advertising-agency' ); ?></span>
								</button>
								<nav id="main-menu" class="close-panal main-menu">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'main-menu',
											'container' => 'false'
										));
									?>
									<button class="close-menu close-menu my-2 p-2" type="button">
										<span aria-hidden="true"><i class="fa fa-times"></i></span>
									</button>
								</nav>
							</div>
							<div class="col-lg-2 col-md-6 align-self-center text-md-end text-center">
								<?php $digital_advertising_agency_settings = get_theme_mod( 'digital_advertising_agency_social_links_settings' ); ?>
									<div class="social-links">
										<?php if ( is_array($digital_advertising_agency_settings) || is_object($digital_advertising_agency_settings) ){ ?>
								    		<?php foreach( $digital_advertising_agency_settings as $digital_advertising_agency_setting ) { ?>
									        <a href="<?php echo esc_url( $digital_advertising_agency_setting['link_url'] ); ?>">
									            <i class="<?php echo esc_attr( $digital_advertising_agency_setting['link_text'] ); ?> me-3"></i>
									        </a>
								    	<?php } ?>
									</div>
								<?php } ?>
							</div>
							<div class="col-lg-2 col-md-6 align-self-center text-md-end text-center">
								<?php if ( get_theme_mod('digital_advertising_agency_contact_text') || get_theme_mod('digital_advertising_agency_contact_link') ) : ?>
									<p class="slider-button mb-0">
										<a href="<?php echo esc_url( get_theme_mod('digital_advertising_agency_contact_link' ) ); ?>"><?php echo esc_html( get_theme_mod('digital_advertising_agency_contact_text' ) ); ?></a>
									</p>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>