<?php

add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function custom_post_type() {
    $labels = array(
        'name'                  => _x( 'Slider', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Slider', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Slider', 'textdomain' ),
        'new_item'              => __( 'New Slider', 'textdomain' ),
        'edit_item'             => __( 'Edit Slider', 'textdomain' ),
        'view_item'             => __( 'View Slider', 'textdomain' ),
        'all_items'             => __( 'All Slider', 'textdomain' ),
        'search_items'          => __( 'Search Slider', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Slider:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'slider', $args );

    $labels = array(
        'name'                  => _x( 'Tarım', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Tarım', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Tarım', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Tarım', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Tarım', 'textdomain' ),
        'new_item'              => __( 'New Tarım', 'textdomain' ),
        'edit_item'             => __( 'Edit Tarım', 'textdomain' ),
        'view_item'             => __( 'View Tarım', 'textdomain' ),
        'all_items'             => __( 'All Tarım', 'textdomain' ),
        'search_items'          => __( 'Search Tarım', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Tarım:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Tarım archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into tarim', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tarim' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'tarim', $args );

    $labels = array(
        'name'                  => _x( 'Yatırım Danışmanlığı', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Yatırım Danışmanlığı', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Yatırım Danışmanlığı', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Yatırım Danışmanlığı', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Yatırım Danışmanlığı', 'textdomain' ),
        'new_item'              => __( 'New Yatırım Danışmanlığı', 'textdomain' ),
        'edit_item'             => __( 'Edit Yatırım Danışmanlığı', 'textdomain' ),
        'view_item'             => __( 'View Yatırım Danışmanlığı', 'textdomain' ),
        'all_items'             => __( 'All Yatırım Danışmanlığı', 'textdomain' ),
        'search_items'          => __( 'Search Yatırım Danışmanlığı', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Yatırım Danışmanlığı:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Yatırım Danışmanlığı Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Yatırım Danışmanlığı archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into yatirim_danismanligi', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'yatirim-danismanligi' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'yatirim-danismanligi', $args );

    $labels = array(
        'name'                  => _x( 'Enerji', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Enerji', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Enerji', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Enerji', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Enerji', 'textdomain' ),
        'new_item'              => __( 'New Enerji', 'textdomain' ),
        'edit_item'             => __( 'Edit Enerji', 'textdomain' ),
        'view_item'             => __( 'View Enerji', 'textdomain' ),
        'all_items'             => __( 'All Enerji', 'textdomain' ),
        'search_items'          => __( 'Search Enerji', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Enerji:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Enerji Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Enerji archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into enerji', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'enerji' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'enerji', $args );


    $labels = array(
        'name'                  => _x( 'Otomotiv', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Otomotiv', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Otomotiv', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Otomotiv', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Otomotiv', 'textdomain' ),
        'new_item'              => __( 'New Otomotiv', 'textdomain' ),
        'edit_item'             => __( 'Edit Otomotiv', 'textdomain' ),
        'view_item'             => __( 'View Otomotiv', 'textdomain' ),
        'all_items'             => __( 'All Otomotiv', 'textdomain' ),
        'search_items'          => __( 'Search Otomotiv', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Otomotiv:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Otomotiv Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Enerji archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into otomotiv', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'otomotiv' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'otomotiv', $args );

    $labels = array(
        'name'                  => _x( 'İnşaat', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'İnşaat', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'İnşaat', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'İnşaat', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New İnşaat', 'textdomain' ),
        'new_item'              => __( 'New İnşaat', 'textdomain' ),
        'edit_item'             => __( 'Edit İnşaat', 'textdomain' ),
        'view_item'             => __( 'View İnşaat', 'textdomain' ),
        'all_items'             => __( 'All İnşaat', 'textdomain' ),
        'search_items'          => __( 'Search İnşaat', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent İnşaat:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'İnşaat Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Enerji archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into insaat', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'insaat' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'insaat', $args );

    $labels = array(
        'name'                  => _x( 'Sağlık', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Sağlık', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Sağlık', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Sağlık', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Sağlık', 'textdomain' ),
        'new_item'              => __( 'New Sağlık', 'textdomain' ),
        'edit_item'             => __( 'Edit Sağlık', 'textdomain' ),
        'view_item'             => __( 'View Sağlık', 'textdomain' ),
        'all_items'             => __( 'All Sağlık', 'textdomain' ),
        'search_items'          => __( 'Search Sağlık', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Sağlık:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Sağlık Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Sağlık archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into saglik', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'saglik' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'saglik', $args );

    $labels = array(
        'name'                  => _x( 'Eğitim', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Eğitim', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Eğitim', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Eğitim', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Eğitim', 'textdomain' ),
        'new_item'              => __( 'New Sağlık', 'textdomain' ),
        'edit_item'             => __( 'Edit Eğitim', 'textdomain' ),
        'view_item'             => __( 'View Eğitim', 'textdomain' ),
        'all_items'             => __( 'All Eğitim', 'textdomain' ),
        'search_items'          => __( 'Search Eğitim', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Eğitim:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Eğitim Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Sağlık archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into egitim', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'egitim' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'egitim', $args );

    $labels = array(
        'name'                  => _x( 'Turizm', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Turizm', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Turizm', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Turizm', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Turizm', 'textdomain' ),
        'new_item'              => __( 'New Turizm', 'textdomain' ),
        'edit_item'             => __( 'Edit Turizm', 'textdomain' ),
        'view_item'             => __( 'View Turizm', 'textdomain' ),
        'all_items'             => __( 'All Turizm', 'textdomain' ),
        'search_items'          => __( 'Search Turizm', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Turizm:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Turizm Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Sağlık archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into turizm', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'turizm' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'turizm', $args );

    $labels = array(
        'name'                  => _x( 'Tekstil', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Tekstil', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Tekstil', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Tekstil', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Tekstil', 'textdomain' ),
        'new_item'              => __( 'New Tekstil', 'textdomain' ),
        'edit_item'             => __( 'Edit Tekstil', 'textdomain' ),
        'view_item'             => __( 'View Tekstil', 'textdomain' ),
        'all_items'             => __( 'All Tekstil', 'textdomain' ),
        'search_items'          => __( 'Search Tekstil', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Tekstil:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Tekstil Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Sağlık archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into turizm', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tekstil' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'tekstil', $args );

    $labels = array(
        'name'                  => _x( 'Lojistik', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Lojistik', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Lojistik', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Lojistik', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Lojistik', 'textdomain' ),
        'new_item'              => __( 'New Lojistik', 'textdomain' ),
        'edit_item'             => __( 'Edit Lojistik', 'textdomain' ),
        'view_item'             => __( 'View Lojistik', 'textdomain' ),
        'all_items'             => __( 'All Lojistik', 'textdomain' ),
        'search_items'          => __( 'Search Lojistik', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Lojistik:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Lojistik Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Sağlık archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into lojistic', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'lojistic' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'lojistic', $args );


    $labels = array(
        'name'                  => _x( 'Markalar', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Markalar', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Markalar', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Markalar', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Markalar', 'textdomain' ),
        'new_item'              => __( 'New Markalar', 'textdomain' ),
        'edit_item'             => __( 'Edit Markalar', 'textdomain' ),
        'view_item'             => __( 'View Markalar', 'textdomain' ),
        'all_items'             => __( 'All Markalar', 'textdomain' ),
        'search_items'          => __( 'Search Markalar', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Markalar:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Markalar Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Sağlık archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into markalar', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'markalar' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'markalar', $args );

    $labels = array(
        'name'                  => _x( 'Tesisler', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Tesisler', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Tesisler', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Tesisler', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Tesisler', 'textdomain' ),
        'new_item'              => __( 'New Tesisler', 'textdomain' ),
        'edit_item'             => __( 'Edit Tesisler', 'textdomain' ),
        'view_item'             => __( 'View Tesisler', 'textdomain' ),
        'all_items'             => __( 'All Tesisler', 'textdomain' ),
        'search_items'          => __( 'Search Tesisler', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Tesisler:', 'textdomain' ),
        'not_found'             => __( 'No sliders found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Tesisler Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Sağlık archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into tesisler', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tesisler' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'tesisler', $args );
}


add_action( 'init', 'custom_post_type' );
