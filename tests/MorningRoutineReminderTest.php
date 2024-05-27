<?php

declare(strict_types=1);

namespace KataTests;

use DateTimeImmutable;
use Kata\MorningRoutineReminder;
use Kata\Printer;
use Kata\SystemClock;
use PHPUnit\Framework\TestCase;

final class MorningRoutineReminderTest extends TestCase
{
    public function test_print_exercise_at_six(): void
    {
        $clock = $this->createStub(SystemClock::class);
        $clock->method('currentTime')->willReturn(
            DateTimeImmutable::createFromFormat('H:i:s', '06:00:00')
        );

        $printer = $this->createMock(Printer::class);
        $printer->expects($this->once())->method('print')->with('exercise');

        $reminder = new MorningRoutineReminder($clock, $printer);
        $reminder->remind();
    }

    public function test_print_exercise_at_six_fifty_nine(): void
    {
        $clock = $this->createStub(SystemClock::class);
        $clock->method('currentTime')->willReturn(
            DateTimeImmutable::createFromFormat('H:i:s', '06:59:00')
        );

        $printer = $this->createMock(Printer::class);
        $printer->expects($this->once())->method('print')->with('exercise');

        $reminder = new MorningRoutineReminder($clock, $printer);
        $reminder->remind();
    }

    public function test_print_read_at_seven(): void
    {
        $clock = $this->createStub(SystemClock::class);
        $clock->method('currentTime')->willReturn(
            DateTimeImmutable::createFromFormat('H:i:s', '07:00:00')
        );

        $printer = $this->createMock(Printer::class);
        $printer->expects($this->once())->method('print')->with('read');

        $reminder = new MorningRoutineReminder($clock, $printer);
        $reminder->remind();
    }
}
