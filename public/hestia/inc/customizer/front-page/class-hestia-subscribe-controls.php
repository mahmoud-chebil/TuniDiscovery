<?php
/**
 * Subscribe controls.
 *
 * @package Hestia
 */

/**
 * Class Hestia_Subscribe_Controls
 */
class Hestia_Subscribe_Controls extends Hestia_Front_Page_Section_Controls_Abstract {

	/**
	 * Add section details
	 *
	 * @return array
	 */
	protected function set_section_data() {
		return array(
			'slug'             => 'subscribe',
			'title'            => esc_html__( 'Subscribe', 'hestia' ),
			'priority'         => 55,
			'initially_hidden' => true,
		);

	}

	/**
	 * Add controls.
	 */
	public function add_controls() {
		$this->add_tabs();
		$this->add_info_control();
		$this->add_background_control();
	}

	/**
	 * Add section tabs/
	 */
	private function add_tabs() {
		$this->add_control(
			new Hestia_Customizer_Control(
				'hestia_subscribe_tabs',
				array(
					'sanitize_callback' => 'sanitize_text_field',
				),
				array(
					'section'  => 'hestia_subscribe',
					'tabs'     => array(
						'general'    => array(
							'label' => esc_html__( 'General Settings', 'hestia' ),
						),
						'sendinblue' => array(
							'label' => esc_html__( 'SendinBlue plugin', 'hestia' ),
						),
					),
					'controls' => array(
						'general'    => array(
							'hestia_subscribe_hide'       => array(),
							'hestia_subscribe_background' => array(),
							'hestia_subscribe_title'      => array(),
							'hestia_subscribe_subtitle'   => array(),
						),
						'sendinblue' => array(
							'hestia_subscribe_info' => array(),
							'hestia_link_to_subscribe_widgets' => array(),
						),
					),
					'priority' => 0,
				),
				'Hestia_Customize_Control_Tabs'
			)
		);
	}

	/**
	 * Add background control.
	 */
	private function add_background_control() {

		$this->add_control(
			new Hestia_Customizer_Control(
				'hestia_subscribe_background',
				array(
					'default'           => get_template_directory_uri() . '/assets/img/about.jpg',
					'sanitize_callback' => 'esc_url_raw',
					'transport'         => $this->selective_refresh,
				),
				array(
					'label'    => esc_html__( 'Background Image', 'hestia' ),
					'section'  => 'hestia_subscribe',
					'priority' => 3,
				),
				'WP_Customize_Image_Control'
			)
		);
	}

	/**
	 * Add the info control.
	 */
	private function add_info_control() {
		$this->add_control(
			new Hestia_Customizer_Control(
				'hestia_subscribe_info',
				array(
					'sanitize_callback' => 'sanitize_text_field',
				),
				array(
					'label'      => esc_html__( 'Instructions', 'hestia' ),
					'section'    => 'hestia_subscribe',
					'capability' => 'install_plugins',
					'priority'   => 25,
				),
				'Hestia_Subscribe_Info'
			)
		);

		$this->add_control(
			new Hestia_Customizer_Control(
				'hestia_link_to_subscribe_widgets',
				array(
					'sanitize_callback' => 'sanitize_text_field',
				),
				array(
					'container_class' => 'quick-links',
					'text_before'     => '<span class="dashicons dashicons-info" style="margin-right: 3px"></span>' . __( 'Edit the Subscribe Widgets', 'hestia' ),
					'text_after'      => '.',
					'button_text'     => __( 'here', 'hestia' ),
					'is_button'       => false,
					'focus_type'      => 'section',
					'focus'           => 'sidebar-widgets-subscribe-widgets',
					'shortcut'        => true,
					'section'         => 'hestia_subscribe',
					'priority'        => 1000,
				),
				'Hestia_Button'
			)
		);
	}

	/**
	 * Change any controls that may need change.
	 *
	 * @return void
	 */
	public function change_controls() {
		$this->change_customizer_object( 'setting', 'hestia_subscribe_title', 'default', esc_html__( 'Subscribe to our Newsletter', 'hestia' ) );
		$this->change_customizer_object( 'setting', 'hestia_subscribe_subtitle', 'default', esc_html__( 'Change this subtitle in the Customizer', 'hestia' ) );
	}
}
