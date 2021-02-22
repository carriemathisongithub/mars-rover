<?php

namespace CarrieMathison\MarsRover\Tests;

use CarrieMathison\MarsRover\Coordinate\Coordinate;
use CarrieMathison\MarsRover\Direction\Direction;
use CarrieMathison\MarsRover\Instructions\Instructions;
use CarrieMathison\MarsRover\Plateau\Plateau;
use CarrieMathison\MarsRover\Rover\Rover;
use CarrieMathison\MarsRover\Rover\RoverSquad;
use function array_chunk;
use function explode;
use function fgets;
use function fopen;

class ReadFromInputTest extends TestCase
{
    public function test_it_can_read_from_input_file_and_execute_commands(): void
    {
        $stream = fopen($this->getInputFixture(), 'r');

        $plateauTopRightCoordinates = explode(' ', fgets($stream));

        $coordinate = new Coordinate(
            $plateauTopRightCoordinates[0],
            $plateauTopRightCoordinates[1]
        );

        $plateau = new Plateau($coordinate);

        $roverSquad = new RoverSquad;

        $allPositionsAndInstructions = [];

        while (($input = fgets($stream)) !== false) {
            $allPositionsAndInstructions[] = trim($input);
        }

        $positionsAndInstructions = array_chunk($allPositionsAndInstructions, 2);

        foreach ($positionsAndInstructions as $roverSetup) {
            $position = explode(' ', $roverSetup[0]);

            $coordinate = new Coordinate($position[0], $position[1]);

            $direction = new Direction($position[2]);

            $instructions = new Instructions($roverSetup[1]);

            $rover = new Rover($coordinate, $direction, $instructions);

            $roverSquad->append($rover);
        }

        $roverSquad->execute();

        $this->assertStringEqualsFile(
            $this->getOutputFixture(),
            $roverSquad->asString()
        );
    }
}
