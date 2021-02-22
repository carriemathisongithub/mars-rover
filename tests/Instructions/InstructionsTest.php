<?php

namespace CarrieMathison\MarsRover\Tests\Instructions;


use CarrieMathison\MarsRover\Instructions\Instructions;
use CarrieMathison\MarsRover\Instructions\InstructionsCollection;
use CarrieMathison\MarsRover\Instructions\InstructionsInterface;
use CarrieMathison\MarsRover\Tests\TestCase;

class InstructionsTest extends TestCase
{
    public function test_it_can_create_a_collection_of_instructions_from_valid_string(): void
    {
        // Given
        $instructions = 'LMLMLMLMM';

        // When
        $instruction = new Instructions($instructions);

        // Then
        $this->assertInstanceOf(Instructions::class, $instruction);
        $this->assertInstanceOf(InstructionsCollection::class, $instruction->getCollection());
    }

    public function test_it_can_create_instruction_classes_from_valid_string(): void
    {
        // Given
        $instructions = 'LMLMLMLMM';

        // When
        $instruction = new Instructions($instructions);

        // Then
        $this->assertContainsOnlyInstancesOf(InstructionsInterface::class, $instruction->getCollection());
    }
}
