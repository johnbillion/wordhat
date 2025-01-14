<?php
declare(strict_types=1);
namespace WordHat\Extension\Context\Traits;

use WordHat\Extension\Driver\DriverInterface;

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
