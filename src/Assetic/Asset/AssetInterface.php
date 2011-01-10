<?php

namespace Assetic\Asset;

use Assetic\Filter\Filterable;

/**
 * An asset has a mutable path and content and can be loaded and dumped.
 *
 * @author Kris Wallsmith <kris.wallsmith@gmail.com>
 */
interface AssetInterface extends Filterable
{
    /**
     * Loads the asset into memory and applies load filters.
     */
    function load();

    /**
     * Applies dump filters and returns the asset as a string.
     *
     * Dumping an asset should not change its state.
     *
     * @return string The asset
     */
    function dump();

    /**
     * Returns the web path for the current asset.
     *
     * @return string A web path
     */
    function getPath();

    /**
     * Sets the web path for the current asset.
     *
     * @param string $path A web path
     */
    function setPath($path);

    /**
     * Returns the loaded content of the current asset.
     *
     * @return string The content
     */
    function getContent();

    /**
     * Sets the loaded content for the current asset.
     *
     * @param string $content The content
     */
    function setContent($content);
}