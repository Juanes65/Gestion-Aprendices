<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Bienestar al Aprendiz',
    'title_prefix' => 'Bienestar | ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b style:"text-align:center">BIENESTAR</b>',
    'logo_img' => 'vendor/adminlte/dist/img/9010.jpg',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'BIENESTAR',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-success',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-green elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-green navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [

        [
            'text'    => 'Fichas',
            'icon'    => 'fas fa-fw fa-folder',
            'icon_color' => 'green',
            'can' => 'admin',
            'submenu' => [
                [
                    'text' => 'Agregar ficha',
                    'icon_color' => 'green',
                    'route'  => 'create.ficha',
                ],
                [
                    'text' => 'Fichas disponibles',
                    'icon_color' => 'green',
                    'route'  => 'index.ficha',
                ],
            ]
        ],
        [
            'text'    => 'Dormitorios',
            'icon'    => 'fas fa-fw fa-bed',
            'icon_color' => 'green',
            'can' => 'admin',
            'submenu' => [
                [
                    'text' => 'Agregar dormitorio',
                    'icon_color' => 'green',
                    'route'  => 'create.dormitorio',
                ],
                [
                    'text' => 'Disponibilidad',
                    'icon_color' => 'green',
                    'route'  => 'index.dormitorio',
                ],
                [
                    'text' => 'Aprendiz dormitorio',
                    'icon_color' => 'green',
                    'route'  => 'indextodo.cupos',
                ],
            ]
        ],
        [
            'text'    => 'Novedades',
            'icon'    => 'fas fa-fw fa-lightbulb',
            'icon_color' => 'green',
            'can' => 'admin',
            'submenu' => [
                // [
                //     'text' => 'Agregar',
                //     'icon_color' => 'green',
                //     'route'  => 'create.novedad',
                // ],
                [
                    'text' => 'Novedades realizadas',
                    'icon_color' => 'green',
                    'route'  => 'index.novedad',
                ],
            ]
        ],
        [
            'text'    => 'Restaurante',
            'icon'    => 'fas fa-fw fa-utensils',
            'icon_color' => 'green',
            'can' => 'admin',
            'submenu' => [
                [
                    'text' => 'Agregar reporte',
                    'icon_color' => 'green',
                    'route'  => 'create.cocina',
                ],
                [
                    'text' => 'Reportes disponible',
                    'icon_color' => 'green',
                    'route'  => 'index.cocina',
                ],
            ]
        ],
        //Solicitud Logo
        [
            'text'    => 'Solicitud',
            'icon'    => 'fas fa-fw fa-envelope',
            'icon_color' => 'green',
            'can' => 'cocina',
            'submenu' => [
                [
                    'text' => 'Traer informe',
                    'icon_color' => 'green',
                    'route'  => 'create.solicitud',
                ],
                [
                    'text' => 'Cantidad de platillos',
                    'icon_color' => 'green',
                    'route'  => 'index.solicitud',
                ],
            ]
        ],

        //Creacion Bodegas

        [
            'text'    => 'Bodegas',
            'icon'    => 'fas fa-fw fa-box-open',
            'icon_color' => 'green',
            'can' => 'cocina',
            'submenu' => [
                [
                    'text' => 'Historico',
                    'icon_color' => 'green',
                    'route'  => 'index.todo',
                ],
                [
                    'text' => 'Productos',
                    'icon_color' => 'green',
                    'route'  => 'index.minimo',
                ],
                [
                    'text' => 'Crear bodegas',
                    'icon_color' => 'green',
                    'route'  => 'create.bodega',
                ],
                [
                    'text' => 'Bodegas disponibles',
                    'icon_color' => 'green',
                    'route'  => 'index.bodega',
                ],
            ]
        ],

        [
            'text'    => 'Platillos',
            'icon'    => 'fas fa-fw fa-check',
            'icon_color' => 'green',
            'can' => 'cocina',
            'can' => 'chef',
            'submenu' => [
                [
                    'text' => 'Agregar platillos',
                    'icon_color' => 'green',
                    'route'  => 'create.platillo',
                ],
                [
                    'text' => 'Platillos disponibles',
                    'icon_color' => 'green',
                    'route'  => 'index.platillo',
                ],
            ]
        ],

        //Creación Platillo Solicitud

        [
            'text'    => 'Solicitar Platillos',
            'icon'    => 'fas fa-fw fa-envelope',
            'icon_color' => 'green',
            'can' => 'cocina',
            'submenu' => [
                [
                    'text' => 'Solicitar',
                    'icon_color' => 'green',
                    'route'  => 'create.platillo_s',
                ],
                [
                    'text' => 'Platillos solicitados',
                    'icon_color' => 'green',
                    'route'  => 'index.platillo_s',
                ],

            ]
        ],

        [
            'text'    => 'Proveedores',
            'icon'    => 'fas fa-fw fa-truck',
            'icon_color' => 'green',
            'can' => 'cocina',
            'submenu' => [
                [
                    'text' => 'Agregar proveedor ',
                    'icon_color' => 'green',
                    'route'  => 'create.provedor',
                ],
                [
                    'text' => 'Proveedores',
                    'icon_color' => 'green',
                    'route'  => 'index.provedor',
                ],
            ]
        ],

        [
            'text'    => 'Pedidos',
            'icon'    => 'fas fa-fw fa-border-none',
            'icon_color' => 'green',
            'can' => 'cocina',
            'submenu' => [
                [
                    'text' => 'Desayunos',
                    'icon_color' => 'green',
                    'route'  => 'create.pedido',
                ],
                [
                    'text' => 'Almuerzos',
                    'icon_color' => 'green',
                    'route'  => 'create2.pedido',
                ],
                [
                    'text' => 'Cenas',
                    'icon_color' => 'green',
                    'route'  => 'create3.pedido',
                ],

            ]
        ],

        [
            'text'    => 'Inspeccion',
            'icon'    => 'fas fa-fw fa-eye',
            'icon_color' => 'green',
            'submenu' => [
                [
                    'text' => 'Agregar reporte ',
                    'icon_color' => 'green',
                    'route'  => 'create.inspeccion',
                ],
                [
                    'text' => 'Reportes disponibles',
                    'icon_color' => 'green',
                    'route'  => 'index.inspeccion',
                ],
            ]
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [

        'google' => [
            'active' => true,
            'files' => [
              [
                'type' => 'css',
                'asset' => false,
                'location' => 'https://fonts.googleapis.com/css2?family=Material+Icons',
              ],
              [
                'type' => 'css',
                'asset' => false,
                'location' => 'https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css',
              ],
            ],
        ],

        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
