<?php
/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace SprykerFeature\Zed\Wishlist\Dependency;

use Generated\Shared\Wishlist\WishlistInterface;

interface PostSavePluginInterface
{
    /**
     * @param WishlistInterface $wishlist
     */
    public function trigger(WishlistInterface $wishlist);
}