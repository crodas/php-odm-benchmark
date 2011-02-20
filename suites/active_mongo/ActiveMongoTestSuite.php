<?php

require_once(__DIR__.'/../../lib/TestSuite.php');

class ActiveMongoTestSuite extends TestSuite
{
  protected $documents = array();

  protected function initialize()
  {
    require_once(__DIR__.'/../../vendor/active_mongo/ActiveMongo.php');

    require_once(__DIR__.'/model/Document.php');

    ActiveMongo::connect('php_odrm_benchmark');

    ActiveMongo::install();
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

      // non-safe save.
      $document->save(false);
    }
  }

  protected function findIdTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      $document = new Document();
      $document->where('_id', $this->documents[$i]->_id);
      $document->doQuery();
    }
  }

  protected function hydrateTest($nb)
  {
    $query = new Document();
    $documents = iterator_to_array($query->limit($nb));
  }
}
