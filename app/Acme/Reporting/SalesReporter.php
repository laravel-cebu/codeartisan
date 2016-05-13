<?php

namespace Acme\Reporting;

use Auth;
use DB;
use Exception;

class SalesReporter {

	public function between($startDate, $endDate)
	{
		// perform authentication
		if ( ! Auth::check() ) throw new Exception('Authentication required for reporting');

		// get sales from db
		$sales = $this->queryDBForSalesBetween($startDate, $endDate);

		return $this->format($sales);
	}

	public function queryDBForSalesBetween($startDate, $endDate)
	{
		return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
	}

	protected function format($sales)
	{
		return "<h1>Sales: $sales</h1>";
	}

}