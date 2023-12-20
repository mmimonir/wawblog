<?php

use \App\Manager\Utility\Utility;

function image_url(string|null $name, string|null $path = ''): string
{
    return Utility::prepare_image_url($name, $path);
}
