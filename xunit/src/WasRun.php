<?php

namespace xUnit;

class WasRun {
    public $wasRun;
    private $name;

    public function __construct($name) {
        $this->wasRun = false;
        $this->name = $name;
    }

    public function testMethod() {
        $this->wasRun = true;
    }

    public function run() {
        $method = $this->name;
        $this->$method();
    }
}
