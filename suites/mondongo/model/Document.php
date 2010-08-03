<?php

class Document extends MondongoDocument
{
  static public function define($definition)
  {
    for ($i = 0; $i <= 9; $i++)
    {
      $definition->setField('field'.$i, 'string');
    }
  }
}
