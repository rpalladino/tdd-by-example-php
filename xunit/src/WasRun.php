<?php

namespace xUnit;

class WasRun extends TestCase {
    public $log;
    public $wasRun;

    public function __construct($name) {
        $this->wasRun = false;
        parent::__construct($name);
    }

    public function setUp() {
        $this->log = "setUp ";
    }

    public function testMethod() {
        $this->wasRun = true;
    }
}
