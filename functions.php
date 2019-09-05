<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

function examgyd_style(){
	wp_enqueue_style( 'roboto','https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap');
	wp_enqueue_style( 'stylesheet',get_stylesheet_uri());
	wp_enqueue_style( 'fontawesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/stellarnav.min.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/stellarnav.min.js');
  //
 //   wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ),1.1, true);
  //  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //    wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'examgyd_style',10,1 );


add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
	register_nav_menus( array(
		'primary' => 'Primary menu position that will appear on top',
		'logo' => 'Logo menu position that will appear on top',
				)
	);
}

/*----------register sidebar-----------*/
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar(
    	   	array(
		        'name' => __( 'Right Sidebar', 'ExamGyd' ),
		        'id' => 'sidebar-1',
		        'description' => __( 'Right hand side Widgets shown on all posts and pages.', 'examgyd' ),
		        'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
		    )
	  );


      register_sidebar(
    	   	array(
		        'name' => __( 'left Sidebar', 'ExamGyd' ),
		        'id' => 'sidebar-2',
		        'description' => __( 'leftt hand side Widgets shown on all posts and pages.', 'examgyd' ),
		        'before_widget' => '<div id="%1$s" class="left-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
		    )
	  ); /* end of sidebar2 -----*/

	  register_sidebar(
    	   	array(
		        'name' => __( 'footer-1', 'ExamGyd' ),
		        'id' => 'footer-1',
		        'description' => __( 'Footer 1-Widgets shown on all posts and pages.', 'examgyd' ),
		        'before_widget' => '<div id="%1$s" class="footer-widget-1 %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
		    )
	  ); /* end of footer-1-----*/

	  register_sidebar(
    	   	array(
		        'name' => __( 'footer-2', 'ExamGyd' ),
		        'id' => 'footer-2',
		        'description' => __( 'Footer 2-Widgets shown on all posts and pages.', 'examgyd' ),
		        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
		    )
	  ); /* end of footer-2-----*/

	  register_sidebar(
    	   	array(
		        'name' => __( 'footer-3', 'ExamGyd' ),
		        'id' => 'footer-3',
		        'description' => __( 'Footer 3-Widgets shown on all posts and pages.', 'examgyd' ),
		        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
		    )
	  ); /* end of footer-3-----*/

	  register_sidebar(
    	   	array(
		        'name' => __( 'footer-4', 'ExamGyd' ),
		        'id' => 'footer-4',
		        'description' => __( 'Footer 4-Widgets shown on all posts and pages.', 'examgyd' ),
		        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
		    )
	  ); /* end of footer-4-----*/

	  register_sidebar(
    	   	array(
		        'name' => __( 'footer-5', 'ExamGyd' ),
		        'id' => 'footer-5',
		        'description' => __( 'Footer 5-Widgets shown on all posts and pages.', 'examgyd' ),
		        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
		    )
	  ); /* end of footer-2-----*/
}
/*----------end of widget registration-----------*/

?>