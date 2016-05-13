<?php

namespace Acme\Reporting;

use Acme\Repositories\SalesRepository;
use Auth;
use DB;
use Exception;

class SalesReporter {

    private $salesRepository;

    public function __construct(SalesRepository $salesRepository)
    {
        $this->salesRepository = $salesRepository;
    }

    public function between($startDate, $endDate, SalesOutputInterface $formatter)
    {
        $sales = $this->salesRepository->between($startDate, $endDate);

        $formatter->output($sales);
    }

}