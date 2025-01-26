<?php

/**
 * Gixus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gixus
 */

/**
 * Required Files
 */

require_once get_template_directory() . '/inc/redux/config.php';

require_once get_template_directory() . '/inc/redux/color.php';

require_once get_template_directory() . '/inc/class-gixus-walker-header-menu.php';

// /*TGM PLUGIN*/

require_once get_template_directory() . '/tgm-plugin/recommend_plugins.php';

function gixus_fonts() {
    wp_enqueue_style( 'gixus-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), null, 'all' );
}

add_action('wp_enqueue_scripts', 'gixus_fonts');

function gixus_enqueue_styles() {

    // Enqueue Bootstrap
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);

    // Enqueue Font Awesome
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), null);

    // Enqueue Magnific Popup
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null);

    // Enqueue Swiper Bundle
    wp_enqueue_style('swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), null);

    // Enqueue Animate
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), null);

    // Enqueue ValidNavs
    wp_enqueue_style('validnavs-css', get_template_directory_uri() . '/assets/css/validnavs.css', array(), null);

    // Enqueue Helper
    wp_enqueue_style('helper-css', get_template_directory_uri() . '/assets/css/helper.css', array(), null);

    // Enqueue Unit Test
    wp_enqueue_style('gixus-unittest', get_template_directory_uri() . '/assets/css/unit-test.css', array(), null);
	
	// Enqueue Main Gixus Style
    wp_enqueue_style('gixus-style', get_template_directory_uri() . '/assets/css/style.css', array(), null);

    

}
add_action('wp_enqueue_scripts', 'gixus_enqueue_styles');

function gixus_enqueue_scripts() {

    // Enqueue Bootstrap Bundle
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Enqueue jQuery Appear
    wp_enqueue_script('jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), null, true);
    
    // Enqueue jQuery Easing
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array( 'jquery' ), null, true);

    // Enqueue Swiper Bundle
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);

    // Enqueue Progress Bar
    wp_enqueue_script('progress-bar', get_template_directory_uri() . '/assets/js/progress-bar.min.js', array('jquery'), null, true);

    // Enqueue Isotope
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), null, true);

    // Enqueue ImagesLoaded
    wp_enqueue_script('imagesloaded');

    // Enqueue Magnific Popup
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), null, true);

    // Enqueue Count To
    wp_enqueue_script('count-to', get_template_directory_uri() . '/assets/js/count-to.js', array('jquery'), null, true);

    // Enqueue jQuery Nice Select
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);

    // Enqueue Circle Progress
    wp_enqueue_script('circle-progress', get_template_directory_uri() . '/assets/js/circle-progress.js', array('jquery'), null, true);

    // Enqueue Wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);

    // Enqueue YTPlayer
    wp_enqueue_script('ytplayer', get_template_directory_uri() . '/assets/js/YTPlayer.min.js', array('jquery'), null, true);

    // Enqueue ValidNavs
    wp_enqueue_script('validnavs', get_template_directory_uri() . '/assets/js/validnavs.js', array('jquery'), null, true);

    // Enqueue jQuery Lettering
    wp_enqueue_script('lettering', get_template_directory_uri() . '/assets/js/jquery.lettering.min.js', array('jquery'), null, true);

    // Enqueue jQuery CircleType
    wp_enqueue_script('circletype', get_template_directory_uri() . '/assets/js/jquery.circleType.js', array('jquery'), null, true);

    // Enqueue GSAP
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.js', array('jquery'), null, true);

    // Enqueue ScrollTrigger
    wp_enqueue_script('scrolltrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('jquery'), null, true);

    // Enqueue SplitText
    wp_enqueue_script('splittext', get_template_directory_uri() . '/assets/js/SplitText.min.js', array('jquery'), null, true);

    // Enqueue Main Gixus Script
    wp_enqueue_script('gixus-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'gixus_enqueue_scripts');

/**
 * Gixus Theme Configuration
 */

function gixus_theme_config() {
    // Add theme support
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_editor_style('assets/css/editor-style.css');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));

    // Set content width
    if (!isset($content_width)) $content_width = 900;

	//     Load theme textdomain
    $gixus_lang = get_template_directory_uri() . '/languages';
    load_theme_textdomain('gixus', $gixus_lang);

    // Check if the function exists to avoid errors
    if (function_exists('register_block_style')) {
        // Register a new style for the paragraph block
        register_block_style('core/paragraph', [
            'name'  => 'custom-style',
            'label' => __('Custom Style', 'gixus'),
        ]);
    }

    // Check if the function exists to avoid errors
    if (function_exists('register_block_pattern')) {
        register_block_pattern(
        'gixus/hero-section',
        array(
            'title'       => __('Hero Section', 'gixus'),
            'description' => _x('A custom hero section pattern', 'Block pattern description', 'gixus'),
            'content'     => '<!-- wp:heading --><h2>' . __('Welcome to Gixus', 'gixus') . '</h2><!-- /wp:heading -->',
            )
        );
    }

    register_nav_menus(
        array(
        'main-menu' => esc_html__( 'Main Menu', 'gixus' ),
        )
    ); 
        
}
add_action('after_setup_theme', 'gixus_theme_config', 0);

/**
 * GIXUS Pagination
 */

function gixus_pagination() {
    global $wp_query;

    if ( $wp_query->max_num_pages <= 1 ) return;

    $big = 999999999; // an unlikely integer

    $current_page = max( 1, get_query_var('paged') );

    // Start the output
    echo '<ul class="pagination">';

    // Previous link
    echo '<li class="page-item"><a class="page-link" href="' . esc_url( get_pagenum_link( $current_page - 1 ) ) . '"><i class="fas fa-angle-double-left"></i></a></li>';

    // Loop through pages
    for ( $i = 1; $i <= $wp_query->max_num_pages; $i++ ) {
        if ( $i === $current_page ) {
            echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
        } else {
            echo '<li class="page-item"><a class="page-link" href="' . esc_url( get_pagenum_link( $i ) ) . '">' . $i . '</a></li>';
        }
    }

    // Next link
    echo '<li class="page-item"><a class="page-link" href="' . esc_url( get_pagenum_link( $current_page + 1 ) ) . '"><i class="fas fa-angle-double-right"></i></a></li>';

    // End the output
    echo '</ul>';
}

/**
 * Gixus Register Widgets
 */

add_action( 'widgets_init', 'gixus_widgets_init' );
function gixus_widgets_init() {

        register_sidebar( array(
        'name' => esc_html__( 'Main Sidebar', 'gixus' ),
        'id' => 'main-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'gixus' ),
        'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
    'after_widget'  => '</div>',
        'before_title'  => '<h4 class="title">',
        'after_title'   => '</h4>',
    ) );
}

/**
 * Gixus Tags Widget
 */

add_filter( 'widget_tag_cloud_args', 'gixus_change_tag_cloud_font_sizes');
function gixus_change_tag_cloud_font_sizes( array $args ) {
    $args['default'] = '13';
    $args['smallest'] = '13';
    $args['largest'] = '13';
    $args['unit'] = 'px';

    return $args;
}


/**
 * Gixus Comments
 */

function gixus_comment_callback($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment;
   $gravatar = get_avatar($comment,$size='100' ); ?>
    <div class="comment-item">
        <div class="avatar">
        <?php echo get_avatar($comment,$size='80' ); ?>
        </div>
        <div class="content">
            <div class="title">
                <h5><?php printf( get_comment_author_link()) ?></h5>
                <span><?php the_time('F j, Y'); ?></span>
            </div>
                <?php comment_text() ?> 
			<div class='comments-info'>
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <span class="unapproved"><?php esc_html_e( 'Your comment is awaiting moderation.', 'gixus' ); ?></span>
                <?php endif; ?>
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'],'reply_text' => '<i class="fa fa-reply"></i>Reply' ) ) ) ?>
            </div>
        </div>
    </div>
<?php
}

/**
 * Gixus Contact Form Filter 
 */

add_filter('wpcf7_autop_or_not', '__return_false'); 

// Elementor Font Awesome Free De-Register
	
function gixus_dequeue_elementor_fontawesome() {
    wp_dequeue_style('hfe-social-share-icons-fontawesome-css');
    wp_dequeue_style('hfe-nav-menu-icons-css');
}
add_action('wp_enqueue_scripts', 'gixus_dequeue_elementor_fontawesome', 999);

// Gixus Demo-Import

function gixus_import_files() {
    return array(

        array(
            'import_file_name'           => 'Business Consulting',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-1.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/',
        ),

        array(
            'import_file_name'           => 'IT Solutions',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-2.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-two/',
        ),

        array(
            'import_file_name'           => 'Creative Agency',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-3.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-three/',
        ),

        array(
            'import_file_name'           => 'Transportation Logistics',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-4.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-four/',
        ),

        array(
            'import_file_name'           => 'Financial Advisor',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-5.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-five/',
        ),
        
        array(
            'import_file_name'           => 'Artificial Intelligence',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-6.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/home-version-six/',
        ),

        array(
            'import_file_name'           => 'Business Consulting OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-1.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-one/',
        ),

        array(
            'import_file_name'           => 'IT Solutions OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-2.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-two/',
        ),

        array(
            'import_file_name'           => 'Creative Agency OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-3.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-three/',
        ),

        array(
            'import_file_name'           => 'Transportation Logistics OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-4.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-four/',
        ),

        array(
            'import_file_name'           => 'Financial Advisor OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-5.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-five/',
        ),
        
        array(
            'import_file_name'           => 'Artificial Intelligence OnePage',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/data.xml',
            'import_widget_file_url'     => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/widget.wie',
            'import_customizer_file_url' => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/inc/demo-import/redux.json',
                    'option_name' => 'gixus_options',
                ),
            ),
            'import_preview_image_url'   => trailingslashit(home_url('/')) . 'wp-content/themes/gixus/assets/img/demo/home-6.jpg',
            'import_notice'              => esc_html__( 'Import process may take 2-5 minutes. If you are facing any issues, please contact our support.', 'gixus' ),
            'preview_url'                => 'https://wpriverthemes.com/gixus/onepage-six/',
        ),

    );
}
add_filter( 'pt-ocdi/import_files', 'gixus_import_files' );

function gixus_ocdi_after_import( $selected_import ) {

    if ( 'Business Consulting' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'IT Solutions' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Two' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Creative Agency' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Three' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Transportation Logistics' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Four' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Financial Advisor' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Five' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }
    
    elseif ( 'Artificial Intelligence' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Six' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Business Consulting OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage One', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'IT Solutions OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Two', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Two' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Creative Agency OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Three', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Three' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Transportation Logistics OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Four', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Four' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    elseif ( 'Financial Advisor OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Five', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Five' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }
    
    elseif ( 'Artificial Intelligence OnePage' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Six', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Six' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );

    }

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
        )
    );

}
add_action( 'pt-ocdi/after_import', 'gixus_ocdi_after_import' );