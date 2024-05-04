<?php

namespace Dharmendrashaeagle\Util;

class Util
{
    public function greet($name)
    {
        $version = config('soni-util.version');
        return "Hello, $name! for version $version";
    }
}