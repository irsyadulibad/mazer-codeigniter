<?php

namespace App\Services\View;

class SidebarService
{
    public function items(): array
    {
        return [
            // Menu Group
            new SidebarItem(name: "Menu", isTitle: true),

            new SidebarItem(name: 'Dashboard', icon: 'grid-fill', url: '/'),

            (new SidebarItem(name: 'Components', icon: 'stack', group: '/components'))
                ->addSubItem('Alert')
                ->addSubItem('Badge')
                ->addSubItem('Breadcrumb')
                ->addSubItem('Button')
                ->addSubItem('Card')
                ->addSubItem('Carousel')
                ->addSubItem('Collapse')
                ->addSubItem('Dropdown')
                ->addSubItem('List Group')
                ->addSubItem('Modal')
                ->addSubItem('Navs')
                ->addSubItem('Pagination')
                ->addSubItem('Progress')
                ->addSubItem('Spinner')
                ->addSubItem('Toasts')
                ->addSubItem('Tooltip'),

            (new SidebarItem(name: 'Extra Components', icon: 'collection-fill', group: '/components/extra'))
                ->addSubItem('Avatar')
                ->addSubItem('Sweet Alert')
                ->addSubItem('Toastify')
                ->addSubItem('Rating')
                ->addSubItem('Divider'),

            (new SidebarItem(name: 'Layouts', icon: 'grid-1x2-fill', group: '/layouts'))
                ->addSubItem('Default Layout')
                ->addSubItem('1 Column')
                ->addSubItem('Vertical Navbar')
                ->addSubItem('RTL Layout')
                ->addSubItem('Horizontal Menu'),

            // Form & Tables
            new SidebarItem(name: "Forms & Tables", isTitle: true),

            (new SidebarItem(name: 'Form Elements', icon: 'hexagon-fill', group: '/forms'))
                ->addSubItem('Input')
                ->addSubItem('Input Group')
                ->addSubItem('Select')
                ->addSubItem('Radio')
                ->addSubItem('Checkbox')
                ->addSubItem('Textarea'),

            new SidebarItem('Form Layout', icon: 'file-earmark-medical-fill'),

            (new SidebarItem('Form Validation', icon: 'journal-check', group: '/form-validation'))
                ->addSubItem('Parsley'),

            (new SidebarItem('Form Editor', icon: 'pen-fill', group: '/form-editor'))
                ->addSubItem('Quill')
                ->addSubItem('CKEditor')
                ->addSubItem('Summernote')
                ->addSubItem('TinyMCE'),

            new SidebarItem('Table', icon: 'grid-1x2-fill'),

            (new SidebarItem('Datatables', icon: 'file-earmark-spreadsheet-fill', group: '/datatables'))
                ->addSubItem('Datatable')
                ->addSubItem('Datatable (JQuery)'),

            // Extra UI
            new SidebarItem('Extra UI', isTitle: true),

            (new SidebarItem('Widgets', icon: 'pentagon-fill', group: '/widgets'))
                ->addSubItem('Chatbox')
                ->addSubItem('Pricing')
                ->addSubItem('To-do List'),

            (new SidebarItem('Icons', icon: 'egg-fill', group: '/icons'))
                ->addSubItem('Bootstrap Icons')
                ->addSubItem('Fontawesome')
                ->addSubItem('Dripicons'),

            (new SidebarItem('Charts', icon: 'bar-chart-fill', group: '/charts'))
                ->addSubItem('ChartJS')
                ->addSubItem('Apexcharts'),

            new SidebarItem('File Uploader', icon: 'cloud-arrow-up-fill'),

            (new SidebarItem('Maps', icon: 'map-fill', group: '/maps'))
                ->addSubItem('Google Map')
                ->addSubItem('JS Vector Map'),

            // Pages
            new SidebarItem('Pages', isTitle: true),
            new SidebarItem('Email Application', icon: 'envelope-fill'),
            new SidebarItem('Chat Application', icon: 'chat-dots-fill'),
            new SidebarItem('Photo Gallery', icon: 'image-fill'),
            new SidebarItem('Checkout Page', icon: 'basket-fill'),

            (new SidebarItem('Authentication', icon: 'person-badge-fill', group: '/authentications'))
                ->addSubItem('Login')
                ->addSubItem('Register')
                ->addSubItem('Forgot Password'),

            (new SidebarItem('Errors', icon: 'x-octagon-fill', group: '/errors'))
                ->addSubItem('403')
                ->addSubItem('404')
                ->addSubItem('500'),

            // Raise Support
            new SidebarItem('Raise Support', isTitle: true),
            new SidebarItem('Documentation', icon: 'life-preserver', url: 'https://zuramai.github.io/mazer/docs'),
            new SidebarItem('Contribute', icon: 'puzzle', url: 'https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md'),
            new SidebarItem('Donate', icon: 'cash', url: 'https://github.com/zuramai/mazer#donation'),
        ];
    }
}

class SidebarItem
{
    public string|null $url;
    public array $subItems = [];

    public function __construct(
        public string $name,
        public string|null $group = null,
        string|null $url = null,
        public string|null $icon = null,
        public bool $isTitle = false,
    ) {
        if($group) {
            $this->url = $group;
            return;
        }

        $this->url = $this->genUrl($name, $url);
    }

    public function addSubItem(string $name, string|null $url = null)
    {
        $this->subItems[] = new self(
            name: $name,
            url: "{$this->group}/" . $this->genUrl($name, $url)
        );

        return $this;
    }

    private function genUrl(string $name, string|null $url)
    {
        return $url ?? url_title($name, lowercase: true);
    }
}
