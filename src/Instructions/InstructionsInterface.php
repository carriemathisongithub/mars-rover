<?php

namespace CarrieMathison\MarsRover\Instructions;

use CarrieMathison\MarsRover\Rover\Rover;

interface InstructionsInterface
{
    public function execute(Rover $rover): void;
}
