<?php namespace App\Controllers\Mazer;

class Component extends BaseController
{
	public function alert()
	{
		$title = 'Alert';

		return view('mazer/component-alert', compact('title'));
	}

	public function badge()
	{
		$title = 'Badge';

		return view('mazer/component-badge', compact('title'));
	}

	public function breadcrumb()
	{
		$title = 'Breadcrumb';

		return view('mazer/component-breadcrumb', compact('title'));
	}

	public function button()
	{
		$title = 'Button';

		return view('mazer/component-button', compact('title'));
	}

	public function card()
	{
		$title = 'Card';

		return view('mazer/component-card', compact('title'));
	}

	public function carousel()
	{
		$title = 'Carousel';

		return view('mazer/component-carousel', compact('title'));
	}

	public function dropdown()
	{
		$title = 'Dropdown';

		return view('mazer/component-dropdown', compact('title'));
	}

	public function listGroup()
	{
		$title = 'List Group';

		return view('mazer/component-list-group', compact('title'));
	}

	public function modal()
	{
		$title = 'Modal';

		return view('mazer/component-modal', compact('title'));
	}

	public function navs()
	{
		$title = 'Navs';

		return view('mazer/component-navs', compact('title'));
	}

	public function pagination()
	{
		$title = 'Pagination';

		return view('mazer/component-pagination', compact('title'));
	}

	public function progress()
	{
		$title = 'Progress';

		return view('mazer/component-progress', compact('title'));
	}

	public function spinner()
	{
		$title = 'Spinner';

		return view('mazer/component-spinner', compact('title'));
	}

	public function tooltip()
	{
		$title = 'Tooltip';

		return view('mazer/component-tooltip', compact('title'));
	}

	public function extra_avatar()
	{
		$title = 'Avatar';

		return view('mazer/extra-component-avatar', compact('title'));
	}

	public function extra_sweetAlert()
	{
		$title = 'Sweet Alert';

		return view('mazer/extra-component-sweetalert', compact('title'));
	}

	public function extra_toastify()
	{
		$title = 'Toastify';

		return view('mazer/extra-component-toastify', compact('title'));
	}

	public function extra_rating()
	{
		$title = 'Rating';

		return view('mazer/extra-component-rating', compact('title'));
	}

	public function extra_divider()
	{
		$title = 'Divider';

		return view('mazer/extra-component-divider', compact('title'));
	}
}
