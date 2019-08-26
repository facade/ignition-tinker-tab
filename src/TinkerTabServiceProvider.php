<?php

namespace Facade\IgnitionTinkerTab;

use Facade\Ignition\Ignition;
use Illuminate\Support\ServiceProvider;

class TinkerTabServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Ignition::tab(new TinkerTab());
    }
}
