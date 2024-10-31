<?php

defined( 'ABSPATH' ) || exit;

class PFORM_Settings_Integrations extends PFORM_Abstracts_Settings {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->id    = 'integrations';
		$this->label = esc_html__( 'Integrations', 'pie-forms' );

		parent::__construct();
	}

	/**
	 * Get settings array.
	 */
	public function get_settings() {
		$settings = apply_filters(
			'pie_forms_integrations_settings',
			array(
				array(
					'title' => esc_html__( 'Integration Settings', 'pie-forms' ),
					'type'  => 'title',
					'id'    => 'integration_settings',
				),
				array(
					'title'    => esc_html__( 'Integration', 'pie-forms' ),
					'desc'     => esc_html__( 'Automations with Pie Forms', 'pie-forms' ),
					'id'       => 'pf_integrations',
					'type'     => 'integration',
				),
                array(
					'type' => 'sectionend',
					'id'   => 'integration_settings',
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