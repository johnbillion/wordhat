<?php
declare(strict_types=1);
namespace WordHat\Extension\PageObject\Element;

/**
 * An Element representing the TinyMCE editor on the edit post screen.
 */
class PostContentEditor extends TinyMCEEditor
{
    /**
     * @var array|string $selector
     */
    protected $selector = '#postdivrich';
}
