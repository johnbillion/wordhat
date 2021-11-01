<?php
declare(strict_types=1);
namespace WordHat\Extension\Driver;

use WordHat\Extension\Exception\UnsupportedDriverActionException;
use WordHat\Extension\Driver\Element\ElementInterface;

/**
 * Common base class for WordPress drivers.
 *
 * A driver represents and manages the connection between the Behat environment and a WordPress site.
 *
 * @property ElementInterface $cache
 * @property ElementInterface $comment
 * @property ElementInterface $content
 * @property ElementInterface $database
 * @property ElementInterface $plugin
 * @property ElementInterface $term
 * @property ElementInterface $theme
 * @property ElementInterface $user
 */
abstract class BaseDriver implements DriverInterface
{
    /**
     * Track driver bootstrapping.
     *
     * @var bool
     */
    protected $is_bootstrapped = false;

    /**
     * Registered driver elements.
     *
     * @var Element\ElementInterface[]
     */
    protected $elements = [];

    /**
     * Expose $elements as public properties.
     *
     * @param string $name Element name.
     *
     * @throws UnsupportedDriverActionException
     *
     * @return null|Element\ElementInterface Return element object.
     */
    public function __get(string $name)
    {
        if (isset($this->elements[$name])) {
            return $this->elements[$name];
        }

        throw new UnsupportedDriverActionException(sprintf('use the %s element', static::class));
    }

    /**
     * Has the driver has been bootstrapped?
     *
     * @return bool
     */
    public function isBootstrapped() : bool
    {
        return $this->is_bootstrapped;
    }

    /**
     * Set up anything required for the driver.
     *
     * Called when the driver is used for the first time.
     */
    public function bootstrap()
    {
        $this->is_bootstrapped = true;
    }

    /**
     * Register an element for the driver.
     *
     * @param string           $name    Driver name.
     * @param ElementInterface $element An instance of a ElementInterface.
     */
    public function registerElement($name, ElementInterface $element)
    {
        $this->elements[$name] = $element;
    }
}
