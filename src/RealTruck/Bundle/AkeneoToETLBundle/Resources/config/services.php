<?php

use RealTruck\Bundle\AkeneoToETLBundle\EventListener\ProductPublishedListener;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Parameter;


$container
    ->register('realtruck.listener', ProductPublishedListener::class)
    ->addTag('kernel.event_listener',
        ['event' => 'pimee_workflow.published_product.post_publish', 'method' => 'onPublishEvent'])
    ->addTag('kernel.event_listener',
        ['event' => 'pimee_workflow.published_product.post_unpublish', 'method' => 'onUnpublishEvent']);

