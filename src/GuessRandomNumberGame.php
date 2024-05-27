<?php

declare(strict_types=1);

namespace Kata;

final class GuessRandomNumberGame
{

    private int $randomNumber;

    public function __construct(RandomNumberGeneratorInterface $randomGenerator) {
        $this->randomNumber = $randomGenerator->getANumber();
    }
    public function play($guessNumber): string
    {
        if ( $guessNumber > $this->randomNumber) {
            return 'higher';
        }
        if ( $guessNumber < $this->randomNumber) {
            return 'lower';
        }
        return 'win';
    }
}
