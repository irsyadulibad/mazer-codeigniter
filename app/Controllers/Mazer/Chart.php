<?php namespace App\Controllers\Mazer;

class Chart extends BaseController
{
	public function chartJs()
	{
		$title = 'ChartJS';

		return view('mazer/ui-chart-chartjs', compact('title'));
	}

	public function apexCharts()
	{
		$title = 'Apexcharts';

		return view('mazer/ui-chart-apexcharts', compact('title'));
	}
}
