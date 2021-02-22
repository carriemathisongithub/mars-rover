<?php

namespace CarrieMathison\MarsRover\Tests\Coordinate;

use CarrieMathison\MarsRover\Coordinate\Coordinate;
use CarrieMathison\MarsRover\Tests\TestCase;

class CoordinateTest extends TestCase
{
    public function test_it_can_create_a_coordinate_value_object_with_valid_coordinates(): void
    {
        // Given
        $x = '5';
        $y = '5';

        // When
        $coordinate = new Coordinate($x, $y);

        // Then
        $this->assertSame(5, $coordinate->getX());
        $this->assertSame(5, $coordinate->getY());
    }
}
