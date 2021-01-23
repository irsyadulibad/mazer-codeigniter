<?php namespace App\Controllers\Mazer;

class Table extends BaseController
{
	public function index()
	{
		$title = 'Table';

		return view('mazer/table', compact('title'));
	}

	public function datatable()
	{
		$title = 'DataTable';

		return view('mazer/table-datatable', compact('title'));
	}
}
