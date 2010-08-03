<?php

require_once(__DIR__.'/../../lib/TestSuite.php');

class MondongoTestSuite extends TestSuite
{
  protected $mondongo;

  protected $repository;

  protected $documents = array();

  protected function initialize()
  {
    require_once(__DIR__.'/../../vendor/mondongo/autoload/MondongoAutoload.php');
    MondongoAutoload::register();

    $this->mondongo = new Mondongo();
    $this->mondongo->setConnection('default', new MondongoConnection($this->db));

    $this->requireDocumentFile();

    $this->repository = $this->mondongo->getRepository('Document');
  }

  protected function requireDocumentFile()
  {
    require_once(__DIR__.'/model/Document.php');
  }

  protected function createObjectTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      new Document();
    }
  }

  protected function insertTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      $this->documents[$i] = $document = new Document();
      $document->set('field0', 'value');
      $document->set('field1', 'value');
      $document->set('field2', 'value');
      $document->set('field3', 'value');
      $document->set('field4', 'value');
      $document->set('field5', 'value');
      $document->set('field6', 'value');
      $document->set('field7', 'value');
      $document->set('field8', 'value');
      $document->set('field9', 'value');
    }

    $this->repository->save($this->documents);
  }

  protected function findIdTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      $document = $this->repository->get($this->documents[$i]->getId());
    }
  }

  protected function hydrateTest($nb)
  {
    $documents = $this->repository->find(array(), array('limit' => $nb));
  }
}
