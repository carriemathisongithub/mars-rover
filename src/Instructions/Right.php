<?php

namespace CarrieMathison\MarsRover\Instructions;

use CarrieMathison\MarsRover\Direction\Direction;
use CarrieMathison\MarsRover\Rover\Rover;

class Right implements InstructionsInterface
{
    public function execute(Rover $rover): void
    {
        $currentDirection = $rover->getDirection()->getDirection();

        $newDirection = $this->turnRightFrom($currentDirection);

        $rover->setDirection(new Direction($newDirection));
    }

    private function turnRightFrom(string $currentDirection): string
    {
        switch ($currentDirection) {
            case 'N':
                return 'E';
            case 'E':
                return 'S';
            case 'S':
                return 'W';
            case 'W':
                return 'N';
        }
    }
}
