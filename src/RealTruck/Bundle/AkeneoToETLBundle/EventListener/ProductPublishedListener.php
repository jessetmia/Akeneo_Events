<?php

/**
 * Created by PhpStorm.
 * User: jesse.trammell
 * Date: 4/23/18
 * Time: 3:37 PM
 */

namespace RealTruck\Bundle\AkeneoToETLBundle\EventListener;

use PimEnterprise\Component\Workflow\Event\PublishedProductEvent;


class ProductPublishedListener
{

    public function __construct()
    {

    }

    public function onPublishEvent(PublishedProductEvent $event)
    {

        $product = $event->getProduct();
        $sku = $product->getvalue('sku')->__toString();

        file_put_contents('test.log',$sku);

    }

    public function onUnpublishEvent(PublishedProductEvent $event)
    {
    }
}