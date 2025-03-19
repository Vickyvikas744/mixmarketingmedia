<?php 
	if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){
		// ------- Create Nav Menu --------
		$digital_advertising_agency_menuname ='Main Menus';
	    $digital_advertising_agency_bpmenulocation = 'main-menu';
	    $digital_advertising_agency_menu_exists = wp_get_nav_menu_object( $digital_advertising_agency_menuname );
	    if( !$digital_advertising_agency_menu_exists){
	        $digital_advertising_agency_menu_id = wp_create_nav_menu($digital_advertising_agency_menuname);
	        $digital_advertising_agency_home_parent = wp_update_nav_menu_item($digital_advertising_agency_menu_id, 0, array(
				'menu-item-title' =>  __('Home','digital-advertising-agency'),
				'menu-item-classes' => 'home',
				'menu-item-url' =>home_url( '/' ),
				'menu-item-status' => 'publish')
			);

			wp_update_nav_menu_item($digital_advertising_agency_menu_id, 0, array(
	            'menu-item-title' =>  __('About Us','digital-advertising-agency'),
	            'menu-item-classes' => 'about-us',
	            'menu-item-url' => home_url( '//about-us/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($digital_advertising_agency_menu_id, 0, array(
	            'menu-item-title' =>  __('Service','digital-advertising-agency'),
	            'menu-item-classes' => 'service',
	            'menu-item-url' => home_url( '//service/' ),
	            'menu-item-status' => 'publish'));

	        wp_update_nav_menu_item($digital_advertising_agency_menu_id, 0, array(
	            'menu-item-title' =>  __('Pricing','digital-advertising-agency'),
	            'menu-item-classes' => 'pricing',
	            'menu-item-url' => home_url( '//pricing/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($digital_advertising_agency_menu_id, 0, array(
	            'menu-item-title' =>  __('Blog','digital-advertising-agency'),
	            'menu-item-classes' => 'blog',
	            'menu-item-url' => home_url( '//blog/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($digital_advertising_agency_menu_id, 0, array(
	            'menu-item-title' =>  __('Contact','digital-advertising-agency'),
	            'menu-item-classes' => 'contact',
	            'menu-item-url' => home_url( '//contact/' ), 
	            'menu-item-status' => 'publish'));

			
	        
			if( !has_nav_menu( $digital_advertising_agency_bpmenulocation ) ){
	            $locations = get_theme_mod('nav_menu_locations');
	            $locations[$digital_advertising_agency_bpmenulocation] = $digital_advertising_agency_menu_id;
	            set_theme_mod( 'nav_menu_locations', $locations );
	        }
	    }
	    $digital_advertising_agency_home_id='';
		$digital_advertising_agency_home_content = '';
		$digital_advertising_agency_home_title = 'Home';
		$home = array(
			'post_type' => 'page',
			'post_title' => $digital_advertising_agency_home_title,
			'post_content' => $digital_advertising_agency_home_content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'home'
		);
		$digital_advertising_agency_home_id = wp_insert_post($home);
	    
		add_post_meta( $digital_advertising_agency_home_id, '_wp_page_template', 'frontpage.php' );

		update_option( 'page_on_front', $digital_advertising_agency_home_id );
		update_option( 'show_on_front', 'page' );

		//---Header--//

		set_theme_mod( 'digital_advertising_agency_annocment_text', 'End of Year Sale:Save up to 35% on Tasks');

		set_theme_mod( 'digital_advertising_agency_contact_text', 'Contact Us');

		set_theme_mod( 'digital_advertising_agency_contact_link', '#');

		set_theme_mod('digital_advertising_agency_social_links_settings', array(
            array(
                "link_text" => "fab fa-facebook-f",
                "link_url" => "#"
            ),
            array(
                "link_text" => "fab fa-twitter",
                "link_url" => "#"
            ),
            array(
                "link_text" => "fab fa-instagram",
                "link_url" => "#"
            ),
            array(
                "link_text" => "fab fa-pinterest",
                "link_url" => "#"
            )
        ));
            

		//-----Slider-----//

		set_theme_mod( 'digital_advertising_agency_blog_box_enable', true);

		set_theme_mod( 'digital_advertising_agency_blog_slide_number', '3' );
		$digital_advertising_agency_latest_post_category = wp_create_category('Slider Post');
			set_theme_mod( 'digital_advertising_agency_blog_slide_category', 'Slider Post' );

			set_theme_mod( 'digital_advertising_agency_phone_text', 'Got Questions?' );
			
			set_theme_mod( 'digital_advertising_agency_phone_number', '+800 2563 123' );

		for($i=1; $i<=3; $i++) {

			$slider_title=array('Number One Marketing Service in our company', 'Premier Marketing Service Offered by Our Company', 'Top-Ranked Marketing Solution at Our Company');

			$content = 'All in one SEO for your business to give real impact consultancy and analysis.!';

			// Create post object
			$digital_advertising_agency_my_post = array(
				'post_title'    => wp_strip_all_tags( $slider_title[$i-1] ),
				'post_content'  => $content,
				'post_status'   => 'publish',
				'post_type'     => 'post',
				'post_category' => array($digital_advertising_agency_latest_post_category) 
			);

			// Insert the post into the database
			$digital_advertising_agency_post_id = wp_insert_post( $digital_advertising_agency_my_post );

			$digital_advertising_agency_image_url = get_template_directory_uri().'/assets/images/slider'.$i.'.jpg';

			$digital_advertising_agency_image_name= 'slider'.$i.'.jpg';
			$digital_advertising_agency_upload_dir       = wp_upload_dir(); 
			// Set upload folder
			$digital_advertising_agency_image_data       = file_get_contents($digital_advertising_agency_image_url); 
			 
			// Get image data
			$digital_advertising_agency_unique_file_name = wp_unique_filename( $digital_advertising_agency_upload_dir['path'], $digital_advertising_agency_image_name ); 
			// Generate unique name
			$filename= basename( $digital_advertising_agency_unique_file_name ); 
			// Create image file name
			// Check folder permission and define file location
			if( wp_mkdir_p( $digital_advertising_agency_upload_dir['path'] ) ) {
				$file = $digital_advertising_agency_upload_dir['path'] . '/' . $filename;
			} else {
				$file = $digital_advertising_agency_upload_dir['basedir'] . '/' . $filename;
			}
			file_put_contents( $file, $digital_advertising_agency_image_data );
			$wp_filetype = wp_check_filetype( $filename, null );
			$digital_advertising_agency_attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_type'     => 'post',
				'post_status'    => 'inherit'
			);
			$attach_id = wp_insert_attachment( $digital_advertising_agency_attachment, $file, $digital_advertising_agency_post_id );
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
				wp_update_attachment_metadata( $attach_id, $attach_data );
				set_post_thumbnail( $digital_advertising_agency_post_id, $attach_id );
		}

		// //-----About Us Section-----//

			set_theme_mod( 'digital_advertising_agency_about_us_section_enable', true);

			// Slide 1
			set_theme_mod('digital_advertising_agency_about_us_image', get_template_directory_uri().'/assets/images/about.jpg');

			set_theme_mod('digital_advertising_agency_about_us_section_title', 'About Company');

			set_theme_mod('digital_advertising_agency_about_us_main_section_title', 'Grow Your Business With Our SEO Agency');

			set_theme_mod('digital_advertising_agency_about_us_section_content', 'Our approach to SEO is uniquely built around what we know works....and what we know does not work. With over 200 verified factors in play within Googles search algorithm, most agencies will rely on old tactics that no longer work.');

			// Set increment for home automation list
			set_theme_mod('digital_advertising_agency_about_us_progress_count', '4');

			// Define arrays for icons and text
			$about_list_text = array(
			    'Google Analytics Starter Guide',
			    'How To Add a User to Google Analytics',
			    'How To Measure Website Traffic with Google Analytics',
			    'How To Track SEO Conversions: 10 Metrics To Measure'
			);

			// Loop through arrays and set theme mods
			for ($i = 1; $i <= 4; $i++) {            
			    set_theme_mod('digital_advertising_agency_about_us_list' . $i, $about_list_text[$i - 1]);
			}
	}
?>