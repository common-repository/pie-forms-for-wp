<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php 
	$action =	"";
    $active	= 'class="selected"';
	if(isset($_GET['tab']))
        $action	= sanitize_key($_GET['tab']);

    $images_url = PIE_FORMS::$url . 'assets/images/addons/smart-translation';
	?>

<div id="container"  class="pf-admin addons-page-admin">
    <div class="pane">
        <?php if( sanitize_key($_GET['page']) == 'pf-smarttranslation' ) { ?> 
            <div id="tab2" class="tab-content">
            <div class="addons-container-section">
                <div class="content-row">
                    <div class="pf-addons-content">
                        <h1>Smart Translator Addon</h1>
                        <h3 class="addon-page-title">Do you have a multilingual audience for your Business website? If yes, then it is beneficial to translate the content into your required language.
<br>
With the Auto Smart Translator Addon, you can auto-translate the text in your selected language with Google Translate or Deepl. Activate the addon and get the output in your selected language.</h3>

                        <h1 class="pf-addons-key-features-heading">Key Features</h1>

                        <ul class="pf-addon-key-features-list">
                            <li>- <?php esc_html_e("Works with two Translators, Google Translate and Deepl.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Translates the text for Text Area and Single Line Text field.","pie-forms"); ?></li>
                            <li>- <?php esc_html_e("Enable the Smart Translation to make the fields auto-translated.","pie-forms"); ?></li>
                        </ul>

                        <ul class="resourceful-links">
                                         
                            <li><a href="https://store.genetech.co/checkout?add-to-cart=10205" target="_blank">Purchase this Addon</a></li>
                            <li><a href="https://pieforms.com/addons/smart-translator/?utm_source=admindashboard&utm_medium=Addonspage&utm_campaign=freeuser" target="_blank">View Documentation</a></li>
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