<?php
/**
 * Customizer functionality for the Blog settings panel.
 *
 * @package Hestia
 * @since   1.0.0
 */

/**
 * A customizer control to display text in customizer.
 *
 * @since 1.0.0
 */
class Hestia_Button extends WP_Customize_Control {

	/**
	 * Control id
	 *
	 * @var string $id Control id.
	 */
	public $id = '';

	/**
	 * Control label
	 *
	 * @var string $id Control id.
	 */
	public $label;

	/**
	 * Control description
	 *
	 * @var string $id Control id.
	 */
	public $description;

	/**
	 * Button class.
	 *
	 * @var mixed|string
	 */
	public $button_class = '';

	/**
	 * Icon class.
	 *
	 * @var mixed|string
	 */
	public $icon_class = '';

	/**
	 * Button text.
	 *
	 * @var mixed|string
	 */
	public $button_text = '';

	/**
	 * Text before.
	 *
	 * @var mixed|string
	 */
	public $text_before = '';

	/**
	 * Text after.
	 *
	 * @var mixed|string
	 */
	public $text_after = '';

	/**
	 * Is Button.
	 *
	 * @var bool
	 */
	public $is_button = true;

	/**
	 * Control to focus.
	 *
	 * @var string
	 */
	public $focus = '';

	/**
	 * Focus type.
	 *
	 * @var string
	 */
	public $focus_type = 'control';

	/**
	 * Focus type.
	 *
	 * @var string
	 */
	public $new_tab = false;

	/**
	 * Link.
	 *
	 * @var string
	 */
	public $link;

	/**
	 * Shortcut.
	 *
	 * @var bool
	 */
	public $shortcut = false;

	/**
	 * Class for the container of button.
	 *
	 * @var string
	 */
	public $container_class = false;

	/**
	 * Constructor.
	 *
	 * @param WP_Customize_Manager $manager Customizer manager.
	 * @param string               $id Control id.
	 * @param array                $args Argument.
	 */
	public function __construct( $manager, $id, $args = array() ) {
		parent::__construct( $manager, $id, $args );
		$this->id = $id;
	}

	/**
	 * Render content for the control.
	 *
	 * @since 1.0.0
	 */
	public function render_content() {
		if ( empty( $this->button_text ) ) {
			return;
		}

		if ( $this->label ) {
			echo '<span class="customize-control-title">';
			echo wp_kses_post( $this->label );
			echo '</span>';
		}

		if ( $this->description ) {
			echo '<p class="customize-control-description">';
			echo wp_kses_post( $this->description );
			echo '</span>';
		}

		$control = $this->is_button ? '<p' : '<span';
		if ( $this->container_class ) {
			$control .= ' class="' . esc_attr( $this->container_class ) . '"';
		}
		$control .= '>';

		if ( ! empty( $this->text_before ) ) {
			$control .= wp_kses_post( $this->text_before ) . ' ';
		}
		$control .= $this->is_button ? '<button ' : '<a style="cursor: pointer;" ';
		if ( $this->link ) {
			$control .= $this->is_button ? '' : 'href="' . esc_url( $this->link ) . '" ';
			$control .= $this->new_tab ? 'target="_blank" ' : '';
		}
		if ( $this->focus ) {
			$control .= 'data-' . $this->focus_type . '-focus="' . esc_attr( $this->focus ) . '"';
		}
		$control .= ' class="' . esc_attr( $this->get_button_classes() ) . '"';
		$control .= $this->is_button ? ' style="display: flex; align-items: center;"' : '';
		$control .= '>';
		$control .= $this->get_icon();
		$control .= esc_html( $this->button_text );
		$control .= $this->is_button ? '</button>' : '</a>';
		if ( ! empty( $this->text_after ) ) {
			$control .= wp_kses_post( $this->text_after );
		}

		$control .= $this->is_button ? '</p>' : '</span>';

		echo $control;  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	/**
	 * Get the icon.
	 *
	 * @return string
	 */
	private function get_icon() {
		if ( empty( $this->icon_class ) ) {
			return '';
		}

		return '<i class="dashicons dashicons-' . esc_attr( $this->icon_class ) . '" style="margin-right: 10px"></i>';
	}

	/**
	 * Get the button classes.
	 *
	 * @return string
	 */
	private function get_button_classes() {
		$classes = '';

		if ( $this->is_button ) {
			$classes .= 'button button-secondary';
		}
		if ( $this->shortcut ) {
			$classes .= ' menu-shortcut ';
		}
		if ( $this->button_class ) {
			$classes .= $this->button_class;
		}
		return $classes;
	}
}
