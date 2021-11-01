<?php
declare(strict_types=1);
namespace WordHat\Driver\Element\Wpcli;

use WordHat\Driver\Element\BaseElement;

/**
 * WP-CLI driver element for site cache.
 */
class CacheElement extends BaseElement
{
    /**
     * Clear object cache.
     *
     * @param int   $id   Not used.
     * @param array $args Not used.
     */
    public function update($id, $args = [])
    {
        $this->drivers->getDriver()->wpcli('cache', 'flush');
    }


    /*
     * Convenience methods.
     */

    /**
     * Alias of update().
     *
     * @see update()
     */
    public function clear()
    {
        $this->update(0);
    }
}
