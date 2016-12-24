<?php

namespace xUnit;

class TestResult
{
    private $runCount = 0;
    private $errorCount = 0;

    public function testStarted()
    {
        $this->runCount += 1;
    }

    public function testFailed()
    {
        $this->errorCount += 1;
    }

    public function summary()
    {
        return sprintf("%d run, %d failed", $this->runCount, $this->errorCount);
    }
}
