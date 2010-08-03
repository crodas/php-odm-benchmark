<?php

require_once(__DIR__.'/../../lib/TestSuite.php');

class DoctrineMongoTestSuite extends TestSuite
{
  protected $dm;

  protected function initialize()
  {
    require_once __DIR__.'/../../vendor/doctrine_mongo/Doctrine/Common/ClassLoader.php';

    $loader = new Doctrine\Common\ClassLoader('Doctrine\ODM', __DIR__.'/../../vendor/doctrine_mongo');
    $loader->register();

    $loader = new Doctrine\Common\ClassLoader('Doctrine\Common', __DIR__.'/../../vendor/doctrine_mongo');
    $loader->register();

    $loader = new Doctrine\Common\ClassLoader('Documents', __DIR__);
    $loader->register();

    $annotationReader = new Doctrine\Common\Annotations\AnnotationReader();
    $annotationReader->setDefaultAnnotationNamespace('Doctrine\ODM\MongoDB\Mapping\\');
    $annotation = new Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver($annotationReader, __DIR__.'/Documents');

    $config = new Doctrine\ODM\MongoDB\Configuration();
    $config->setProxyDir(__DIR__ . '/proxies');
    $config->setProxyNamespace('Proxies');
    $config->setMetadataDriverImpl($annotation);
    $config->setAutoGenerateProxyClasses(false); // no code generation in production
    $config->setDefaultDB($this->db);

    $this->dm = Doctrine\ODM\MongoDB\DocumentManager::create(new Doctrine\ODM\MongoDB\Mongo(), $config);
  }

  protected function createObjectTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      new Documents\Document();
    }
  }

  protected function insertTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      $this->documents[$i] = $document = new Documents\Document();
      $document->field0 = 'value';
      $document->field1 = 'value';
      $document->field2 = 'value';
      $document->field3 = 'value';
      $document->field4 = 'value';
      $document->field5 = 'value';
      $document->field6 = 'value';
      $document->field7 = 'value';
      $document->field8 = 'value';
      $document->field9 = 'value';

      $this->dm->persist($document);
    }

    $this->dm->flush();
  }

  protected function findIdTest($nb)
  {
    $this->dm->clear();

    for ($i = 1; $i <= $nb; $i++)
    {
      $document = $this->dm->find('Documents\Document', $this->documents[$i]->id);
    }
  }

  protected function hydrateTest($nb)
  {
    $this->dm->clear();

    $documents = $this->dm->createQuery('Documents\Document')
      ->limit($nb)
      ->execute()
    ;
  }
}
