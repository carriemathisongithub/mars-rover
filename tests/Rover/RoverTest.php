<?php

namespace CarrieMathison\MarsRover\Tests\Rover;

use CarrieMathison\MarsRover\Coordinate\Coordinate;
use CarrieMathison\MarsRover\Direction\Direction;
use CarrieMathison\MarsRover\Instructions\Instructions;
use CarrieMathison\MarsRover\Rover\Rover;
use CarrieMathison\MarsRover\Tests\TestCase;

class RoverTest extends TestCase
{
    public function test_it_can_create_a_rover_with_valid_position_and_direction_and_instructions(): void
    {
        // Given
        $x = '1';
        $y = '2';
        $coordinate = new Coordinate($x, $y);

        $direction = new Direction('N');

        $instructions = new Instructions('LMLMLMLMM');

        // When
        $rover = new Rover($coordinate, $direction, $instructions);

        // Then
        $this->assertInstanceOf(Rover::class, $rover);
        $this->assertInstanceOf(Coordinate::class, $rover->getCoordinate());
        $this->assertInstanceOf(Direction::class, $rover->getDirection());
        $this->assertInstanceOf(Instructions::class, $rover->getInstructions());
    }

    public function test_it_can_get_its_current_position_and_direction(): void
    {
        // Given
        $x = '1';
        $y = '2';
        $coordinate = new Coordinate($x, $y);

        $direction = new Direction('N');

        $instructions = new Instructions('LMLMLMLMM');

        // When
        $rover = new Rover($coordinate, $direction, $instructions);

        // Then
        $this->assertSame(1, $rover->getCoordinate()->getX());
        $this->assertSame(2, $rover->getCoordinate()->getY());
        $this->assertSame('N', $rover->getDirection()->getDirection());
    }

    public function test_it_can_execute_its_instructions(): void
    {
        // Given
        $x = '1';
        $y = '2';
        $coordinate = new Coordinate($x, $y);

        $direction = new Direction('N');

        $instructions = new Instructions('LMLMLMLMM');

        $rover = new Rover($coordinate, $direction, $instructions);

        // When
        $rover->execute();

        // Then
        $this->assertSame(1, $rover->getCoordinate()->getX());
        $this->assertSame(3, $rover->getCoordinate()->getY());
        $this->assertSame('N', $rover->getDirection()->getDirection());
    }
}
