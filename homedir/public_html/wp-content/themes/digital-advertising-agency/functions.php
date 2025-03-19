<?php
/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function digital_advertising_agency_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'google-fonts-plus-jakarta-sans',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' ),
		array(),
		'1.0'
	);

}
add_action( 'wp_enqueue_scripts', 'digital_advertising_agency_enqueue_google_fonts' );

if (!function_exists('digital_advertising_agency_enqueue_scripts')) {

	function digital_advertising_agency_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('digital-advertising-agency-style', get_stylesheet_uri(), array() );

		wp_style_add_data('digital-advertising-agency-style', 'rtl', 'replace');

		wp_enqueue_style(
			'digital-advertising-agency-media-css',
			get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'digital-advertising-agency-woocommerce-css',
			get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('dashicons');

		wp_enqueue_script(
			'digital-advertising-agency-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'digital-advertising-agency-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$digital_advertising_agency_css = '';

		if ( get_header_image() ) :

			$digital_advertising_agency_css .=  '
			.top-header{
				background-image: url('.esc_url(get_header_image()).');
				-webkit-background-size: cover !important;
				-moz-background-size: cover !important;
				-o-background-size: cover !important;
				background-size: cover !important;
			}';

		endif;

		wp_add_inline_style( 'digital-advertising-agency-style', $digital_advertising_agency_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'digital-advertising-agency-style',$digital_advertising_agency_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'digital_advertising_agency_enqueue_scripts' );
}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('digital_advertising_agency_after_setup_theme')) {

	function digital_advertising_agency_after_setup_theme() {

		load_theme_textdomain( 'digital-advertising-agency', get_stylesheet_directory() . '/languages' );
		if ( ! isset( $digital_advertising_agency_content_width ) ) $digital_advertising_agency_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'digital-advertising-agency' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'digital_advertising_agency_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/customizer-notice/digital-advertising-agency-customizer-notify.php';
require get_template_directory() .'/core/includes/theme-breadcrumb.php';
require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue theme logo style */
/*-----------------------------------------------------------------------------------*/
function digital_advertising_agency_logo_resizer() {

    $digital_advertising_agency_theme_logo_size_css = '';
    $digital_advertising_agency_logo_resizer = get_theme_mod('digital_advertising_agency_logo_resizer');

	$digital_advertising_agency_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($digital_advertising_agency_logo_resizer).'px !important;
			width: '.esc_attr($digital_advertising_agency_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'digital-advertising-agency-style',$digital_advertising_agency_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'digital_advertising_agency_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('digital_advertising_agency_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function digital_advertising_agency_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'digital-advertising-agency');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'digital-advertising-agency'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'digital-advertising-agency'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'digital-advertising-agency' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'digital-advertising-agency'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for digital_advertising_agency_comment()

if (!function_exists('digital_advertising_agency_widgets_init')) {

	function digital_advertising_agency_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','digital-advertising-agency'),
			'id'   => 'digital-advertising-agency-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'digital-advertising-agency'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 2','digital-advertising-agency'),
			'id'   => 'digital-advertising-agency-sidebar-2',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'digital-advertising-agency'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 3','digital-advertising-agency'),
			'id'   => 'digital-advertising-agency-sidebar-3',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'digital-advertising-agency'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','digital-advertising-agency'),
			'id'   => 'digital-advertising-agency-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'digital-advertising-agency'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'digital_advertising_agency_widgets_init' );

}

function digital_advertising_agency_get_categories_select() {
	$teh_cats = get_categories();
	$results = array();
	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
	if (isset($teh_cats[$i]))
  		$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

function digital_advertising_agency_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function digital_advertising_agency_sanitize_select( $input, $setting ) {
	// Ensure input is a slug
	$input = sanitize_key( $input );

	// Get list of choices from the control
	// associated with the setting
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it;
	// otherwise, return the default
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'digital_advertising_agency_loop_columns');
if (!function_exists('digital_advertising_agency_loop_columns')) {
	function digital_advertising_agency_loop_columns() {
		$digital_advertising_agency_columns = get_theme_mod( 'digital_advertising_agency_per_columns', 3 );
		return $digital_advertising_agency_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'digital_advertising_agency_per_page', 20 );
function digital_advertising_agency_per_page( $digital_advertising_agency_cols ) {
  	$digital_advertising_agency_cols = get_theme_mod( 'digital_advertising_agency_product_per_page', 9 );
	return $digital_advertising_agency_cols;
}

// Add filter to modify the number of related products
add_filter( 'woocommerce_output_related_products_args', 'digital_advertising_agency_products_args' );
function digital_advertising_agency_products_args( $args ) {
    $args['posts_per_page'] = get_theme_mod( 'custom_related_products_number', 6 );
    $args['columns'] = get_theme_mod( 'custom_related_products_number_per_row', 3 );
    return $args;
}

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function digital_advertising_agency_global_color() {

    $digital_advertising_agency_theme_color_css = '';
    $digital_advertising_agency_global_color = get_theme_mod('digital_advertising_agency_global_color');
    $digital_advertising_agency_global_color_2 = get_theme_mod('digital_advertising_agency_global_color_2');
    $digital_advertising_agency_copyright_bg = get_theme_mod('digital_advertising_agency_copyright_bg');

	$digital_advertising_agency_theme_color_css = '
		.logo,p.slider-button a,#main-menu ul.children,#main-menu ul.sub-menu,image-box,p.slider-button a,.feature-header,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wp-block-woocommerce-cart .wc-block-components-product-badge,.scroll-up a,.pagination .nav-links a:hover,.pagination .nav-links a:focus,.pagination .nav-links span.current,.digital-advertising-agency-pagination span.current,.digital-advertising-agency-pagination span.current:hover,.digital-advertising-agency-pagination span.current:focus,.digital-advertising-agency-pagination a span:hover,.digital-advertising-agency-pagination a span:focus,.woocommerce nav.woocommerce-pagination ul li span.current,.comment-respond input#submit,.comment-reply a,.sidebar-area h4.title, .sidebar-area h1.wp-block-heading,.sidebar-area h2.wp-block-heading,.sidebar-area h3.wp-block-heading,.sidebar-area h4.wp-block-heading,.sidebar-area h5.wp-block-heading,.sidebar-area h6.wp-block-heading,.sidebar-area .wp-block-search__label,.sidebar-area .tagcloud a,.searchform input[type=submit], .sidebar-area .wp-block-search__button,nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wp-block-woocommerce-cart .wc-block-components-product-badge,.image-box{
			background-image: linear-gradient(to right, '.$digital_advertising_agency_global_color . ', '.$digital_advertising_agency_global_color_2.');
		}
		 #about h6{
		 	background: -webkit-linear-gradient('.$digital_advertising_agency_global_color . ', '.$digital_advertising_agency_global_color_2.');
		    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
		 }
		@media screen and (min-width: 320px) and (max-width: 767px) {
		    .menu-toggle, .dropdown-toggle {
		        background: '.esc_attr($digital_advertising_agency_global_color).';
		    }
		}
		.blog_box h3 span{
			color: '.esc_attr($digital_advertising_agency_global_color).'!important;
		}
		a:hover,a:focus,.post-single a, .page-single a,.sidebar-area .textwidget a,.comment-content a,.woocommerce-product-details__short-description a,#tab-description a,.extra-home-content a,.social-links i:hover,#main-menu a:hover,#main-menu ul li a:hover,#main-menu li:hover > a,#main-menu a:focus,#main-menu ul li a:focus,#main-menu li.focus > a,#main-menu li:focus > a,#main-menu ul li.current-menu-item > a,#main-menu ul li.current_page_item > a,#main-menu ul li.current-menu-parent > a,#main-menu ul li.current_page_ancestor > a,#main-menu ul li.current-menu-ancestor > a,.post-meta i,#about li i,.woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price,.bread_crumb span{
			color: '.esc_attr($digital_advertising_agency_global_color_2).';
		}
    	.copyright {
			background: '.esc_attr($digital_advertising_agency_copyright_bg).';
		}
	';
    wp_add_inline_style( 'digital-advertising-agency-style',$digital_advertising_agency_theme_color_css );
    wp_add_inline_style( 'digital-advertising-agency-woocommerce-css',$digital_advertising_agency_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'digital_advertising_agency_global_color' );