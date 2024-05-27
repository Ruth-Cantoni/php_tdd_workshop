<?php

declare(strict_types=1);

namespace Kata;

final class MorningRoutineReminder
{
    private const ROUTINES = [
        [
            'since' => '06:00',
            'until' => '06:59',
            'message' => 'exercise'
        ]
    ];

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
        $formattedTime = $time->format('H:i');

        foreach (self::ROUTINES as $routine) {
            if (
                $formattedTime >= $routine['since']
                && $formattedTime <= $routine['until']
            ) {
                $this->printer->print($routine['message']);

                break;
            }
        }

        return;
    }
}
