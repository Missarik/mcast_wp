<?php
namespace Saltus\WP\Framework\Features\Meta;

use Saltus\WP\Framework\Infrastructure\Service\{
	Assembly,
	Service,
	Conditional
};

/**
 */
final class Meta implements Service, Conditional, Assembly {

	/**
	 * Check whether the conditional service is currently needed.
	 *
	 * @return bool Whether the conditional service is needed.
	 */
	public static function is_needed(): bool {
		/*
		 * Only load this sample service on the admin backend.
		 * If this conditional returns false, the service is never even
		 * instantiated.
		 */
		return \is_admin() && ! \wp_doing_ajax();
	}

	/**
	 * Instantiate this Service object.
	 *
	 */
	public function __construct() {

	}

	/**
	 * Create a new instance of the service provider
	 *
	 * @return object The new instance
	 */
	public static function make( $name, $project, $args ) {
		return new CodestarMeta( $name, $project, $args );
	}

}

