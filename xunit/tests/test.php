<?php

require __DIR__ . "/../../vendor/autoload.php";

use xUnit\TestCase;
use xUnit\WasRun;

class TestCaseTest extends TestCase {
    function testRunning() {
        $test = new WasRun("testMethod");
        assert(! $test->wasRun);
        $test->run();
        assert($test->wasRun);
    }

    function testSetUp() {
        $test = new WasRun("testMethod");
        $test->run();
        assert($test->wasSetUp);
    }
}

$test = new TestCaseTest("testRunning");
$test->run();

$test = new TestCaseTest("testSetUp");
$test->run();
