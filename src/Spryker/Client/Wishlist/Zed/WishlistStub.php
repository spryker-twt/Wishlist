<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\Wishlist\Zed;

use Generated\Shared\Transfer\CustomerTransfer;
use Generated\Shared\Transfer\WishlistChangeTransfer;
use Spryker\Client\ZedRequest\ZedRequestClient;

class WishlistStub implements WishlistStubInterface
{

    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClient
     */
    protected $zedStub;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClient $zedStub
     */
    public function __construct(ZedRequestClient $zedStub)
    {
        $this->zedStub = $zedStub;
    }

    /**
     * @param \Generated\Shared\Transfer\WishlistChangeTransfer $wishlistChange
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer
     */
    public function addItem(WishlistChangeTransfer $wishlistChange)
    {
        return $this->zedStub->call('/wishlist/gateway/add-item', $wishlistChange);
    }

    /**
     * @param \Generated\Shared\Transfer\WishlistChangeTransfer $wishlistChange
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer
     */
    public function removeItem(WishlistChangeTransfer $wishlistChange)
    {
        return $this->zedStub->call('/wishlist/gateway/remove-item', $wishlistChange);
    }

    /**
     * @param \Generated\Shared\Transfer\WishlistChangeTransfer $wishlistChange
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer
     */
    public function descreaseQuantity(WishlistChangeTransfer $wishlistChange)
    {
        return $this->zedStub->call('/wishlist/gateway/decrease-quantity', $wishlistChange);
    }

    /**
     * @param \Generated\Shared\Transfer\WishlistChangeTransfer $wishlistChange
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer
     */
    public function increaseQuantity(WishlistChangeTransfer $wishlistChange)
    {
        return $this->zedStub->call('/wishlist/gateway/increase-quantity', $wishlistChange);
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer
     */
    public function getCustomerWishlist(CustomerTransfer $customer)
    {
        return $this->zedStub->call('/wishlist/gateway/get-customer-wishlist', $customer);
    }

}
