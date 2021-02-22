<?php

namespace CarrieMathison\MarsRover\Instructions;

class InstructionFactory
{
    public static function fromString(string $instruction): InstructionsInterface
    {
        switch ($instruction) {
            case 'M':
                return new Move();
            case 'R':
                return new Right();
            case 'L':
                return new Left();
            default:
                throw new \Exception('Invalid command provided');
        }
    }
}
