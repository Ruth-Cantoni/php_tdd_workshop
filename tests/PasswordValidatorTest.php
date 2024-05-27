<?php

declare(strict_types=1);

namespace KataTests;

use Kata\PasswordValidator;
use PHPUnit\Framework\TestCase;

final class PasswordValidatorTest extends TestCase
{
    public function test_password_is_valid_then_result_is_true(): void
    {
        $validPassword = '12A34p56_';
        $validator = new PasswordValidator();

        self::assertTrue($validator->validate($validPassword));
    }

    public function test_short_password_is_invalid(): void
    {
        $password = '12A34p5';
        $validator = new PasswordValidator();

        self::assertFalse($validator->validate($password));
    }

    public function test_no_capital_letter_is_invalid():void
    {
        $password = '12a34p589';
        $validator = new PasswordValidator();

        self::assertFalse($validator->validate($password));
    }

    public function test_no_lower_letter_is_invalid():void
    {
        $password = '12A34P589';
        $validator = new PasswordValidator();

        self::assertFalse($validator->validate($password));
    }
}
