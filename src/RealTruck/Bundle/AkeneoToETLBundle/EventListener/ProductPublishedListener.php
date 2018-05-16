<?php

/**
 * Created by PhpStorm.
 * User: jesse.trammell
 * Date: 4/23/18
 * Time: 3:37 PM
 */

namespace RealTruck\Bundle\AkeneoToETLBundle\EventListener;

use Doctrine\ORM\EntityManager;
use Exception;
use Pim\Component\Catalog\Model\ProductInterface;
use Pim\Component\Catalog\Model\ProductModel;
use PimEnterprise\Component\ProductAsset\Model\Asset;
use PimEnterprise\Component\Workflow\Event\PublishedProductEvent;
use PimEnterprise\Component\Workflow\Model\PublishedProduct;
use RealTruck\Bundle\AkeneoToETLBundle\Helpers\AwsHelperClass;
use Symfony\Component\EventDispatcher\GenericEvent;


class ProductPublishedListener
{

    public function __construct(EntityManager $manager)
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