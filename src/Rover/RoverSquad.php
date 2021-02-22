<?php

namespace CarrieMathison\MarsRover\Rover;

use function implode;

class RoverSquad extends \ArrayObject
{
    public function execute(): void
    {
        $rovers = $this->getIterator();

        foreach ($rovers as $rover) {
            $rover->execute();
        }
    }

    public function asString(): string
    {
        $rovers = $this->getIterator();

        $string = [];

        foreach ($rovers as $rover) {
            $string[] = $rover->asString();
        }

        return implode("\n", $string);
    }
}
