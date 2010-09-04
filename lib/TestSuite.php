<?php

abstract class TestSuite
{
  const USLEEP = '500000';

  public function __construct()
  {
    $db = 'php_odm_benchmark';

    $this->mongo = new Mongo();
    $this->mongo->dropDB($db);

    $this->db = $this->mongo->selectDB($db);

    $this->initialize();
  }

  public function getName()
  {
    return str_replace('TestSuite', '', get_class($this));
  }

  protected function initialize()
  {
  }

  public function run($test, $nb, $rel)
  {
    if ($dependence = self::getTestDependence($test))
    {
      $method = $dependence.'Test';

      $start = microtime(true);
      $this->$method($nb);

      usleep(self::USLEEP - ((microtime(true) - $start) * 1000));
    }

    $method = $test.'Test';

    $times = array();
    for ($i = 1; $i <= 5; $i++)
    {
      $start = microtime(true);
      $this->$method($nb);
      $times[$i] = round((microtime(true) - $start) * 1000, 3);

      usleep(self::USLEEP - $times[$i]);
    }

    $avg = 0;
    foreach ($times as $time)
    {
      $avg += $time;
    }
    $avg = round($avg / 5, 3);

    // rel
    if (null === $rel)
    {
      $rel = 1;
    }
    else
    {
      $rel = $rel / $avg;
    }

    echo sprintf('%30s | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f | %10.3f |'."\n",
      $this->getName(), $rel, $avg, $times[1], $times[2], $times[3], $times[4], $times[5]
    );
  }

  /*
   * Tests.
   */
  protected function createObjectTest($nb)
  {
  }

  protected function insertTest($nb)
  {
  }

  protected function findId($nb)
  {
  }

  protected function hydrate($nb)
  {
  }

  /*
   * General.
   */
  static public function displayHeader($test, $nb)
  {
    echo sprintf(<<<EOF
test: %s, nb: %s
                               |        rel |        avg |          1 |          2 |          3 |          4 |          5 |
                               |------------|------------|------------|------------|------------|------------|------------|

EOF
      ,
      $test, $nb
    );
  }

  static public function getAllTests()
  {
    return array_keys(self::getTests());
  }

  static protected function getTestDependence($test)
  {
    $tests = self::getTests();

    return $tests[$test];
  }

  static protected function getTests()
  {
    return array(
      'createObject' => null,
      'insert'       => null,
      'findId'       => 'insert',
      'hydrate'      => 'insert',
    );
  }
}
