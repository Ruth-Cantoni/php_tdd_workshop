<?php

declare(strict_types=1);

namespace Kata;

final class PasswordValidator
{
    const MIN_LENGTH = 8;

    public function validate(string $password): bool
    {
        if ($this->passwordIsTooShort($password)) {
            return false;
        }

        if ($this->capitalLetterIsMissing($password)) {
            return false;
        }

        return true;
    }

    private function passwordIsTooShort(string $password): bool
    {
        return mb_strlen($password) < self::MIN_LENGTH;
    }

    private function capitalLetterIsMissing(string $password): bool
    {
        return (bool)preg_match('/[A-Z]+/', $password) === false;
    }
}
