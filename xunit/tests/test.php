<?php

require __DIR__ . "/../../vendor/autoload.php";

use xUnit\TestCase;
use xUnit\WasRun;

class TestCaseTest extends TestCase {
    function testTemplateMethod() {
        $test = new WasRun("testMethod");
        $test->run();
        assert("setUp testMethod " == $test->log);
    }
}

(new TestCaseTest("testTemplateMethod"))->run();
