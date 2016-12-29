<?php

require __DIR__ . "/../../vendor/autoload.php";

use xUnit\TestCase;
use xUnit\TestResult;
use xUnit\WasRun;

class TestCaseTest extends TestCase {
    function testTemplateMethod() {
        $test = new WasRun("testMethod");
        $test->run();
        assert("setUp testMethod tearDown " == $test->log);
    }

    function testResult() {
        $test = new WasRun("testMethod");
        $result = $test->run();
        assert("1 run, 0 failed" == $result->summary());
    }

    function testFailedResult() {
        $test = new WasRun("testBrokenMethod");
        $result = $test->run();
        assert("1 run, 1 failed" == $result->summary());
    }

    function testFailedResultFormatting() {
        $result = new TestResult();
        $result->testStarted();
        $result->testFailed();
        assert("1 run, 1 failed" == $result->summary());
    }
}

print (new TestCaseTest("testTemplateMethod"))->run()->summary() . PHP_EOL;
print (new TestCaseTest("testResult"))->run()->summary() . PHP_EOL;
print (new TestCaseTest("testFailedResult"))->run()->summary() . PHP_EOL;
print (new TestCaseTest("testFailedResultFormatting"))->run()->summary() . PHP_EOL;
