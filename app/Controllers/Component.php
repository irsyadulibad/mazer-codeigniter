<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use Exception;

class Component extends BaseController
{
    public function view($view)
    {
        $subtitles = [
            "alert" => "A pretty helpful component to show emphasized information to the user.",
            "badge" => "Examples for badges, our small count and labeling component.",
            "breadcrumb" => "Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.",
            "button" => "Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.",
            "card" => "Bootstrap’s cards provide a flexible and extensible content
            container with multiple variants and options.",
            "carousel" => "A slideshow component for cycling through elements—images or slides of text—like a carousel.",
            "collapse" => "Collapse your content and control its visibility with buttons.",
            "dropdown" => "Multi-purpose dropdown component with tons of variations.",
            "list-group" => "List groups are a flexible and powerful component for displaying a series of content.",
            "modal" => "Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.",
            "navs" => "Examples for how to use Bootstrap’s included navigation components.",
            "pagination" => "Examples for showing pagination to indicate a series of related content exists across multiple pages.",
            "progress" => "Examples for how to use Bootstrap’s included progress components.",
            "spinner" => "Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.",
            "toasts" => "Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.",
            "tooltip" => "The tooltip, also known as infotip or hint, is a common graphical user interface element which shows additional information on element hover."
        ];

        try {
            return view("pages/components/{$view}", [
                'subtitle' => $subtitles[$view]
            ]);
        } catch (Exception $e) {
            throw new PageNotFoundException("Not Found");
        }
    }
}
