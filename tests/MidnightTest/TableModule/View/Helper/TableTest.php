<?php

namespace MidnightTest\TableModule\View\Helper;

use Midnight\Table\Model\Table\Table;

class TableTest extends \PHPUnit_Framework_TestCase
{
    public function testTableIsRendered()
    {
        $table = new Table();
        $viewHelper = new \Midnight\TableModule\View\Helper\Table();
        $rendered = $viewHelper($table);
        $this->assertEquals('<table></table>' . PHP_EOL, $rendered);
    }
}
