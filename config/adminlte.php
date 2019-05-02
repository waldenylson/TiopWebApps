<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'TIOp - Dashboard',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>CINDACTA III</b> - TIOp',

    'logo_mini' => '<b>TIO</b>p',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => '/dashboard',

    'logout_url' => 'logout',

    'logout_method' => 'get',

    'login_url' => 'login',

    'register_url' => null,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'Dashboard',
        [
            'text' => 'Resumo',
            'url'  => '/dashboard',
            'icon' => 'refresh',
        ],
        [
            'text' => 'Sinoptico',
            'url'  => '/dashboard/sinoptico',
            'icon' => 'sitemap',
            'linkClass' => 'fancybox',
        ],

        'STVD',
        [
            'text'    => 'Radar',
            'icon'    => 'podcast',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/radares',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => '/radares/novo',
                    'icon' => 'plus-circle',
                    'linkClass' => 'fancybox', // Adicionar esta linha para que funcione corretamente @if (isset($item['linkClass'])) class="{{ $item['linkClass'] }}" @endif
                ],
            ],
        ],
        [
            'text'    => 'Sistemas',
            'icon'    => 'code',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/sistemas',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => '/sistemas/novo',
                    'icon' => 'plus-circle',
                    'linkClass' => 'fancybox', // Adicionar esta linha para que funcione corretamente @if (isset($item['linkClass'])) class="{{ $item['linkClass'] }}" @endif
                ],
            ],
        ],
        [
            'text'    => 'Centros',
            'icon'    => 'compress',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/centros',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => '/centros/novo',
                    'icon' => 'plus-circle',
                    'linkClass' => 'fancybox', // Adicionar esta linha para que funcione corretamente @if (isset($item['linkClass'])) class="{{ $item['linkClass'] }}" @endif
                ],
            ],
        ],
        [
            'text'    => 'Sistemas/Centros',
            'icon'    => 'plus',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/sc',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => '/sc/novo',
                    'icon' => 'plus-circle',
                    'linkClass' => 'fancybox', // Adicionar esta linha para que funcione corretamente @if (isset($item['linkClass'])) class="{{ $item['linkClass'] }}" @endif
                ],
            ],
        ],
        [
            'text'    => 'BDS',
            'icon'    => 'database',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/bds',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => '/bds/novo',
                    'icon' => 'plus-circle',
                    'linkClass' => 'fancybox', // Adicionar esta linha para que funcione corretamente @if (isset($item['linkClass'])) class="{{ $item['linkClass'] }}" @endif
                ],
            ],
        ],
        [
            'text'    => 'RPL',
            'icon'    => 'plane',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/rpl',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => '/rpl/novo',
                    'icon' => 'plus-circle',
                    'linkClass' => 'fancybox', // Adicionar esta linha para que funcione corretamente @if (isset($item['linkClass'])) class="{{ $item['linkClass'] }}" @endif
                ],
            ],
        ],
        [
            'text'    => 'MNT Programadas',
            'icon'    => 'clock-o',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/mnt',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => '/mnt/novo',
                    'icon' => 'plus-circle',
                    'linkClass' => 'fancybox', // Adicionar esta linha para que funcione corretamente @if (isset($item['linkClass'])) class="{{ $item['linkClass'] }}" @endif
                ],
            ],
        ],

        'TIOP',
        [
            'text' => 'SOBREAVISO',
            'icon'    => 'clock-o',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/sobreaviso',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => '/users',
                    'icon' => 'clock-o',
                ],
            ]
        ],

        'PARAMETRIZAÇÃO',
        [
            'text' => 'CONTAS USUÁRIO',
            'icon'    => 'users',
            'submenu' => [
                [
                    'text' => 'Listar Todos',
                    'url'  => '/users',
                    'icon' => 'list',
                ],
                [
                    'text' => 'Cadastrar',
                    'url'  => 'users/novo',
                    'icon' => 'user',
                    'linkClass' => 'fancybox',
                ],
                [
                    'text' => 'Alterar Senha',
                    'url'  => 'users/senha',
                    'icon' => 'key',
                    'linkClass' => 'fancybox',
                ],
            ]
        ],


//        [
//            'text'    => 'Multilevel',
//            'icon'    => 'share',
//            'submenu' => [
//                [
//                    'text' => 'Level One',
//                    'url'  => '#',
//                ],
//                [
//                    'text'    => 'Level One',
//                    'url'     => '#',
//                    'submenu' => [
//                        [
//                            'text' => 'Level Two',
//                            'url'  => '#',
//                        ],
//                        [
//                            'text'    => 'Level Two',
//                            'url'     => '#',
//                            'submenu' => [
//                                [
//                                    'text' => 'Level Three',
//                                    'url'  => '#',
//                                ],
//                                [
//                                    'text' => 'Level Three',
//                                    'url'  => '#',
//                                ],
//                            ],
//                        ],
//                    ],
//                ],
//                [
//                    'text' => 'Level One',
//                    'url'  => '#',
//                ],
//            ],
//        ],
        'LABELS',
//        [
//            'text'       => 'Important',
//            'icon_color' => 'red',
//        ],
//        [
//            'text'       => 'Warning',
//            'icon_color' => 'yellow',
//        ],
//        [
//            'text'       => 'Information',
//            'icon_color' => 'aqua',
//            'url'        => '/radares/novo '
//        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => false,
        'select2'    => false,
    ],
];
