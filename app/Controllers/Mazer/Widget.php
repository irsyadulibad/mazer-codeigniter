<?php namespace App\Controllers\Mazer;

class Widget extends BaseController
{
	public function chatbox()
	{
		$title = 'Chatbox';

		return view('mazer/ui-widget-chatbox', compact('title'));
	}

	public function pricing()
	{
		$title = 'pricing';

		return view('mazer/ui-widget-pricing', compact('title'));
	}

	public function toDoList()
	{
		$title = 'Todo List';

		return view('mazer/ui-widget-todolist', compact('title'));
	}

	public function fileUploader()
	{
		$title = 'File Uploader';

		return view('mazer/ui-file-uploader', compact('title'));
	}
}
