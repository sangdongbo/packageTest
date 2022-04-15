<?php

namespace Www;

use Illuminate\Support\ServiceProvider;

class PackageTestService extends ServiceProvider
{
    public static function do(){
        echo "This is test package ...";
    }
}
