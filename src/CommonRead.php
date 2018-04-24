<?php
/**
 * @copyright Copyright (c) 2017 Shopify Inc.
 * @license MIT
 */

namespace Shopify;

trait CommonRead
{
    public function read($id, $prefix = '')
    {
        return $this->get($id, $prefix);
    }
}
