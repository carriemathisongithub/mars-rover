<?php

namespace CarrieMathison\MarsRover\Instructions;

use CarrieMathison\MarsRover\Direction\Direction;
use CarrieMathison\MarsRover\Rover\Rover;

class Left implements InstructionsInterface
{
    public function execute(Rover $rover): void
    {
        $currentDirection = $rover->getDirection()->getDirection();

        $newDirection = $this->turnLeftFrom($currentDirection);

        $rover->setDirection(new Direction($newDirection));
    }

    private function turnLeftFrom(string $currentDirection): string
    {
        switch ($currentDirection) {
            case 'N':
                return 'W';
            case 'E':
                return 'N';
            case 'S':
                return 'E';
            case 'W':
                return 'S';
        }
    }
}
