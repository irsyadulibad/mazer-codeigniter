<?php namespace App\Controllers\Mazer;

class Map extends BaseController
{
	public function googleMap()
	{
		$title = 'Google Map';

		return view('mazer/ui-map-google-map', compact('title'));
	}

	public function jsVectorMap()
	{
		$title = 'JS Vector Map';

		return view('mazer/ui-map-jsvectormap', compact('title'));
	}
}
