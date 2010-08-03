<?php

require_once(__DIR__.'/../../lib/TestSuite.php');

class MongoTestSuite extends TestSuite
{
  protected $collection;

  protected $documents = array();

  protected function initialize()
  {
    $this->collection = $this->db->document;
  }

  protected function createObjectTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      array();
    }
  }

  protected function insertTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      $this->documents[$i] = array(
        'field0' => 'value',
        'field1' => 'value',
        'field2' => 'value',
        'field3' => 'value',
        'field4' => 'value',
        'field5' => 'value',
        'field6' => 'value',
        'field7' => 'value',
        'field8' => 'value',
        'field9' => 'value',
      );
    }

    $this->collection->batchInsert($this->documents);
  }

  protected function findIdTest($nb)
  {
    for ($i = 1; $i <= $nb; $i++)
    {
      $document = $this->collection->findOne(array('_id' => $this->documents[$i]['_id']));
    }
  }

  protected function hydrateTest($nb)
  {
    $documents = array();
    foreach ($this->collection->find()->limit($nb) as $document)
    {
      $documents[] = $document;
    }
  }
}
