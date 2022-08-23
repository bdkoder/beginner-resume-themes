<?php 




function enqueue_all_script(){


wp_register_style('bases',get_template_directory_uri().'/css/base.css',array(),'v.0.3','all');
wp_register_style('main',get_template_directory_uri().'/css/main.css',array(),'v.0.3','all');
wp_register_style('vendor',get_template_directory_uri().'/css/vendor.css',array(),'v.0.3','all');





wp_enqueue_style('bases');
wp_enqueue_style('main');
wp_enqueue_style('vendor');

}

add_action('wp_enqueue_scripts','enqueue_all_script');











//here add jquery

	function jQueryCall()
	{
		wp_enqueue_script('jquery');
	}
//...==========......jQuery link k HUK a deya hoyece..=========.........
add_action('wp_enqueue_scripts' ,'jQueryCall');



function custom_post_with_icon(){
	

	/* Start This for Myself*/
    register_post_type( 'myself',
        array(
            'labels' => array(
                'name' => __( 'About Myself' ),
                'singular_name' => __( 'Add new About Myself' ),
                'add_new_item' => __( 'Add new About Myselfs' )
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields','editor','thumbnail'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'myself-item'),
        )
    );
    /*  End This for Myself*/
	
	/* Start This for Profile Heading Details*/
    register_post_type( 'profileDetails',
        array(
            'labels' => array(
                'name' => __( 'About Profile Heading Detail' ),
                'singular_name' => __( 'Add new About Profile Heading Detail' ),
                'add_new_item' => __( 'Add new About Profile Heading Details' )
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields','editor'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'profileDetails-item'),
        )
    );
    /*  End This for Profile Heading Details */	

    /* Start This for Profile Heading Details*/
    register_post_type( 'skillsDetails',
        array(
            'labels' => array(
                'name' => __( 'About Skills Details' ),
                'singular_name' => __( 'Add new About Skills Detail'),
                'add_new_item' => __( 'Add new About Skills Details')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields','editor'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'skillsDetails-item'),
        )
    );
    /*  End This for Profile Heading Details */


    /* Start This for Work Experience Lists*/
    register_post_type( 'workExList',
        array(
            'labels' => array(
                'name' => __( 'Work Experience List' ),
                'singular_name' => __( 'Add new Work Experience List'),
                'add_new_item' => __( 'Add new Work Experience List')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields','editor'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'workExList-item'),
        )
    );
    /*  End This for Work Experience Lists */

    /* Start This for Education Experience Lists*/
    register_post_type( 'eduExList',
        array(
            'labels' => array(
                'name' => __( 'Education Experience List' ),
                'singular_name' => __( 'Add new Education Experience List'),
                'add_new_item' => __( 'Add new Education Experience List')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields','editor'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'eduExList-item'),
        )
    );
    /*  End This for Education Experience Lists */


    /* Start This for Education Experience Lists*/
    register_post_type( 'whatIDo',
        array(
            'labels' => array(
                'name' => __( 'What I Do' ),
                'singular_name' => __( 'Add new What I Do'),
                'add_new_item' => __( 'Add new What I Does')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields','editor'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'whatIDo-item'),
        )
    );
    /*  End This for Education Experience Lists */



    /* Start This for Portfolio Lists*/
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'My Portfolio' ),
                'singular_name' => __( 'Add My Portfolio'),
                'add_new_item' => __( 'Add My Portfolios')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields','editor','thumbnail'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'portfolio-item'),
        )
    );
    /*  End This for Portfolio Lists */








}






add_action('init','custom_post_with_icon');


add_theme_support( 'post-thumbnails', array('myself','profileDetails','skillsDetails','workExList','eduExList','whatIDo','portfolio') );


/*This for Myself Image*/
add_image_size( 'myself-thumb', 280, 308 );
/*This for Myself Image*/

/*This for portfolio Image*/
add_image_size( 'portfolio-thumb', 550, 555 );
/*This for portfolio Image*/













 ?>