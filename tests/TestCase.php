<?php

namespace CarrieMathison\MarsRover\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function getInputFixture(): string
    {
        return __DIR__ . '/fixtures/input.txt';
    }

    public function getOutputFixture(): string
    {
        return __DIR__ . '/fixtures/output.txt';
    }
}
