<?php

declare(strict_types=1);

namespace Kata;

final class MorningRoutineReminder
{
    private SystemClock $clock;

    private Printer $printer;

    public function __construct(SystemClock $clock, Printer $printer)
    {
        $this->clock = $clock;
        $this->printer = $printer;
    }

    public function remind(): void
    {
        $time = $this->clock->currentTime();

        if (
            $time->format('H:i') >= '06:00'
            && $time->format('H:i') < '07:00'
        ) {
            $this->printer->print('exercise');
        }

        return;
    }
}
