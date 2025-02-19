<?php if ( ! defined( 'ABSPATH' ) ) exit;

final class PFORM_Admin_Menus_Blockuser extends PFORM_Abstracts_Submenu
{
    public $parent_slug = 'pie-forms';

    public $menu_slug = 'pf-blockuser';

    public $priority = 14;

    protected $_prefix = 'pie_forms';

    public function __construct()
    {
        parent::__construct();

    }

    public function get_page_title()
    {
        return esc_html__( 'Block User', 'pie-forms' );
    }

    public function get_capability()
    {
        return $this->capability;
    }

    public function display()
    {

        wp_enqueue_style('BlockuserCSS', Pie_Forms::$url . 'assets/css/blockuser.css', array(), Pie_Forms::VERSION );
        $this->settings_page_init();

        self::output();

    }

    public static function output() {
        
        Pie_Forms::template( 'blockuser.php' );
        Pie_Forms::template( 'related-features.php');
    }
    /**
	 * Loads settings page.
	 */
	public function settings_page_init() {
		global $current_tab, $current_section;
		// Get current tab/section.
		$current_tab     = empty( $_GET['tab'] ) ? 'username' : sanitize_title( wp_unslash( $_GET['tab'] ) ); 

        $current_section = empty( $_REQUEST['section'] ) ? '' : sanitize_title( wp_unslash( $_REQUEST['section'] ) ); 

		// Save settings if data has been posted.
		if ( apply_filters( '' !== $current_section ? "pie_forms_save_settings_{$current_tab}_{$current_section}" : "pie_forms_save_settings_{$current_tab}", ! empty( $_POST ) ) ) { 
            PFORM_Admin_Settings::save();
            
		}

		// Add any posted messages.
		if ( ! empty( $_GET['pf_error'] ) ) { 
			PFORM_Admin_Settings::add_error( wp_kses_post( wp_unslash( $_GET['pf_error'] ) ) ); 
		}

		if ( ! empty( $_GET['pf_message'] ) ) { 
			PFORM_Admin_Settings::add_message( wp_kses_post( wp_unslash( $_GET['pf_message'] ) ) ); 
        }
        


		do_action( 'pie_forms_settings_page_init' );
	}

} // End Class PFORM_Admin_Settings
