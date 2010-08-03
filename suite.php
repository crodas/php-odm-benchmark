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

$suite = $argv[1];

// tests
if (!isset($argv[2]))
{
  throw new RuntimeException('No se ha indicado el test.');

}
$test = $argv[2];

// nb
if (!isset($argv[3]))
{
  throw new RuntimeException('No se ha indicado número de veces.');
}

$nb = (int) $argv[3];

// rel
$rel = isset($argv[4]) ? $argv[4] : null;

/*
 * Run.
 */

require($suite);

$class = str_replace('.php', '', basename($suite));

$testSuite = new $class();
$testSuite->run($test, $nb, $rel);
