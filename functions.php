<?php
/**
 * elevator functions and definitions
 *
 * @package elevator
 */

if ( ! function_exists( 'elevator_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function elevator_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on elevator, use a find and replace
	 * to change 'elevator' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'elevator', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'elevator' ),
	) );
    
    
    
    /* Start Pagination */
    function elevator_pagination( $query=null ) {
 
      global $wp_query;
      $query = $query ? $query : $wp_query;
      $big = 999999999;

      $paginate = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'type' => 'array',
        'total' => $query->max_num_pages,
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'prev_text' => __('Prev'),
        'next_text' => __('Next'),
        )
      );

      if ($query->max_num_pages > 1) :
    ?>
    <nav>
        <ul class="pagination">
          <?php
          foreach ( $paginate as $page ) {
            echo '<li>' . $page . '</li>';
          }
          ?>
        </ul>
    </nav>
    <?php
      endif;
    }
    
    /* End Pagination */

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'gallery',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'elevator_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // elevator_setup
add_action( 'after_setup_theme', 'elevator_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elevator_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'elevator_content_width', 640 );
}
add_action( 'after_setup_theme', 'elevator_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function elevator_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'elevator' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
	  'name'          => esc_html__( 'Contact Us', 'elevator' ),
	  'id'            => 'gt-contactus',
	  'description'   => '',
	  'before_widget' => '<div class="contact_us">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<div class="section-title"><h3>',
	  'after_title'   => '</h3></div>',
	 
	 ) );

}
add_action( 'widgets_init', 'elevator_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function elevator_scripts() {
	wp_enqueue_style( 'elevator-style', get_stylesheet_uri() );

	wp_enqueue_style( 'gt-elevator-wptheme-animate.css', get_template_directory_uri().'/assets/css/animate.css',null,'1.0');
	wp_enqueue_style( 'gt-elevator-wptheme-font-awesome.css', get_template_directory_uri().'/assets/css/font-awesome.css',null,'1.0');
	wp_enqueue_style( 'gt-elevator-wptheme-font-awesome.min.css', get_template_directory_uri().'/assets/css/font-awesome.min.css',null,'1.0');
	wp_enqueue_style( 'gt-elevator-wptheme-bootstrap.css', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css',null,'1.0');
	wp_enqueue_style( 'gt-elevator-wptheme-bootstraptheme.css', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap-theme.min.css',null,'1.0');
	wp_enqueue_style( 'gt-elevator-wptheme-style.css', get_template_directory_uri().'/assets/css/style.css',null,'1.0');
	

	wp_enqueue_script( 'gt-elevator-jqBootstrapValidation.js', get_template_directory_uri().'/assets/js/jqBootstrapValidation.js', array('jquery'),'1.0',true);
	wp_enqueue_script( 'gt-elevator-jquery-2.1.1.min.js', get_template_directory_uri().'/assets/js/jquery-2.1.1.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script( 'gt-elevator-jquery.appear.js', get_template_directory_uri().'/assets/js/jquery.appear.js', array('jquery'),'1.0',true);
	wp_enqueue_script( 'gt-elevator-modernizr.custom.js', get_template_directory_uri().'/assets/js/modernizr.custom.js', array('jquery'),'1.0',true);
	wp_enqueue_script( 'gt-bootsratp-script.js', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'),'1.0',true);
	wp_enqueue_script( 'gt-script.js', get_template_directory_uri().'/assets/js/script.js', array('jquery'),'1.0',true);
	
	wp_enqueue_script( 'elevator-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'elevator-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elevator_scripts' );


function gt_elevator_admin_script() {

 wp_enqueue_style( 'gt_elevator-style.css', get_template_directory_uri().'/assets/css/admin_style.css',null,'1.0');
}
 add_action( 'admin_enqueue_scripts', 'gt_elevator_admin_script' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Load Redux compatibility file.
 */
if(file_exists(dirname(__FILE__) . '/lib/ReduxCore/framework.php')){
	require_once(dirname(__FILE__) . '/lib/ReduxCore/framework.php');
}

if(file_exists(dirname(__FILE__) . '/lib/sample/config.php')){
	require_once(dirname(__FILE__) . '/lib/sample/config.php');
}

/* Start Read More */    
    function read_more($limit){
       $post_content = explode(" ", get_the_content());
       $limit_text   = array_slice($post_content, 0, $limit);

       echo implode(" ", $limit_text);

    }
    /* End Read More */

if (function_exists('register_nav_menu')){
			register_nav_menu('blog_menu', __('Blog Menu', 'elevator'));

		}
