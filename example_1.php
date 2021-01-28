<?php

/**
 * This is a quick example use of a ContainerBuilder.
 * We only create a service called ClassA and we use it. This class require an argument
 */

require_once './vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use App\Service\ClassA;

$containerBuilder = new ContainerBuilder();
$containerBuilder
    ->register('class.a', 'App\Service\ClassA')
    ->addArgument('this is the class A');

/** @var ClassA $classAFromContainer */
$classAFromContainer = $containerBuilder->get('class.a');

echo $classAFromContainer->getValue();
