<?php
declare(strict_types=1);
namespace WordHat\Extension\Driver\Element\Wpcli;

use WordHat\Extension\Driver\Element\BaseElement;

/**
 * WP-CLI driver element for themes.
 */
class ThemeElement extends BaseElement
{
    /**
     * Switch active theme.
     *
     * @param string $id   Theme name to switch to.
     * @param array  $args Not used.
     */
    public function update($id, $args = [])
    {
        $this->drivers->getDriver()->wpcli('theme', 'activate', [$id]);
    }


    /*
     * Convenience methods.
     */

    /**
     * Alias of update().
     *
     * @see update()
     *
     * @param string $id   Theme name to switch to.
     * @param array  $args Not used.
     */
    public function change($id, $args = [])
    {
        $this->update($id, $args);
    }
}
