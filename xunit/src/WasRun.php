<?php

namespace xUnit;

class WasRun extends TestCase {
    public $wasRun;
    public $wasSetUp;

    public function __construct($name) {
        $this->wasRun = false;
        $this->wasSetUp = false;
        parent::__construct($name);
    }

    public function setUp() {
        $this->wasSetUp = true;
    }

    public function testMethod() {
        $this->wasRun = true;
    }
}
