<?php

namespace CarrieMathison\MarsRover\Instructions;

use CarrieMathison\MarsRover\Rover\Rover;

class Move implements InstructionsInterface
{
    public function execute(Rover $rover): void
    {
        $currentDirection = $rover->getDirection()->getDirection();

        switch ($currentDirection) {
            case 'N':
                $rover->getCoordinate()->moveYUp();
                break;
            case 'E':
                $rover->getCoordinate()->moveXUp();
                break;
            case 'S':
                $rover->getCoordinate()->moveYDown();
                break;
            case 'W':
                $rover->getCoordinate()->moveXDown();
                break;
        }
    }
}
