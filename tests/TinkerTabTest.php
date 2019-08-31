<?php

namespace Facade\IgnitionTinkerTab\Tests;

use PHPUnit\Framework\TestCase;
use Facade\IgnitionTinkerTab\TinkerTab;

class TinkerTabTest extends TestCase
{
    /** @test */
    public function it_can_return_the_tab_name()
    {
        $tab = new TinkerTab();

        $this->assertEquals('Tinker', $tab->name());
    }
}
