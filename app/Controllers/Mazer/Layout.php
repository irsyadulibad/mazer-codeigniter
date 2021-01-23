<?php namespace App\Controllers\Mazer;

class Layout extends BaseController
{
	public function default()
	{
		$title = 'Layout Default';

		return view('mazer/layout-default', compact('title'));
	}

	public function oneColumn()
	{
		$title = 'Layout Vertical 1 Column';

		return view('mazer/layout-vertical-1-column', compact('title'));
	}

	public function verticalNavbar()
	{
		$title = 'Vertical Navbar';

		return view('mazer/layout-vertical-navbar', compact('title'));
	}

	public function horizontal()
	{
		$title = 'Layout Horizontal';

		return view('mazer/layout-horizontal', compact('title'));
	}
}
