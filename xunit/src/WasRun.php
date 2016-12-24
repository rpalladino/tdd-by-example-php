<?php

namespace xUnit;

class WasRun extends TestCase {
    public $log;

    public function setUp() {
        $this->log = "setUp ";
    }

    public function testMethod() {
        $this->log .= "testMethod ";
    }
}
