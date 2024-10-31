<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php 
	$action =	"";
    $active	= 'class="selected"';
	if(isset($_GET['tab']))
        $action	= sanitize_key($_GET['tab']);

    $images_url = PIE_FORMS::$url . 'assets/images/addons/drip';
	?>

<div id="container"  class="pf-admin addons-page-admin">
    <div class="pane">
        <?php if( sanitize_key($_GET['page']) == 'pf-drip-campaign' ) { ?> 
            <div id="tab2" class="tab-content">
            <div class="addons-container-section">
                <div class="content-row">
                    <div class="pf-addons-content">
                        <h1>Drip Campaign Addon</h1>
                        <h3 class="addon-page-title">Drip Campaign allows you to plan an automatic campaign of emails that starts as soon as a user fill the form. With the Drip Campaign add-on for Pie Forms, you can create multiple email campaigns for every form with a few easy steps.

You can add smart tags in your email to display your name, email, and a link for users to unsubscribe. Admin can view the list of unsubscribers and all the previously sent email campaigns in the go.</h3>

                        <h1 class="pf-addons-key-features-heading">Key Features</h1>

                        <ul class="pf-addon-key-features-list">
                            <li>- <?php esc_html_e("Simple to schedule emails by setting hours and days for the campaign..","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Automatic and immediate email response to form submission.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Add smart tags in your email body for name, email, and unsubscription.","pie-forms"); ?></li>
                        </ul>
                        <ul class="resourceful-links">
                            <li><a href="https://store.genetech.co/checkout?add-to-cart=10172" target="_blank">Purchase this Addon</a></li>
                            <li><a href="https://pieforms.com/addons/drip-campaign/?utm_source=admindashboard&utm_medium=Addonspage&utm_campaign=freeuserr" target="_blank">View Documentation</a></li>
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
        <?php } ?>
    </div>
</div>