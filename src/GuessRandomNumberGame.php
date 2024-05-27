<?php

declare(strict_types=1);

namespace Kata;

final class GuessRandomNumberGame
{
    const MAX_NUM_OF_ATTEMPTS = 3;
    private int $randomNumber;
    private int $counter = 0;

    public function __construct(RandomNumberGeneratorInterface $randomGenerator) {
        $this->randomNumber = $randomGenerator->getANumber();
    }
    public function play($guessNumber): string
    {
        $this->counter++;

        if ( $guessNumber === $this->randomNumber ) {
            return 'win';
        }

        if ( $this->isMaxNumberOfAttemptsExceeded() ) {
            return 'loose';
        }

        if ( $guessNumber > $this->randomNumber ) {
            return 'higher';
        }
        return 'lower';
    }

    protected function isMaxNumberOfAttemptsExceeded() {

        return ($this->counter >= self::MAX_NUM_OF_ATTEMPTS);

    }
}
