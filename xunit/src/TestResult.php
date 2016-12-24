<?php

namespace xUnit;

class TestResult
{
    private $runCount = 0;

    public function testStarted()
    {
        $this->runCount += 1;
    }

    public function summary()
    {
        return sprintf("%d run, 0 failed", $this->runCount);
    }
}
