<?php

require_once(__DIR__.'/../../vendor/mondongo/vendor/symfony/src/Symfony/Component/HttpFoundation/UniversalClassLoader.php');

$loader = new \Symfony\Component\HttpFoundation\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Mondongo' => __DIR__.'/../../vendor/mondongo',
));
$loader->register();

/*
 * Mondator
 */
$mondator = new \Mondongo\Mondator\Mondator();
$mondator->setConfigClasses(array(
    'Model\Document\Document' => array(
        'fields' => array(
            'field0' => 'string',
            'field1' => 'string',
            'field2' => 'string',
            'field3' => 'string',
            'field4' => 'string',
            'field5' => 'string',
            'field6' => 'string',
            'field7' => 'string',
            'field8' => 'string',
            'field9' => 'string',
        ),
    ),
));
$mondator->setExtensions(array(
    new \Mondongo\Extension\Core(array(
        'default_document_output'   => __DIR__.'/Model/Document',
        'default_repository_output' => __DIR__.'/Model/Repository',
    )),
));
$mondator->process();
