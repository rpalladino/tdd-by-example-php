<?php

require __DIR__ . "/../../vendor/autoload.php";

use xUnit\TestCase;
use xUnit\WasRun;

class TestCaseTest extends TestCase {
    function setUp() {
        $this->test = new WasRun("testMethod");
    }

    function testRunning() {
        $this->test->run();
        assert($this->test->wasRun);
    }

    function testSetUp() {
        $this->test->run();
        assert("setUp " == $this->test->log);
    }
}

(new TestCaseTest("testRunning"))->run();
(new TestCaseTest("testSetUp"))->run();
