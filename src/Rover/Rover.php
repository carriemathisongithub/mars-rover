<?php

namespace CarrieMathison\MarsRover\Rover;

use CarrieMathison\MarsRover\Coordinate\Coordinate;
use CarrieMathison\MarsRover\Direction\Direction;
use CarrieMathison\MarsRover\Instructions\Instructions;
use function var_dump;

class Rover
{
    /**
     * @var Coordinate
     */
    private $coordinate;

    /**
     * @var Direction
     */
    private $direction;

    /**
     * @var Instructions
     */
    private $instructions;

    public function __construct(
        Coordinate $coordinate,
        Direction $direction,
        Instructions $instructions
    )
    {
        $this->coordinate = $coordinate;
        $this->direction = $direction;
        $this->instructions = $instructions;
    }

    /**
     * @return Coordinate
     */
    public function getCoordinate(): Coordinate
    {
        return $this->coordinate;
    }

    /**
     * @return Direction
     */
    public function getDirection(): Direction
    {
        return $this->direction;
    }

    /**
     * @param Direction $direction
     */
    public function setDirection(Direction $direction): void
    {
        $this->direction = $direction;
    }

    /**
     * @return Instructions
     */
    public function getInstructions(): Instructions
    {
        return $this->instructions;
    }

    public function execute(): void
    {
        $instructions = $this->getInstructions()->getCollection();

        foreach ($instructions as $instruction) {
            $instruction->execute($this);
        }
    }

    public function asString(): string
    {
        return sprintf(
            '%d %d %s',
            $this->getCoordinate()->getX(),
            $this->getCoordinate()->getY(),
            $this->getDirection()->getDirection()
        );
    }
}
