<?php

/**
 * This file is part of bit3/contao-theme-plus.
 *
 * (c) Tristan Lins <tristan.lins@bit3.de>
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    bit3/contao-theme-plus
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @copyright  bit3 UG <https://bit3.de>
 * @link       https://github.com/bit3/contao-theme-plus
 * @license    http://opensource.org/licenses/LGPL-3.0 LGPL-3.0+
 * @filesource
 */

namespace Bit3\Contao\ThemePlus\Asset;

use Assetic\Asset\AssetInterface;
use Bit3\Contao\ThemePlus\Filter\FilterRules;

interface ExtendedAssetInterface extends AssetInterface
{
    /**
     * @return string
     */
    public function getConditionalComment();

    /**
     * @param string $conditionalComment
     *
     * @return static
     */
    public function setConditionalComment($conditionalComment);

    /**
     * @return string
     */
    public function getMediaQuery();

    /**
     * @param string $mediaQuery
     *
     * @return static
     */
    public function setMediaQuery($mediaQuery);

    /**
     * @return bool
     */
    public function isInline();

    /**
     * @param bool $inline
     *
     * @return static
     */
    public function setInline($inline);

    /**
     * @return bool
     */
    public function isStandalone();

    /**
     * @param bool $standalone
     *
     * @return static
     */
    public function setStandalone($standalone);

    /**
     * Return the filter rules.
     *
     * @return null|FilterRules
     */
    public function getFilterRules();

    /**
     * Set the filter rules.
     *
     * @param null|FilterRules $filterRule
     *
     * @return static
     */
    public function setFilterRules(FilterRules $filterRule = null);
}