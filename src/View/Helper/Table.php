<?php

namespace Midnight\TableModule\View\Helper;

use Midnight\Table\Model\Table\TableInterface;
use Midnight\Table\Renderer\HtmlRenderer;
use Zend\View\Helper\AbstractHelper;

class Table extends AbstractHelper
{
    /**
     * @param TableInterface $table
     *
     * @return string
     */
    public function __invoke(TableInterface $table)
    {
        return $this->getRenderer()->render($table);
    }

    /**
     * @return HtmlRenderer
     */
    private function getRenderer()
    {
        return new HtmlRenderer();
    }
}
