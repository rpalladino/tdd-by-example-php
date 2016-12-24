<?php

namespace xUnit;

class TestCase {
    private $name;
    protected $test;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setUp() {}

    public function run() {
        $this->setUp();
        $method = $this->name;
        $this->$method();
        $this->tearDown();
    }

    public function tearDown() {}
}
