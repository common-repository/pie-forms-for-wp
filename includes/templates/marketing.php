
<?php
defined( 'ABSPATH' ) || exit;

global $current_section, $current_tab;

$tabs = apply_filters( 'pie_forms_marketing_tabs_array', array() );


if(!is_plugin_active('pie-forms-for-wp-mailchimp/pie-forms-for-wp-mailchimp.php')){
	$tabs['mailchimp'] = 'MailChimp';
}
if(!is_plugin_active('pie-forms-for-wp-activecampaign/pie-forms-for-wp-activecampaign.php')){
	$tabs['activecampaign'] = 'Active Campaign';
}

$tab_exists        = isset( $tabs[ $current_tab ] ) || has_action( 'pie_forms_sections_' . $current_tab ) || has_action( 'pie_forms_settings_' . $current_tab );
$current_tab_label = isset( $tabs[ $current_tab ] ) ? $tabs[ $current_tab ] : '';


?>

<div class="wrap pie-forms">
	<form method="<?php echo esc_attr( apply_filters( 'pie_forms_settings_form_method_tab_' . $current_tab, 'post' ) ); ?>" id="mainform" action="" enctype="multipart/form-data">
		<nav class="nav-tab-wrapper pf-nav-tab-wrapper">
			<?php
			foreach ( $tabs as $slug => $label ) {
				echo '<a href="' . esc_url( admin_url( 'admin.php?page=pf-marketing&tab=' . esc_attr( $slug ) ) ) . '" class="nav-tab ' . ( $current_tab === $slug ? 'nav-tab-active' : '' ) .' tab_'.esc_attr($slug).'"><span class="pf-nav-icon ' . esc_attr( $slug ) . '"></span>' . esc_html( $label ) . '</a>';
			}
			do_action( 'pie_forms_marketing_tabs' );
			?>
		</nav>
		
		<?php 
			if($current_tab == 'mailchimp' && !is_plugin_active('pie-forms-for-wp-mailchimp/pie-forms-for-wp-mailchimp.php')){
				
				wp_enqueue_style('AddonPages', Pie_Forms::$url . 'assets/css/addonPages.css', array(), Pie_Forms::VERSION );
        
				Pie_Forms::template( '/addonPages/mailchimp.php' );
				return;
			}
			if($current_tab == 'activecampaign' && !is_plugin_active('pie-forms-for-wp-activecampaign/pie-forms-for-wp-activecampaign.php')){
				
				wp_enqueue_style('AddonPages', Pie_Forms::$url . 'assets/css/addonPages.css', array(), Pie_Forms::VERSION );
        
				Pie_Forms::template( '/addonPages/activeCampaign.php' );
				return;
			}

			if(is_plugin_active('pie-forms-for-wp-mailchimp/pie-forms-for-wp-mailchimp.php') || is_plugin_active('pie-forms-for-wp-activecampaign/pie-forms-for-wp-activecampaign.php') ){

				{
			?>
			<div class="pie-forms-marketing" id='<?php echo esc_attr($current_tab); ?>'>
			<h1 class="marketing-page-heading"><?php echo esc_html( $current_tab_label ); ?></h1>
				<?php
					do_action( 'pie_forms_sections_' . $current_tab );

					PFORM_Admin_Settings::show_messages();
					
					do_action( 'pie_forms_settings_' . $current_tab );
					if($current_tab_label != ''){
				?>
				<p class="submit">
						<button name="save" class="pie-forms-btn pie-forms-btn-primary pie-forms-save-button" type="submit" value="<?php esc_attr_e( 'Save Settings', 'pie-forms' ); ?>"><?php esc_html_e( 'Save Settings', 'pie-forms' ); ?></button>
					<?php  ?>
					<?php wp_nonce_field( 'pie-forms-settings' ); ?>
				</p>
				<?php } ?>	
			</div>
		<?php 
			}
			?>	
		<?php  ?>
		</form>
	</div>
	<?php }

	if(isset($current_tab) && $current_tab == 'check'){
		'<h1>Hello</h1>';
	}
	?>
