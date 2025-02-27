<?php //phpcs:ignore
/**
 * Theme functions and definitions.
 *
 * @package BlogHash
 * @author Peregrine Themes
 * @since   1.0.0
 */

/**
 * Main Bloghash class.
 *
 * @since 1.0.0
 */
final class Bloghash {

	/**
	 * Theme options
	 *
	 * @since 1.0.0
	 * @var object
	 */
	public $options;

	/**
	 * Theme fonts
	 *
	 * @since 1.0.0
	 * @var object
	 */
	public $fonts;

	/**
	 * Theme icons
	 *
	 * @since 1.0.0
	 * @var object
	 */
	public $icons;

	/**
	 * Theme customizer
	 *
	 * @since 1.0.0
	 * @var object
	 */
	public $customizer;

	/**
	 * Theme admin
	 *
	 * @since 1.0.0
	 * @var object
	 */
	public $admin;

	/**
	 * Singleton instance of the class.
	 *
	 * @since 1.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * Theme version.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	public $version = '1.0.20';
	/**
	 * Main Bloghash Instance.
	 *
	 * Insures that only one instance of Bloghash exists in memory at any one
	 * time. Also prevents needing to define globals all over the place.
	 *
	 * @since 1.0.0
	 * @return Bloghash
	 */
	public static function instance() {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Bloghash ) ) {
			self::$instance = new Bloghash();
			self::$instance->constants();
			self::$instance->includes();
			self::$instance->objects();
			// Hook now that all of the Bloghash stuff is loaded.
			do_action( 'bloghash_loaded' );
		}
		return self::$instance;
	}

	/**
	 * Setup constants.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	private function constants() {
		if ( ! defined( 'BLOGHASH_THEME_VERSION' ) ) {
			define( 'BLOGHASH_THEME_VERSION', $this->version );
		}
		if ( ! defined( 'BLOGHASH_THEME_URI' ) ) {
			define( 'BLOGHASH_THEME_URI', get_parent_theme_file_uri() );
		}
		if ( ! defined( 'BLOGHASH_THEME_PATH' ) ) {
			define( 'BLOGHASH_THEME_PATH', get_parent_theme_file_path() );
		}
	}
	/**
	 * Include files.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function includes() {
		require_once BLOGHASH_THEME_PATH . '/inc/common.php';
		require_once BLOGHASH_THEME_PATH . '/inc/helpers.php';
		require_once BLOGHASH_THEME_PATH . '/inc/widgets.php';
		require_once BLOGHASH_THEME_PATH . '/inc/template-tags.php';
		require_once BLOGHASH_THEME_PATH . '/inc/template-parts.php';
		require_once BLOGHASH_THEME_PATH . '/inc/icon-functions.php';
		require_once BLOGHASH_THEME_PATH . '/inc/breadcrumbs.php';
		require_once BLOGHASH_THEME_PATH . '/inc/class-bloghash-dynamic-styles.php';
		// Core.
		require_once BLOGHASH_THEME_PATH . '/inc/core/class-bloghash-options.php';
		require_once BLOGHASH_THEME_PATH . '/inc/core/class-bloghash-enqueue-scripts.php';
		require_once BLOGHASH_THEME_PATH . '/inc/core/class-bloghash-fonts.php';
		require_once BLOGHASH_THEME_PATH . '/inc/core/class-bloghash-theme-setup.php';
		// Compatibility.
		require_once BLOGHASH_THEME_PATH . '/inc/compatibility/woocommerce/class-bloghash-woocommerce.php';
		require_once BLOGHASH_THEME_PATH . '/inc/compatibility/socialsnap/class-bloghash-socialsnap.php';
		require_once BLOGHASH_THEME_PATH . '/inc/compatibility/class-bloghash-wpforms.php';
		require_once BLOGHASH_THEME_PATH . '/inc/compatibility/class-bloghash-jetpack.php';
		require_once BLOGHASH_THEME_PATH . '/inc/compatibility/class-bloghash-beaver-themer.php';
		require_once BLOGHASH_THEME_PATH . '/inc/compatibility/class-bloghash-elementor.php';
		require_once BLOGHASH_THEME_PATH . '/inc/compatibility/class-bloghash-elementor-pro.php';
		require_once BLOGHASH_THEME_PATH . '/inc/compatibility/class-bloghash-hfe.php';

		if ( is_admin() ) {
			require_once BLOGHASH_THEME_PATH . '/inc/utilities/class-bloghash-plugin-utilities.php';
			require_once BLOGHASH_THEME_PATH . '/inc/admin/class-bloghash-admin.php';

		}
		new Bloghash_Enqueue_Scripts();
		// Customizer.
		require_once BLOGHASH_THEME_PATH . '/inc/customizer/class-bloghash-customizer.php';
		require_once BLOGHASH_THEME_PATH . '/inc/customizer/customizer-callbacks.php';
		require_once BLOGHASH_THEME_PATH . '/inc/customizer/class-bloghash-section-ordering.php';
	}
	/**
	 * Setup objects to be used throughout the theme.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function objects() {

		bloghash()->options    = new Bloghash_Options();
		bloghash()->fonts      = new Bloghash_Fonts();
		bloghash()->icons      = new Bloghash_Icons();
		bloghash()->customizer = new Bloghash_Customizer();
		if ( is_admin() ) {
			bloghash()->admin = new Bloghash_Admin();
		}
	}
}

/**
 * The function which returns the one Bloghash instance.
 *
 * Use this function like you would a global variable, except without needing
 * to declare the global.
 *
 * Example: <?php $bloghash = bloghash(); ?>
 *
 * @since 1.0.0
 * @return object
 */
function bloghash() {
	return Bloghash::instance();
}
bloghash();

function demnayhair_tailwind_enqueue_scripts() {
    // Dist file generated by "npm run build"
    wp_enqueue_style(
        'demnayhair-tailwind', 
        get_stylesheet_directory_uri() . '/dist/tailwind.css', 
        array(), 
        filemtime(get_stylesheet_directory() . '/dist/tailwind.css')
    );
    wp_enqueue_script(
        'alpinejs', 
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', 
        array(), 
        null, 
        true
    );
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
	wp_enqueue_script('vue', 'https://unpkg.com/vue@3', array(), null, true);
    wp_enqueue_script('vue-app', get_template_directory_uri() . '/assets/js/app.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'demnayhair_tailwind_enqueue_scripts');


function create_live_rooms_cpt() {
    $labels = array(
        'name'               => __('Live Rooms', 'textdomain'),
        'singular_name'      => __('Live Room', 'textdomain'),
        'menu_name'          => __('Live Rooms', 'textdomain'),
        'name_admin_bar'     => __('Live Room', 'textdomain'),
        'add_new'            => __('Add New', 'textdomain'),
        'add_new_item'       => __('Add New Live Room', 'textdomain'),
        'new_item'           => __('New Live Room', 'textdomain'),
        'edit_item'          => __('Edit Live Room', 'textdomain'),
        'view_item'          => __('View Live Room', 'textdomain'),
        'all_items'          => __('All Live Rooms', 'textdomain'),
        'search_items'       => __('Search Live Rooms', 'textdomain'),
        'not_found'          => __('No Live Rooms found', 'textdomain'),
        'not_found_in_trash' => __('No Live Rooms found in Trash', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'live-room'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest'       => true, // Enables Gutenberg support
    );

    register_post_type('live_room', $args);
}
add_action('init', 'create_live_rooms_cpt');


function create_live_room_taxonomy() {
    $labels = array(
        'name'          => __('Live Room Categories', 'textdomain'),
        'singular_name' => __('Live Room Category', 'textdomain'),
        'search_items'  => __('Search Categories', 'textdomain'),
        'all_items'     => __('All Categories'),
        'edit_item'     => __('Edit Category'),
        'update_item'   => __('Update Category'),
        'add_new_item'  => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'menu_name'     => __('Categories'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'live-room-category'),
    );

    register_taxonomy('live_room_category', array('live_room'), $args);
}
add_action('init', 'create_live_room_taxonomy');


