<?php

class Document extends MondongoDocumentSpeed
{
  protected $data = array(
    'fields' => array(
      'field0' => null,
      'field1' => null,
      'field2' => null,
      'field3' => null,
      'field4' => null,
      'field5' => null,
      'field6' => null,
      'field7' => null,
      'field8' => null,
      'field9' => null,
    ),
  );

  static public function define($definition)
  {
    for ($i = 0; $i <= 9; $i++)
    {
      $definition->setField('field'.$i, 'string');
    }
  }
}
