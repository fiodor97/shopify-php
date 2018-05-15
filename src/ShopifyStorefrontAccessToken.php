<?php
/**
 * @copyright Copyright (c) 2017 Shopify Inc.
 * @license MIT
 */

namespace Shopify;

class ShopifyStorefrontAccessToken extends ShopifyObject
{
    use CommonCreate;

    const PLURAL = "storefront_access_tokens";
    const SINGULAR = "storefront_access_token";
}
