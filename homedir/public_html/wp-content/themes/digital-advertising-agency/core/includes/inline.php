<?php


$digital_advertising_agency_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$digital_advertising_agency_text_transform = get_theme_mod( 'menu_text_transform_digital_advertising_agency','CAPITALISE');
    if($digital_advertising_agency_text_transform == 'CAPITALISE'){

		$digital_advertising_agency_custom_css .='#main-menu ul li a{';

			$digital_advertising_agency_custom_css .='text-transform: capitalize ;';

		$digital_advertising_agency_custom_css .='}';

	}else if($digital_advertising_agency_text_transform == 'UPPERCASE'){

		$digital_advertising_agency_custom_css .='#main-menu ul li a{';

			$digital_advertising_agency_custom_css .='text-transform: uppercase ;';

		$digital_advertising_agency_custom_css .='}';

	}else if($digital_advertising_agency_text_transform == 'LOWERCASE'){

		$digital_advertising_agency_custom_css .='#main-menu ul li a{';

			$digital_advertising_agency_custom_css .='text-transform: lowercase ;';

		$digital_advertising_agency_custom_css .='}';
	}

		/*---------------------------menu-zoom-------------------*/

		$digital_advertising_agency_menu_zoom = get_theme_mod( 'digital_advertising_agency_menu_zoom','None');

    if($digital_advertising_agency_menu_zoom == 'Zoomout'){

		$digital_advertising_agency_custom_css .='#main-menu ul li a{';

			$digital_advertising_agency_custom_css .='';

		$digital_advertising_agency_custom_css .='}';

	}else if($digital_advertising_agency_menu_zoom == 'Zoominn'){

		$digital_advertising_agency_custom_css .='#main-menu ul li a:hover{';

			$digital_advertising_agency_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #6c0daf;';

		$digital_advertising_agency_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$digital_advertising_agency_container_width = get_theme_mod('digital_advertising_agency_container_width');

		$digital_advertising_agency_custom_css .='body{';

			$digital_advertising_agency_custom_css .='width: '.esc_attr($digital_advertising_agency_container_width).'%; margin: auto';

		$digital_advertising_agency_custom_css .='}';

		/*---------------------------Copyright Text alignment-------------------*/

	$digital_advertising_agency_copyright_text_alignment = get_theme_mod( 'digital_advertising_agency_copyright_text_alignment','LEFT-ALIGN');

	if($digital_advertising_agency_copyright_text_alignment == 'LEFT-ALIGN'){

		$digital_advertising_agency_custom_css .='.copy-text p{';

			$digital_advertising_agency_custom_css .='text-align:left;';

		$digital_advertising_agency_custom_css .='}';


	}else if($digital_advertising_agency_copyright_text_alignment == 'CENTER-ALIGN'){

		$digital_advertising_agency_custom_css .='.copy-text p{';

			$digital_advertising_agency_custom_css .='text-align:center;';

		$digital_advertising_agency_custom_css .='}';


	}else if($digital_advertising_agency_copyright_text_alignment == 'RIGHT-ALIGN'){

		$digital_advertising_agency_custom_css .='.copy-text p{';

			$digital_advertising_agency_custom_css .='text-align:right;';

		$digital_advertising_agency_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/

$digital_advertising_agency_related_product_setting = get_theme_mod('digital_advertising_agency_related_product_setting',true);

	if($digital_advertising_agency_related_product_setting == false){

		$digital_advertising_agency_custom_css .='.related.products, .related h2{';

			$digital_advertising_agency_custom_css .='display: none;';

		$digital_advertising_agency_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

		$digital_advertising_agency_scroll_top_position = get_theme_mod( 'digital_advertising_agency_scroll_top_position','Right');

		if($digital_advertising_agency_scroll_top_position == 'Right'){
	
			$digital_advertising_agency_custom_css .='.scroll-up{';
	
				$digital_advertising_agency_custom_css .='right: 20px;';
	
			$digital_advertising_agency_custom_css .='}';
	
		}else if($digital_advertising_agency_scroll_top_position == 'Left'){
	
			$digital_advertising_agency_custom_css .='.scroll-up{';
	
				$digital_advertising_agency_custom_css .='left: 20px;';
	
			$digital_advertising_agency_custom_css .='}';
	
		}else if($digital_advertising_agency_scroll_top_position == 'Center'){
	
			$digital_advertising_agency_custom_css .='.scroll-up{';
	
				$digital_advertising_agency_custom_css .='right: 50%;left: 50%;';
	
			$digital_advertising_agency_custom_css .='}';
		}
	
			/*---------------------------Pagination Settings-------------------*/
	
	
	$digital_advertising_agency_pagination_setting = get_theme_mod('digital_advertising_agency_pagination_setting',true);
	
		if($digital_advertising_agency_pagination_setting == false){
	
			$digital_advertising_agency_custom_css .='.nav-links{';
	
				$digital_advertising_agency_custom_css .='display: none;';
	
			$digital_advertising_agency_custom_css .='}';
		}

	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$digital_advertising_agency_woocommerce_pagination_position = get_theme_mod( 'digital_advertising_agency_woocommerce_pagination_position','Center');

	if($digital_advertising_agency_woocommerce_pagination_position == 'Left'){

		$digital_advertising_agency_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$digital_advertising_agency_custom_css .='text-align: left;';

		$digital_advertising_agency_custom_css .='}';

	}else if($digital_advertising_agency_woocommerce_pagination_position == 'Center'){

		$digital_advertising_agency_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$digital_advertising_agency_custom_css .='text-align: center;';

		$digital_advertising_agency_custom_css .='}';

	}else if($digital_advertising_agency_woocommerce_pagination_position == 'Right'){

		$digital_advertising_agency_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$digital_advertising_agency_custom_css .='text-align: right;';

		$digital_advertising_agency_custom_css .='}';
	}