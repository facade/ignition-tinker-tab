<?php

namespace Facade\IgnitionTinkerTab\Tests;

use Facade\IgnitionTinkerTab\TinkerTab;
use PHPUnit\Framework\TestCase;

class TinkerTabTest extends TestCase
{
    /** @test */
    public function it_can_return_the_tab_name()
    {
        $tab = new TinkerTab();

        $this->assertEquals('Tinker', $tab->name());
    }
}
