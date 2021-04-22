<?php

namespace Spatie\Stats;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Arrayable;

class DataPoint implements Arrayable
{
    public Carbon $start;
    public Carbon $end;
    public int $value;
    public int $increments;
    public int $decrements;
    public int $difference;

    public function __construct(
        Carbon $start,
        Carbon $end,
        int $value,
        int $increments,
        int $decrements,
        int $difference
    ) {
        $this->start = $start;
        $this->end = $end;
        $this->value = $value;
        $this->increments = $increments;
        $this->decrements = $decrements;
        $this->difference = $difference;
    }

    public function toArray(): array
    {
        return (array) $this;
    }
}
