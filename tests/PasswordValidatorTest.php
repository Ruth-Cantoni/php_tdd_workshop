<?php

declare(strict_types=1);

namespace KataTests;

use Kata\PasswordValidator;
use PHPUnit\Framework\TestCase;

final class PasswordValidatorTest extends TestCase
{
    public function test_password_is_valid_then_result_is_true(): void
    {
        $validator = new PasswordValidator();

        self::assertTrue($validator->validate());
    }
}
