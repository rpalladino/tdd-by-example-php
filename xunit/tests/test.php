<?php

require __DIR__ . "/../../vendor/autoload.php";

use xUnit\TestCase;
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
}

(new TestCaseTest("testTemplateMethod"))->run();
(new TestCaseTest("testResult"))->run();
