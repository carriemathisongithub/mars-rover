<?php

namespace CarrieMathison\MarsRover\Instructions;

use function str_split;

class Instructions
{
    /**
     * @var InstructionsCollection<InstructionsInterface>
     */
    private $collection;

    public function __construct(string $instructions)
    {
        $this->collection = new InstructionsCollection();

        foreach (str_split($instructions) as $instruction) {
            $this->collection->append(
                InstructionFactory::fromString($instruction)
            );
        }
    }

    /**
     * @return InstructionsCollection<InstructionsInterface>
     */
    public function getCollection(): InstructionsCollection
    {
        return $this->collection;
    }
}
