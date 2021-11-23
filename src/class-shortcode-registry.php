<?php
/**
 * Shortcodes: Shortcode registry class
 *
 * @package Moonwalking_Bits\Shortcodes
 * @author Martin Pettersson
 * @license GPL-2.0
 * @since 0.1.0
 */

namespace Moonwalking_Bits\Shortcodes;

/**
 * A shortcode registry class.
 *
 * @since 0.1.0
 */
class Shortcode_Registry {

	/**
	 * Registers a given shortcode.
	 *
	 * @since 0.1.0
	 * @param \Moonwalking_Bits\Shortcodes\Abstract_Shortcode $shortcode Shortcode instance.
	 */
	public function register( Abstract_Shortcode $shortcode ): void {
		add_shortcode(
			$shortcode->tag(),
			fn( $attributes, string $content ) => $this->render_shortcode( $shortcode, $attributes, $content )
		);
	}

	/**
	 * Renders the given shortcode.
	 *
	 * @param \Moonwalking_Bits\Shortcodes\Abstract_Shortcode $shortcode Shortcode instance.
	 * @param array|string                                    $attributes Shortcode attributes.
	 * @param string                                          $content Shortcode content.
	 * @return string String representation of the rendered shortcode.
	 */
	private function render_shortcode( Abstract_Shortcode $shortcode, $attributes, string $content ): string {
		return $shortcode->render(
			shortcode_atts( $shortcode->default_attributes(), is_string( $attributes ) ? array() : $attributes ),
			strlen( $content ) > 0 ? $content : null
		);
	}
}
