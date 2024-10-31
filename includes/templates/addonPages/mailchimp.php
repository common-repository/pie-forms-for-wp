<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php 
	$action =	"";
    $active	= 'class="selected"';
	if(isset($_GET['tab']))
        $action	= sanitize_key($_GET['tab']);

    $images_url = PIE_FORMS::$url . 'assets/images/addons/mailchimp';
	?>

<div id="container"  class="pf-admin addons-page-admin">
    <div class="pane">
            <div id="tab2" class="tab-content">
            <div class="addons-container-section">
                <div class="content-row">
                    <div class="pf-addons-content">
                        <h1>MailChimp Addon</h1>
                        <h3 class="addon-page-title">MailChimp is one of the most well-known mass email tools to help you create and manage your Email Marketing campaigns. With the MailChimp add-on for Pie Forms, you can auto-add the users to your MailChimp email list right when the form submission happens. As per the current data security rules, you will need to enable GDPR and choose between the Single opt-in/Double opt-in method on your forms to get the user’s consent.

This add-on allows you to map and merge the form fields with the MailChimp fields to save user data exactly as you need it.</h3>

                        <h1 class="pf-addons-key-features-heading">Key Features</h1>

                        <ul class="pf-addon-key-features-list">
                            <li>- <?php esc_html_e("Select the MailChimp mailing list to save the user data.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Choose the Single opt-in/Double opt-in for user consent verification.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Map and merge the form fields with the MailChimp tags.","pie-forms"); ?></li>
                        </ul>

                        <ul class="resourceful-links">
                            <li><a href="https://store.genetech.co/checkout?add-to-cart=9099" target="_blank">Purchase this Addon</a></li>
                            <li><a href="https://pieforms.com/mail-chimp/?utm_source=admindashboard&utm_medium=Addonspage&utm_campaign=freeuser" target="_blank">View Documentation</a></li>
                        </ul>

                    </div>
                    <div class="addon-image-link">
                        <div class="addon-pf-image">
                                <img src="<?php echo esc_url($images_url . '.png' ); ?>" alt="Create a Form">    
                        </div>

                    </div>
                </div>
            </div>
        </div>			   
    </div>
</div>