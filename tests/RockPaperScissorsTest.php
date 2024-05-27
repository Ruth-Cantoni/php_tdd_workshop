<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissors;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsTest extends TestCase
{
    public function test_rock_beats_scissors(): void
    {
        // test
        $changeMe = new RockPaperScissors();

        self::assertTrue($changeMe->play());
    }
}
