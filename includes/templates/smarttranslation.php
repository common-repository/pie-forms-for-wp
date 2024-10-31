
<?php
defined( 'ABSPATH' ) || exit;

global $current_section, $current_tab, $errors;

?>
<div class="smarttranslation-page-heading-icon">
	<h1 class="smarttranslation-page-heading"><?php echo esc_html__( 'Smart Auto Translation' ); ?></h1>
</div>

<?php if(is_plugin_active('pie-forms-for-wp-smart-translation/pie-forms-for-wp-smart-translation.php') ){?>
<div class="wrap pie-smarttranslation">
	<form method="<?php echo esc_attr( apply_filters( 'pie_forms_smarttranslation_form_method_tab_' . $current_tab, 'post' ) ); ?>" id="mainform" action="" enctype="multipart/form-data">
		
		<?php 
        	?>
			
			<div class="pie-forms-smarttranslation" id='<?php echo esc_attr($current_tab); ?>'>
				<?php
					do_action( 'pie_forms_sections_' . $current_tab );

					PFORM_Admin_Settings::show_messages();
					
					do_action( 'pie_forms_settings_' . $current_tab );

				?>

				<p class="submit">
						<button name="save" class="pie-forms-btn pie-forms-btn-primary pie-forms-save-button" type="submit" value="<?php esc_attr_e( 'save settings', 'pie-forms' ); ?>"><?php esc_html_e( 'Save Settings', 'pie-forms' ); ?></button>
					<?php  ?>
					<?php wp_nonce_field( 'pie-forms-settings' ); ?>
				</p>	
			</div>
		<?php 
		 ?>	
	<?php  ?>
	</form>
	<?php  ?>
	<?php }else{
        	wp_enqueue_style('AddonPages', Pie_Forms::$url . 'assets/css/addonPages.css', array(), Pie_Forms::VERSION );
	        Pie_Forms::template( 'addonPages/smarttranslation.php' );
			$plugins = get_dashboard_url().'/plugins.php';
				echo sprintf(__('<div class="pf-activate-plugin-notice" style=margin:20px;><a href="%s">Please Activate Smart Auto Translation Addon</a></div>'), $plugins);
} ?>

</div>
