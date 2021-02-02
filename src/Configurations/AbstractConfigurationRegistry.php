<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySentryClientIntegration\Configurations;

use CodeKandis\Tiphy\Configurations\AbstractConfigurationRegistry as OriginAbstractConfigurationRegistry;

/**
 * Represents the base class of all configuration registries.
 * @package codekandis/tiphy-sentry-client-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractConfigurationRegistry extends OriginAbstractConfigurationRegistry implements ConfigurationRegistryInterface
{
	use ConfigurationRegistryTrait;
}
