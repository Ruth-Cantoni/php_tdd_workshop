<?php

namespace Kata;

use DateTimeImmutable;

interface SystemClock
{
    public function currentTime(): DateTimeImmutable;
}