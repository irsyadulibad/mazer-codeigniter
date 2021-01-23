<?php namespace App\Controllers\Mazer;

class Form extends BaseController
{
	public function input()
	{
		$title = 'Input';

		return view('mazer/form-element-input', compact('title'));
	}

	public function inputGroup()
	{
		$title = 'Input Group';

		return view('mazer/form-element-input-group', compact('title'));
	}

	public function select()
	{
		$title = 'Select';

		return view('mazer/form-element-select', compact('title'));
	}


	public function radio()
	{
		$title = 'Radio';

		return view('mazer/form-element-radio', compact('title'));
	}


	public function checkbox()
	{
		$title = 'Checkbox';

		return view('mazer/form-element-checkbox', compact('title'));
	}

	public function textarea()
	{
		$title = 'Textarea';

		return view('mazer/form-element-textarea', compact('title'));
	}

	public function layout()
	{
		$title = 'Form Layout';

		return view('mazer/form-layout', compact('title'));
	}

	public function editor_quill()
	{
		$title = 'Quill';

		return view('mazer/form-editor-quill', compact('title'));
	}

	public function editor_ckeditor()
	{
		$title = 'CKEditor';

		return view('mazer/form-editor-ckeditor', compact('title'));
	}

	public function editor_summernote()
	{
		$title = 'Summernote ';

		return view('mazer/form-editor-summernote', compact('title'));
	}

	public function editor_tinymce()
	{
		$title = 'TinyMCE';

		return view('mazer/form-editor-tinymce', compact('title'));
	}

}
