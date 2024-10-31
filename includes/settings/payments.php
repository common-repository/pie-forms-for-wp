<?php

defined( 'ABSPATH' ) || exit;

class PFORM_Settings_Payments extends PFORM_Abstracts_Settings {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->id    = 'payments';
		$this->label = esc_html__( 'Payments', 'pie-forms' );

		parent::__construct();
	}
	
	/**
	 * Get settings array.
	 */
	public function get_settings() {
		
		// return 	Pie_Forms::template( '/addonPages/mailchimp.php' );
		$settings = apply_filters(
			'pie_forms_payments_settings',
			array(
				array(
					'title'    => esc_html__( 'Payments', 'pie-forms' ),
					'desc'     => esc_html__( 'Payments Addon Available', 'pie-forms' ),
					'id'       => 'pf_payments_integration',
					'type'     => 'payments_integration',
				),
                array(
					'type' => 'sectionend',
					'id'   => 'payments_settings',
				),
			)
		);

		return apply_filters( 'pie_forms_get_settings_' . $this->id, $settings );
	}

	/**
	 * Save settings.
	 */
	public function save() {
		$settings = $this->get_settings();

		PFORM_Admin_Settings::save_fields( $settings );
	}
}