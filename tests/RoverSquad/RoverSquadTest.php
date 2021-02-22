<?php

namespace CarrieMathison\MarsRover\Tests\RoverSquad;

use CarrieMathison\MarsRover\Coordinate\Coordinate;
use CarrieMathison\MarsRover\Direction\Direction;
use CarrieMathison\MarsRover\Instructions\Instructions;
use CarrieMathison\MarsRover\Rover\Rover;
use CarrieMathison\MarsRover\Rover\RoverSquad;
use CarrieMathison\MarsRover\Tests\TestCase;

class RoverSquadTest extends TestCase
{
    public function test_it_can_create_a_squad_of_rovers(): void
    {
        // Given
        $x = '1';
        $y = '2';
        $coordinate = new Coordinate($x, $y);

        $direction = new Direction('N');

        $instructions = new Instructions('LMLMLMLMM');

        $roverSquad = new RoverSquad();

        // When
        $roverSquad->append(new Rover($coordinate, $direction, $instructions));
        $roverSquad->append(new Rover($coordinate, $direction, $instructions));

        // Then
        $this->assertContainsOnlyInstancesOf(Rover::class, $roverSquad->getIterator());
        $this->assertSame(2, $roverSquad->getIterator()->count());
    }

    public function test_it_can_execute_its_rovers_instructions(): void
    {
        // Given
        $roverSquad = new RoverSquad();

        $roverSquad->append(
            $rover1 = new Rover(
                new Coordinate('1', '2'),
                new Direction('N'),
                new Instructions('LMLMLMLMM')
            )
        );

        $roverSquad->append(
            $rover2 = new Rover(
                new Coordinate('3', '3'),
                new Direction('E'),
                new Instructions('MMRMMRMRRM')
            )
        );

        // When
        $roverSquad->execute();

        // Then
        $this->assertSame(1, $rover1->getCoordinate()->getX());
        $this->assertSame(3, $rover1->getCoordinate()->getY());
        $this->assertSame('N', $rover1->getDirection()->getDirection());
        $this->assertSame(5, $rover2->getCoordinate()->getX());
        $this->assertSame(1, $rover2->getCoordinate()->getY());
        $this->assertSame('E', $rover2->getDirection()->getDirection());
    }
}
