<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessRandomNumberGame;
use Kata\RandomNumberGeneratorInterface;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberGameTest extends TestCase
{
    public function test_should_return_lower_when_attempt_is_lower_than_random_number(): void
    {
        $generator = $this->createStub(RandomNumberGeneratorInterface::class);
        $generator->method('getANumber')->willReturn(6);
        $changeMe = new GuessRandomNumberGame($generator);

        self::assertSame('lower', $changeMe->play( 5));
    }
    public function test_should_return_higher_when_attempt_is_higher_than_random_number(): void
    {
        $generator = $this->createStub(RandomNumberGeneratorInterface::class);
        $generator->method('getANumber')->willReturn(6);
        $changeMe = new GuessRandomNumberGame($generator);

        self::assertSame('higher', $changeMe->play( 9));
    }

    public function test_should_return_win_when_attempt_equals_random_number() {
        $generator = $this->createStub(RandomNumberGeneratorInterface::class);
        $generator->method('getANumber')->willReturn(6);
        $changeMe = new GuessRandomNumberGame($generator);

        self::assertSame('win', $changeMe->play( 6));

    }
}
