<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.kybernetik-services.com
 * @since      3.0
 *
 * @package    Hinjipwpm
 * @subpackage Hinjipwpm/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Hinjipwpm
 * @subpackage Hinjipwpm/public
 * @author     Kybernetik Services <wordpress@kybernetik.com.de>
 */
class PWM_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    3.0
	 * @access   private
	 * @var      string    $hinjipwpm    The ID of this plugin.
	 */
	private $hinjipwpm;

	/**
	 * The version of this plugin.
	 *
	 * @since    3.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The settings of this plugin.
	 *
	 * @since    3.0
	 * @access   private
	 * @var      string    $settings    The current settings of this plugin.
	 */
	private $settings;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    3.0
	 * @var      string    $hinjipwpm       The name of the plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $hinjipwpm, $version, $settings ) {

		$this->hinjipwpm = $hinjipwpm;
		$this->version = $version;
		$this->settings = $settings;

	}

	/**
	* Clean the CSS classes of items in navigation menus
	*
	* @since   1.0
	*
	* @param   array    $css_classes    Strings wp_nav_menu() builded for a single menu item
	* @uses    $settings
	* @uses    purify_page_menu_item_classes()
	* @return  array|string             Empty string if param is not an array, else the array with strings for the menu item
	*/
	public function purify_custom_menu_item_classes ( $css_classes, $menu_item ) {
		if ( ! is_array( $css_classes ) ) {
			return '';
		}

		$item_is_parent = false;
		$classes = array();

		foreach ( $css_classes as $class ) {

			// This class is added to every menu item. 
			if ( isset( $this->settings['pwpm_print_menu_item'] ) && 1 == $this->settings['pwpm_print_menu_item'] && 'menu-item' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class with the item id is added to every menu item. 
			if ( isset( $this->settings['pwpm_print_menu_item_id'] ) && 1 == $this->settings['pwpm_print_menu_item_id'] && 'menu-item-' . $menu_item->ID == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to a category. 
			if ( isset( $this->settings['pwpm_print_menu_item_object_category'] ) && 1 == $this->settings['pwpm_print_menu_item_object_category'] && 'menu-item-object-category' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to a tag. 
			if ( isset( $this->settings['pwpm_print_menu_item_object_tag'] ) && 1 == $this->settings['pwpm_print_menu_item_object_tag'] && 'menu-item-object-tag' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to pages. 
			if ( isset( $this->settings['pwpm_print_menu_item_object_page'] ) && 1 == $this->settings['pwpm_print_menu_item_object_page'] && 'menu-item-object-page' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to every menu item, where {object} is either a post type or a taxonomy.
			if ( isset( $this->settings['pwpm_print_menu_item_object_any'] ) && 1 == $this->settings['pwpm_print_menu_item_object_any'] && 'menu-item-object-' . $menu_item->object == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to post types { i.e. pages or custom post types. 
			if ( isset( $this->settings['pwpm_print_menu_item_type_post_type'] ) && 1 == $this->settings['pwpm_print_menu_item_type_post_type'] && 'menu-item-type-post_type' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to taxonomies
			if ( isset( $this->settings['pwpm_print_menu_item_type_taxonomy'] ) && 1 == $this->settings['pwpm_print_menu_item_type_taxonomy'] && 'menu-item-type-taxonomy' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to any type
			if ( isset( $this->settings['pwpm_print_menu_item_type_any'] ) && 1 == $this->settings['pwpm_print_menu_item_type_any'] && 'menu-item-type-' . $menu_item->type == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that have sub menu items. 
			if ( isset( $this->settings['pwpm_print_menu_item_has_children'] ) && 1 == $this->settings['pwpm_print_menu_item_has_children'] && 'menu-item-has-children' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_menu_item'] ) && 1 == $this->settings['pwpm_print_current_menu_item'] && 'current-menu-item' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to the hierarchical parent of the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_menu_parent'] ) && 1 == $this->settings['pwpm_print_current_menu_parent'] && 'current-menu-parent' == $class ) {
				$classes[] = $class;
				$item_is_parent = true;
				continue;
			}

			// This class is added to menu items that correspond to the hierachical parent of the currently rendered type, where {type} corresponds to the the value used for .menu-item-type-{type}. 
			if ( isset( $this->settings['pwpm_print_current_type_any_parent'] ) && 1 == $this->settings['pwpm_print_current_type_any_parent'] && 'current-' . $menu_item->type . '-parent' == $class ) {
				$classes[] = $class;
				$item_is_parent = true;
				continue;
			}

			// This class is added to menu items that correspond to the hierachical parent of the currently rendered object, where {object} corresponds to the the value used for .menu-item-object-{object}. 
			if ( isset( $this->settings['pwpm_print_current_object_any_parent'] ) && 1 == $this->settings['pwpm_print_current_object_any_parent'] && 'current-' . $menu_item->object . '-parent' == $class ) {
				$classes[] = $class;
				$item_is_parent = true;
				continue;
			}

			// This class is added to menu items that correspond to a hierarchical ancestor of the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_menu_ancestor'] ) && 1 == $this->settings['pwpm_print_current_menu_ancestor'] && 'current-menu-ancestor' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to a hierachical ancestor of the currently rendered type, where {type} corresponds to the the value used for .menu-item-type-{type}. 
			if ( isset( $this->settings['pwpm_print_current_type_any_ancestor'] ) && 1 == $this->settings['pwpm_print_current_type_any_ancestor'] && 'current-' . $menu_item->type . '-ancestor' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to a hierachical ancestor of the currently rendered taxonomy
			if ( isset( $this->settings['pwpm_print_current_taxonomy_ancestor'] ) && 1 == $this->settings['pwpm_print_current_taxonomy_ancestor'] && 'current-' . $menu_item->taxonomy . '-ancestor' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to a hierachical ancestor of the currently rendered object, where {object} corresponds to the the value used for .menu-item-object-{object}. 
			if ( isset( $this->settings['pwpm_print_current_object_any_ancestor'] ) && 1 == $this->settings['pwpm_print_current_object_any_ancestor'] && 'current-' . $menu_item->object . '-ancestor' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to the site front page. 
			if ( isset( $this->settings['pwpm_print_menu_item_home'] ) && 1 == $this->settings['pwpm_print_menu_item_home'] && 'menu-item-home' == $class ) {
				$classes[] = $class;
				// last statement before loop end does not need a continue
			}

			// This class is added to menu items that correspond to the Privacy Policy page
			if ( isset( $this->settings['pwpm_print_menu_item_privacy-policy'] ) && 1 == $this->settings['pwpm_print_menu_item_privacy-policy'] && 'menu-item-privacy-policy' == $class ) {
				$classes[] = $class;
				// last statement before loop end does not need a continue
			}

			// This class is added to menu items that correspond to a page. 
			if ( isset( $this->settings['pwpm_print_page_item'] ) && 1 == $this->settings['pwpm_print_page_item'] && 'page_item' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_page_item'] ) && 1 == $this->settings['pwpm_print_current_page_item'] && 'current_page_item' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to the hierarchical parent of the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_page_parent'] ) && 1 == $this->settings['pwpm_print_current_page_parent'] && 'current_page_parent' == $class ) {
				$classes[] = $class;
				$item_is_parent = true;
				continue;
			}

			// This class is added to menu items that correspond to a hierarchical ancestor of the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_page_ancestor'] ) && 1 == $this->settings['pwpm_print_current_page_ancestor'] && 'current_page_ancestor' == $class ) {
				$classes[] = $class;
				// last, no continue;
			}
		} // end foreach()

		// delete ancestor classes if users does not wish them on parent items
		if ( isset( $this->settings['pwpm_do_not_print_parent_as_ancestor'] ) && 1 == $this->settings['pwpm_do_not_print_parent_as_ancestor'] && $item_is_parent ) {
			// regular expression search on array values
			$keys = array();
			foreach ( $classes as $key => $val ) {
				if ( preg_match( '/current-[^-]+-ancestor/', $val ) ) {
					$keys[] = $key;
				}
			}
			// delete ancestor classes if found
			if ( $keys ) {
				foreach ( $keys as $key ) {
					unset( $classes[ $key ] );
				}
			}
		} // end if()

		// Backward Compatibility with wp_page_menu() 
		// the following classes are added to maintain backward compatibility with the wp_page_menu() function output
		if ( isset( $this->settings['pwpm_backward_compatibility_with_wp_page_menu'] ) && 1 == $this->settings['pwpm_backward_compatibility_with_wp_page_menu'] ) {
			$classes = array_merge( $classes, $this->purify_page_menu_item_classes( $css_classes ) );
		}
		
		// Add custom CSS classes if available
		$custom_css_classes = (array) get_post_meta( $menu_item->ID, '_menu_item_classes', true );

		// Get the new set of css classes for the item
		$menu_item_classes = array_intersect( $css_classes, $classes );
		
		// Return the css classes with custom css classes
		return array_merge( $menu_item_classes, $custom_css_classes );

	} // end purify_custom_menu_item_classes()

	/**
	* Clean the id attribute of items in navigation menus
	*
	* @since   1.0
	*
	* @return  string                     Empty string if param should not be returned, else the param itself
	*/
	public function purify_custom_menu_item_id () {
		return '';
	} // end purify_custom_menu_item_id()

	/**
	* Clean the CSS classes of items in page menus
	*
	* @since   1.0
	*
	* @param   array    $css_classes    Strings wp_page_menu() builded for a single item
	* @uses    $settings
	* @return  array|string             Empty string if param is not an array, else the array with strings for the menu item
	*/
	public function purify_page_menu_item_classes( $css_classes ) {
		if ( ! is_array( $css_classes ) ) {
			return '';
		}

		$item_is_parent = false;
		$classes = array();

		foreach ( $css_classes as $class ) {
			
			// This class is added to page menu items that have sub menu items. 
			if ( isset( $this->settings['pwpm_print_page_item_has_children'] ) && 1 == $this->settings['pwpm_print_page_item_has_children'] && 'page_item_has_children' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to a page, where $ID is the page ID. 
			if ( isset( $this->settings['pwpm_print_page_item_id'] ) && 1 == $this->settings['pwpm_print_page_item_id'] && 'page-item-' . $menu_item->object_id == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_page_item'] ) && 1 == $this->settings['pwpm_print_current_page_item'] && 'current_page_item' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to menu items that correspond to the hierarchical parent of the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_page_parent'] ) && 1 == $this->settings['pwpm_print_current_page_parent'] && 'current_page_parent' == $class ) {
				$classes[] = $class;
				$item_is_parent = true;
				continue;
			}

			// This class is added to menu items that correspond to a hierarchical ancestor of the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_page_ancestor'] ) && 1 == $this->settings['pwpm_print_current_page_ancestor'] && 'current_page_ancestor' == $class ) {
				$classes[] = $class;
				// last, no continue;
			}
		} // end foreach

		// delete ancestor class if users does not wish it on parent items
		if ( isset( $this->settings['pwpm_do_not_print_parent_as_ancestor'] ) && 1 == $this->settings['pwpm_do_not_print_parent_as_ancestor'] && $item_is_parent ) {
			// regular expression search on array values
			$key = array_search( 'current_page_ancestor', $classes );
			// delete ancestor classes if found
			unset( $classes[ $key ] );
		}

		// Returns the classes for the item
		return array_intersect( $css_classes, $classes );
	} // end purify_page_menu_item_classes()

	/**
	* Clean the CSS classes of items in navigation menus
	*
	* @since   3.4
	*
	* @param   array    $css_classes    Strings wp_nav_menu() builded for a single menu item
	* @uses    $settings
	* @uses    purify_page_menu_item_classes()
	* @return  array|string             Empty string if param is not an array, else the array with strings for the menu item
	*/
	public function purify_category_list_item_classes ( $css_classes, $cat_item ) {
		if ( ! is_array( $css_classes ) ) {
			return array();
		}

		$item_is_parent = false;
		$classes = array();

		foreach ( $css_classes as $class ) {

			// This class is added to every cat item. 
			if ( isset( $this->settings['pwpm_print_cat_item'] ) && 1 == $this->settings['pwpm_print_cat_item'] && 'cat-item' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class with the item id is added to every cat item. 
			if ( isset( $this->settings['pwpm_print_cat_item_id'] ) && 1 == $this->settings['pwpm_print_cat_item_id'] && 'cat-item-' . $cat_item->cat_ID == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to cat items that correspond to the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_cat'] ) && 1 == $this->settings['pwpm_print_current_cat'] && 'current-cat' == $class ) {
				$classes[] = $class;
				continue;
			}

			// This class is added to cat items that correspond to the hierarchical parent of the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_cat_parent'] ) && 1 == $this->settings['pwpm_print_current_cat_parent'] && 'current-cat-parent' == $class ) {
				$classes[] = $class;
				$item_is_parent = true;
				continue;
			}

			// This class is added to cat items that correspond to a hierarchical ancestor of the currently rendered page. 
			if ( isset( $this->settings['pwpm_print_current_cat_ancestor'] ) && 1 == $this->settings['pwpm_print_current_cat_ancestor'] && 'current-cat-ancestor' == $class ) {
				$classes[] = $class;
				continue;
			}

		} // end foreach()

		// delete ancestor classes if users does not wish them on parent items
		if ( isset( $this->settings['pwpm_do_not_print_cat_parent_as_ancestor'] ) && 1 == $this->settings['pwpm_do_not_print_cat_parent_as_ancestor'] && $item_is_parent ) {
			// regular expression search on array values
			$keys = array();
			foreach ( $classes as $key => $val ) {
				if ( 'current-cat-ancestor' === $val ) {
					$keys[] = $key;
				}
			}
			// delete ancestor classes if found
			if ( $keys ) {
				foreach ( $keys as $key ) {
					unset( $classes[ $key ] );
				}
			}
		} // end if()

		// Return the new set of css classes for the item
		//return array_intersect( $css_classes, $classes );
		return $classes;

	} // end purify_category_list_item_classes()


}
