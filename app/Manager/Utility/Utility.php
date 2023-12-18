<?php

namespace App\Manager\Utility;

use Carbon\Carbon;
use Illuminate\Support\Str;

class Utility
{
    public static function prepare_name(string|null $name = 'no-name-image'): string
    {
        return Str::slug($name . '-' . str_replace(' ', '-',  Carbon::now()->toDayDateTimeString()) . '-' . random_int(1000, 9999));
    }
}
