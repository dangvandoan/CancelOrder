<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AHT\CancelOrder\Block\Order;

/**
 * Sales order history block
 *
 * @api
 * @since 100.0.2
 */
class History extends \Magento\Sales\Block\Order\History
{
   /**
     * Get cancel order URL
     *
     * @param object $order
     * @return string
     */
    public function getCancelOrderUrl($order)
    {
        return $this->getUrl('sales/order/cancelorder', ['order_id' => $order->getId()]);
    }
}
