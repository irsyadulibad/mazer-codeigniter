<?php namespace App\Controllers\Mazer;

class Icon extends BaseController
{
	public function bootstrapIcons()
	{
		$title = 'Bootstap Icons';

		return view('mazer/ui-icons-bootstrap-icons', compact('title'));
	}

	public function fontawesome()
	{
		$title = 'Fontawesome';

		return view('mazer/ui-icons-fontawesome', compact('title'));
	}

	public function dripicons()
	{
		$title = 'Dripicons';

		return view('mazer/ui-icons-dripicons', compact('title'));
	}
}
