<?php

namespace CarrieMathison\MarsRover\Coordinate;

class Coordinate
{
    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    public function __construct(string $x, string $y)
    {
        $this->x = (int) $x;
        $this->y = (int) $y;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    public function moveYUp(): void
    {
        $this->y = $this->y + 1;
    }

    public function moveYDown(): void
    {
        $this->y = $this->y - 1;
    }

    public function moveXUp(): void
    {
        $this->x = $this->x + 1;
    }

    public function moveXDown(): void
    {
        $this->x = $this->x - 1;
    }
}
