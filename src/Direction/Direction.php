<?php

namespace CarrieMathison\MarsRover\Direction;

use function in_array;

class Direction
{
    /**
     * @var string
     */
    private $direction;

    public function __construct(string $direction)
    {
        if (! in_array($direction, $this->validDirections())) {
            throw new \Exception('Invalid direction provided');
        }

        $this->direction = $direction;
    }

    /**
     * @return string[]
     */
    private function validDirections(): array
    {
        return [
            'N',
            'E',
            'S',
            'W'
        ];
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
}
