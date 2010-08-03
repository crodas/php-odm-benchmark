<?php

require_once(__DIR__.'/lib/TestSuite.php');

/*
 * Options.
 */

// suites
if (!isset($argv[1]))
{
  throw new RuntimeException('No se han indicado suites.');
}

$suites = require($argv[1]);

// tests
if (!isset($argv[2]))
{
  throw new RuntimeException('No se ha indicado el test.');
}

if ('all' == $argv[2])
{
  $tests = TestSuite::getAllTests();
}
else
{
  $tests = array($argv[2]);
}

// nb
if (!isset($argv[3]))
{
  throw new RuntimeException('No se ha indicado número de veces.');
}

$nb = (int) $argv[3];

/*
 * Run.
 */

foreach ($tests as $test)
{
  echo "\n";
  TestSuite::displayHeader($test, $nb);

  $rel = null;
  foreach ($suites as $suite)
  {
    $output = array();
    exec(sprintf('php '.__DIR__.'/suite.php %s %s %s %s', $suite, $test, $nb, $rel), $output);

    echo $output[0]."\n";

    if (null === $rel)
    {
      $rel = trim(substr($output[0], 45, strpos(substr($output[0], 45), '|')));
    }
  }

  echo "\n";
}
