<?php

declare(strict_types=1);

namespace Kata;

final class GuessRandomNumberGame
{

    private RandomNumberGeneratorInterface $randomNumberGenerator;

    public function __construct(RandomNumberGeneratorInterface $randomGenerator) {
        $this->randomNumberGenerator = $randomGenerator;
    }
    public function play($guessNumber): string
    {
        return 'lower';
    }
}
