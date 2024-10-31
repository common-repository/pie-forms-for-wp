<?php if ( ! defined( 'ABSPATH' ) ) exit;

final class PFORM_Admin_Menus_AddonPages_DripCampaign extends PFORM_Abstracts_Submenu
{
    public $parent_slug = 'pie-forms';

    public $menu_slug = 'pf-drip-campaign';

    public $priority = 15;

    protected $_prefix = 'pie_forms';

    public function get_page_title()
    {
        return __( 'Drip Campaign', 'pie-forms' );
    }

    public function get_capability()
    {
        return $this->capability;
    }

    public function display()
    {
        wp_enqueue_style('AddonPages', Pie_Forms::$url . 'assets/css/addonPages.css', array(), Pie_Forms::VERSION );
        
        Pie_Forms::template( '/addonPages/dripCampaign.php' );
        Pie_Forms::template( 'related-features.php');
    }

} // End Class PFORM_Admin_Menus
