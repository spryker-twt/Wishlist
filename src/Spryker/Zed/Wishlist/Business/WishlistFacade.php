<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\Wishlist\Business;

use Generated\Shared\Transfer\CustomerTransfer;
use Generated\Shared\Transfer\WishlistChangeTransfer;
use Generated\Shared\Transfer\WishlistTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method WishlistBusinessFactory getBusinessFactory()
 */
class WishlistFacade extends AbstractFacade implements WishlistFacadeInterface
{

    /**
     * @param WishlistChangeTransfer $wishlistChange
     *
     * @return WishlistTransfer
     */
    public function addItem(WishlistChangeTransfer $wishlistChange)
    {
        return $this->getBusinessFactory()->createAddOperator($wishlistChange)->executeOperation();
    }

    /**
     * @param WishlistChangeTransfer $wishlistChange
     *
     * @return WishlistTransfer
     */
    public function removeItem(WishlistChangeTransfer $wishlistChange)
    {
        return $this->getBusinessFactory()->createRemoveOperator($wishlistChange)->executeOperation();
    }

    /**
     * @param WishlistChangeTransfer $wishlistChange
     *
     * @return WishlistTransfer
     */
    public function decreaseQuantity(WishlistChangeTransfer $wishlistChange)
    {
        return $this->getBusinessFactory()->createDecreaseOperator($wishlistChange)->executeOperation();
    }

    /**
     * @param WishlistChangeTransfer $wishlistChange
     *
     * @return WishlistTransfer
     */
    public function increaseQuantity(WishlistChangeTransfer $wishlistChange)
    {
        return $this->getBusinessFactory()->createIncreaseOperator($wishlistChange)->executeOperation();
    }

    /**
     * @param CustomerTransfer $customerTransfer
     *
     * @return WishlistTransfer
     */
    public function getCustomerWishlist(CustomerTransfer $customerTransfer)
    {
        return $this->getBusinessFactory()->createCustomer($customerTransfer)->getWishlist();
    }

}
