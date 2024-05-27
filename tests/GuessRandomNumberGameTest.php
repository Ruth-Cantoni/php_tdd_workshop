<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessRandomNumberGame;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberGameTest extends TestCase
{
    public function test_should_return_lower_when_attempt_is_lower_than_random_number(): void
    {
        $changeMe = new GuessRandomNumberGame();

        self::assertSame('lower', $changeMe->play( 5));
    }
}
