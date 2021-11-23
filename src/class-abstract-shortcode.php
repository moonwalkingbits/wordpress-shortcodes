<?php
/**
 * Shortcodes: Abstract shortcode class
 *
 * @package Moonwalking_Bits\Shortcodes
 * @author Martin Pettersson
 * @license GPL-2.0
 * @since 0.1.0
 */

namespace Moonwalking_Bits\Shortcodes;

/**
 * Class representing an abstract shortcode.
 *
 * @since 0.1.0
 */
abstract class Abstract_Shortcode {

	/**
	 * Shortcode tag.
	 *
	 * @since 0.1.0
	 * @var string
	 */
	protected string $tag;

	/**
	 * Default shortcode attributes.
	 *
	 * @since 0.1.0
	 * @var array
	 */
	protected array $default_attributes = array();

	/**
	 * Returns the shortcode tag.
	 *
	 * @since 0.1.0
	 * @return string Shortcode tag.
	 */
	public function tag(): string {
		return $this->tag;
	}

	/**
	 * Returns the shortcode default attributes.
	 *
	 * @since 0.1.0
	 * @return array Shortcode default attributes.
	 */
	public function default_attributes(): array {
		return $this->default_attributes;
	}

	/**
	 * Returns a string representation of the rendered shortcode.
	 *
	 * @since 0.1.0
	 * @param array       $attributes Shortcode attributes.
	 * @param string|null $content Shortcode content.
	 * @return string String representation of the rendered shortcode.
	 */
	abstract public function render( array $attributes, ?string $content ): string;
}
