<?php

require_once(__DIR__.'/../../lib/TestSuite.php');

require_once(__DIR__.'/../../vendor/mondongo/vendor/symfony/src/Symfony/Component/HttpFoundation/UniversalClassLoader.php');
$loader = new \Symfony\Component\HttpFoundation\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Mondongo' => __DIR__.'/../../vendor/mondongo',
    'Model'    => __DIR__,
));
$loader->register();

class MondongoTestSuite extends TestSuite
{
  protected $mondongo;

  protected $connection;

  protected $repository;

  protected $documents = array();

  protected function initialize()
  {
    $this->mondongo = new \Mondongo\Mondongo();

    $this->connection = new \Mondongo\Connection('mongodb://localhost', $this->db->__toString());
    $this->mondongo->setConnection('default', $this->connection);

    $this->repository = $this->mondongo->getRepository('Model\Document\Document');
  }

  protected function createObjectTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      new \Model\Document\Document();
    }
  }

  protected function insertTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      $this->documents[$i] = $document = new \Model\Document\Document();
      $document->setField0('value');
      $document->setField1('value');
      $document->setField2('value');
      $document->setField3('value');
      $document->setField4('value');
      $document->setField5('value');
      $document->setField6('value');
      $document->setField7('value');
      $document->setField8('value');
      $document->setField9('value');
    }

    $this->repository->save($this->documents);
  }

  protected function findIdTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      $document = $this->repository->findOneByMongoId($this->documents[$i]->getId());
    }
  }

  protected function hydrateTest($nb)
  {
    $documents = $this->repository->find(array('limit' => $nb));
  }
}
