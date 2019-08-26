<?php

namespace Facade\IgnitionTinkerTab;

use Facade\Ignition\Tabs\Tab;

class TinkerTab extends Tab
{
    public function name(): string
    {
        return 'Tinker';
    }

    public function component(): string
    {
        return 'laravel-web-tinker';
    }

    protected function registerAssets()
    {
        $this->script('ignition-tinker-tab', __DIR__.'/../public/ignition-tinker-tab.js');
    }
}
