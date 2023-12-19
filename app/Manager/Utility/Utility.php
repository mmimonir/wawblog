<?php

namespace App\Manager\Utility;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Utility
{
    public static function prepare_name(string|null $name = 'no-name-image'): string
    {
        return Str::slug($name . '-' . str_replace(' ', '-',  Carbon::now()->toDayDateTimeString()) . '-' . random_int(1000, 9999));
    }

    public static function prepare_image_url($name, string $path = '')
    {
        if (self::is_url($name)) {
            return $name;
        }
        return asset($path . '/' . $name);
    }

    public static function is_url(string $url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
}
