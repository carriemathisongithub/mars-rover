<?php

namespace CarrieMathison\MarsRover\Tests\Plateau;

use CarrieMathison\MarsRover\Coordinate\Coordinate;
use CarrieMathison\MarsRover\Plateau\Plateau;
use CarrieMathison\MarsRover\Tests\TestCase;

class PlateauTest extends TestCase
{
    public function test_it_can_create_a_plateau_value_object_with_valid_coordinates(): void
    {
        // Given
        $x = '5';
        $y = '5';

        // When
        $coordinate = new Coordinate($x, $y);
        $plateau = new Plateau($coordinate);

        // Then
        $this->assertInstanceOf(Plateau::class, $plateau);
        $this->assertInstanceOf(Coordinate::class, $plateau->getBottomLeftCoordinates());
        $this->assertInstanceOf(Coordinate::class, $plateau->getTopRightCoordinates());
    }

    public function test_it_can_get_bottom_left_x_coordinates(): void
    {
        // Given
        $x = '5';
        $y = '5';

        // When
        $coordinate = new Coordinate($x, $y);
        $plateau = new Plateau($coordinate);

        // Then
        $this->assertSame(0, $plateau->getBottomLeftCoordinates()->getX());
    }

    public function test_it_can_get_bottom_left_y_coordinates(): void
    {
        // Given
        $x = '5';
        $y = '5';

        // When
        $coordinate = new Coordinate($x, $y);
        $plateau = new Plateau($coordinate);

        // Then
        $this->assertSame(0, $plateau->getBottomLeftCoordinates()->getY());
    }

    public function test_it_can_get_top_right_x_coordinates(): void
    {
        // Given
        $x = '5';
        $y = '5';

        // When
        $coordinate = new Coordinate($x, $y);
        $plateau = new Plateau($coordinate);

        // Then
        $this->assertSame(5, $plateau->getTopRightCoordinates()->getX());
    }

    public function test_it_can_get_top_right_y_coordinates(): void
    {
        // Given
        $x = '5';
        $y = '5';

        // When
        $coordinate = new Coordinate($x, $y);
        $plateau = new Plateau($coordinate);

        // Then
        $this->assertSame(5, $plateau->getTopRightCoordinates()->getY());
    }
}
