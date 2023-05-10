<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Cell;

/**
 * Interface Toolbar
 * @API
 * @package byteShard\Cell
 */
interface Toolbar
{
    /**
     * @API
     * @return void
     */
    public function defineToolbarContent(): void;
}
