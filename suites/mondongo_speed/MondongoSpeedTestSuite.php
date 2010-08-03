<?php

require_once(__DIR__.'/../mondongo/MondongoTestSuite.php');

class MondongoSpeedTestSuite extends MondongoTestSuite
{
  protected function requireDocumentFile()
  {
    require_once(__DIR__.'/model/Document.php');
  }
}
