<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/plugins/archives/blueprints.yaml',
    'modified' => 1592452401,
    'data' => [
        'name' => 'Archives',
        'version' => '1.5.1',
        'description' => 'The **Archives** plugin creates links for pages grouped by month/year',
        'icon' => 'university',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-archives',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'archives, plugin, blog, month, year, date, navigation, history',
        'bugs' => 'https://github.com/getgrav/grav-plugin-archives/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'date_display_format' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Date Format',
                    'default' => 'jS M Y',
                    'options' => [
                        'F jS Y' => 'January 1st 2014',
                        'l jS of F' => 'Monday 1st of January',
                        'D, m M Y' => 'Mon, 01 Jan 2014',
                        'd-m-y' => '01-01-14',
                        'jS M Y' => '10th Feb 2014',
                        'F Y' => 'Jan 2015'
                    ]
                ],
                'show_count' => [
                    'type' => 'toggle',
                    'label' => 'Show Count',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'limit' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Count Limit',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'order.dir' => [
                    'type' => 'toggle',
                    'label' => 'Order Direction',
                    'highlight' => 'asc',
                    'default' => 'desc',
                    'options' => [
                        'asc' => 'Ascending',
                        'desc' => 'Descending'
                    ]
                ],
                'order.by' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Order Type',
                    'options' => [
                        'default' => 'Default - based on folder name',
                        'folder' => 'Folder - based on prefix-less folder name',
                        'title' => 'Title - based on title field in header',
                        'date' => 'Date - based on date field in header'
                    ]
                ],
                'filters.category' => [
                    'type' => 'selectize',
                    'label' => 'Category filter',
                    'help' => 'Comma separated list of category names',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'filter_combinator' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Filter Combinator',
                    'default' => 'and',
                    'options' => [
                        'and' => 'And - Boolean &&',
                        'or' => 'Or - Boolean ||'
                    ]
                ]
            ]
        ]
    ]
];
