<?php
declare(strict_types=1);
namespace WordHat\Context\Traits;

use WordHat\Driver\DriverInterface;

/**
 * Parent class for all awareness traits providing common code.
 */
trait BaseAwarenessTrait
{
    /**
     * Get active WordPress Driver.
     *
     * @param string $name Optional. Name of specific driver to retrieve.
     *
     * @return DriverInterface
     */
    abstract public function getDriver(string $name = ''): DriverInterface;
}
