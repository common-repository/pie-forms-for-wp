<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * WordPress Menu Page Base Class
 */
abstract class PFORM_Abstracts_Menu
{
    /**
     * (required) The text to be displayed in the title tags of the page when the menu is selected
     *
     * @var string
     */
    public $page_title = '';

    /**
     * (required) The on-screen name text for the menu
     *
     * @var string
     */
    public $menu_title = '';

    /**
     * (required) The capability required for this menu to be displayed to the user.
     *
     * @var string
     */
    public $capability = 'manage_options';

    /**
     * (required) The slug name to refer to this menu by (should be unique for this menu).
     *
     * @var string
     */
    public $menu_slug = '';

    /**
     * (optional) The function that displays the page content for the menu page.
     *
     * @var string
     */
    public $function = 'display';

    /**
     * (optional) The icon for this menu.
     *
     * @var string
     */
    public $icon_url = '';

    /**
     * (optional) The position in the menu order this menu should appear.
     *
     * @var string
     */
    public $position = NULL;

    /**
     * Constructor
     *
     * Translate text and add the 'admin_menu' action.
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'register' ) );

    }

    /**
     * Register the menu page.
     */
    public function register()
    {
          // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

        $menu_slug = add_menu_page(
            $this->get_page_title(),
            $this->get_menu_title(),
            apply_filters( 'pie_forms_menu_' . $this->get_menu_slug() . '_capability', $this->get_capability() ),
            $this->menu_slug,
            array( $this, $this->function ),
            $this->icon_url,
            $this->position
        );

        //add_action( 'load-' . $menu_slug, array( $this, $this->function ) );

    }

    public function get_page_title()
    {
        return $this->page_title;
    }

    public function get_menu_title()
    {
        return ( $this->menu_title ) ? $this->menu_title : $this->get_page_title();
    }

    public function get_menu_slug()
    {
        return ( $this->menu_slug ) ? $this->menu_slug : 'pie-' . strtolower( preg_replace( '/[^A-Za-z0-9-]+/', '-', $this->get_menu_title() ) );
    }

    public function get_capability()
    {
        return $this->capability;
    }

    /**
     * Display the menu page.
     */
    public abstract function display();

    /**
     * Display the menu page.
     */
    // public abstract function screen_option();


}