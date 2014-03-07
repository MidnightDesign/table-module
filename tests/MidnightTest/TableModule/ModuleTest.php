<?php

namespace MidnightTest\TableModule;

use Midnight\TableModule\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testViewHelperIsSetCorrectly()
    {
        $module = new Module();
        $config = $module->getConfig();
        $this->assertEquals('Midnight\TableModule\View\Helper\Table', $config['view_helpers']['invokables']['table']);
    }
}
