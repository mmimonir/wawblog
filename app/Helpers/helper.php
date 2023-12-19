<?php

use \App\Manager\Utility\Utility;

function image_url(string $name, string $path): string
{
    return Utility::prepare_image_url($name, $path);
}
