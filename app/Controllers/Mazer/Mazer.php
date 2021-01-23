<?php namespace App\Controllers\Mazer;

class Mazer extends BaseController
{
	public function index()
	{
		$title = 'Dashboard';

		return view('mazer/index', compact('title'));
	}
}
