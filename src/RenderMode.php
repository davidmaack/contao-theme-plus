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

namespace Bit3\Contao\ThemePlus;

/**
 * Class RenderMode
 */
final class RenderMode
{
    /**
     * Pre-compile assets for advanced caching.
     *
     * @var string
     *
     * @api
     */
    const PRE_COMPILE = 'pre-compile';

    /**
     * Live rendering mode for production.
     *
     * @var string
     *
     * @api
     */
    const LIVE = 'live';

    /**
     * Designer mode for development.
     *
     * @var string
     *
     * @api
     */
    const DESIGN = 'design';
}
