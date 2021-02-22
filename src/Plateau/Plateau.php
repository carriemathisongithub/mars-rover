<?php

namespace CarrieMathison\MarsRover\Plateau;

use CarrieMathison\MarsRover\Coordinate\Coordinate;

class Plateau
{
    /**
     * @var Coordinate
     */
    private $bottomLeftCoordinates;

    /**
     * @var Coordinate
     */
    private $topRightCoordinates;

    public function __construct(Coordinate $topRightCoordinates)
    {
        $this->bottomLeftCoordinates = new Coordinate('0', '0');
        $this->topRightCoordinates = $topRightCoordinates;
    }

    /**
     * @return Coordinate
     */
    public function getBottomLeftCoordinates(): Coordinate
    {
        return $this->bottomLeftCoordinates;
    }

    /**
     * @return Coordinate
     */
    public function getTopRightCoordinates(): Coordinate
    {
        return $this->topRightCoordinates;
    }
}
