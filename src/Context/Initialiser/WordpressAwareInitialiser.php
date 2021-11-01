<?php
declare(strict_types=1);
namespace WordHat\Context\Initialiser;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\Initializer\ContextInitializer;

use WordHat\WordpressDriverManager;
use WordHat\Context\WordpressAwareInterface;

/**
 * Behat Context initialiser.
 */
class WordpressAwareInitialiser implements ContextInitializer
{
    /**
     * WordPress driver manager.
     *
     * @var WordpressDriverManager
     */
    protected $wordpress;

    /**
     * WordPress context parameters.
     *
     * @var array
     */
    protected $parameters = [];

    /**
     * Constructor.
     *
     * @param WordpressDriverManager $wordpress
     * @param array                  $parameters
     */
    public function __construct(WordpressDriverManager $wordpress, array $parameters)
    {
        $this->wordpress  = $wordpress;
        $this->parameters = $parameters;
    }

    /**
     * Prepare everything that the Context needs.
     *
     * @param Context $context
     */
    public function initializeContext(Context $context)
    {
        if (! $context instanceof WordpressAwareInterface) {
            return;
        }

        $context->setWordpress($this->wordpress);
        $context->setWordpressParameters($this->parameters);
    }
}
