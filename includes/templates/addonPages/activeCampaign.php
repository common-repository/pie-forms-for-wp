<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php 
	$action =	"";
    $active	= 'class="selected"';
	if(isset($_GET['tab']))
        $action	= sanitize_key($_GET['tab']);

    $images_url = PIE_FORMS::$url . 'assets/images/addons/activecampaign-addon';
	?>

<div id="container"  class="pf-admin addons-page-admin">
    <div class="pane">
            <div id="tab2" class="tab-content">
            <div class="addons-container-section">
                <div class="content-row">
                    <div class="pf-addons-content">
                        <h1>ActiveCampaign Addon</h1>
                        <h3 class="addon-page-title">ActiveCampaign for Pie Forms has made it incredibly easy to store and manage unlimited entries of user data on ActiveCampaign When a form is submitted, you can automatically add people to your ActiveCampaign email list by using the Pie Forms ActiveCampaign add-on. Maintain all of your customer information in one place and combine it with ActiveCampaign's Customer Experience Automation to offer individualized customer experiences at scale.</h3>

                        <h1 class="pf-addons-key-features-heading">Key Features</h1>

                        <ul class="pf-addon-key-features-list">
                            <li>- <?php esc_html_e("ActiveCampaign add-on allows you to add contacts, log events, and automate contacts with tags.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Using the PieForms ActiveCampaign extension, you can choose which tags to add to contacts in ActiveCampaign.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Users can submit particular form data to their ActiveCampaign account by mapping form fields to ActiveCampaign fields.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Using the Add-On, users can tag leads according to their submitted form.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Users can select the ActiveCampaign list to which form submissions should be added.","pie-forms"); ?></li>
                        </ul>

                        <ul class="resourceful-links">
                            <li><a href="https://store.genetech.co/checkout?add-to-cart=11086" target="_blank">Purchase this Addon</a></li>
                            <li><a href="https://pieforms.com/addons/activecampaign-addon/?utm_source=admindashboard&utm_medium=Addonspage&utm_campaign=freeuser" target="_blank">View Documentation</a></li>
                        </ul>

                    </div>
                    <div class="addon-image-link">
                        <div class="addon-pf-image">
                                <img src="<?php echo esc_url($images_url . '.jpg' ); ?>" alt="Create a Form">    
                        </div>

                    </div>
                </div>
            </div>
        </div>			   
    </div>
</div>