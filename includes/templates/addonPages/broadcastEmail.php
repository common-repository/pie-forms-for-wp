<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php 
	$action =	"";
    $active	= 'class="selected"';
	if(isset($_GET['tab']))
        $action	= sanitize_key($_GET['tab']);

    $images_url = PIE_FORMS::$url . 'assets/images/addons/broadcast';
	?>

<div id="container"  class="pf-admin addons-page-admin">
    <div class="pane">
        <?php if( sanitize_key($_GET['page']) == 'pf-broadcast-email' ) { ?> 
            <div id="tab2" class="tab-content">
            <div class="addons-container-section">
                <div class="content-row">
                    <div class="pf-addons-content">
                        <h1>Broadcast Email Addon</h1>
                        <h3 class="addon-page-title">Sending broadcast emails to every registered user can be a stress. However, with Pie Forms Broadcast Email Add-on, you can now create and schedule engaging and interacting broadcast emails in no time to an entire list of registered users simultaneously.<br>

                        With the Broadcast Email add-on, you can send newsletters, announcements, and updates on the products to all the registered users through a particular form or multiple forms simultaneously. You can add smart tags in your email to display user name, email, and a link for users to unsubscribe. Admin can view the list of unsubscribers and all previously sent emails.</h3>

                        <h1 class="pf-addons-key-features-heading">Key Features</h1>

                        <ul class="pf-addon-key-features-list">
                            <li>- <?php esc_html_e("It allows the admin to send a single message to all the registered users through that form.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Broadcast emails are quick and time-saving.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Users are kept informed through announcements, newsletters, and updates using the Broadcast Email","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Admin can schedule the email campaign to be sent at the best time for recipients.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Add smart tags in your email body for name, email, and unsubscribe.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Admin can view the list of previously sent Broadcast emails.","pie-forms"); ?></li>
                        </ul>

                        <ul class="resourceful-links">
                            <li><a href="https://store.genetech.co/checkout?add-to-cart=10173" target="_blank">Purchase this Addon</a></li>
                            <li><a href="https://pieforms.com/addons/broadcast-email/?utm_source=admindashboard&utm_medium=Addonspage&utm_campaign=freeuser" target="_blank">View Documentation</a></li>
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