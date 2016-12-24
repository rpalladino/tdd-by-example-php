<?php

require __DIR__ . "/../../vendor/autoload.php";

use xUnit\WasRun;

$test = new WasRun("testMethod");
echo $test->wasRun, PHP_EOL;
$test->testMethod();
echo $test->wasRun, PHP_EOL;
