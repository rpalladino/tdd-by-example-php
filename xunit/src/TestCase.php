<?php

namespace xUnit;

class TestCase {
    private $name;
    protected $test;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setUp() {}

    public function run(TestResult $result) {
        $result->testStarted();
        $this->setUp();
        try {
            $method = $this->name;
            $this->$method();
        } catch (\Exception $e) {
            $result->testFailed();
        }
        $this->tearDown();
    }

    public function tearDown() {}
}
