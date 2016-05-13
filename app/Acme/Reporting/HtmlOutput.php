<?php namespace Acme\Reporting;

use Acme\Reporting\SalesOutInterface;

class HtmlOutput implements SalesOutputInterface {

    public function output($sales)
    {
        return "<h1>Sales: $sales</h1>";
    }
}