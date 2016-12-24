<?php

namespace xUnit;

class WasRun {
    public $wasRun = false;

    public function testMethod() {
        $this->wasRun = true;
    }

    public function run() {
        $this->testMethod();
    }
}
