<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/kevin/Documents/Temporary Documents/engineers_without_borders/MAMP Websites/grav-skeleton-deliver-site/user/config/site.yaml',
    'modified' => 1570161934,
    'data' => [
        'title' => 'EWB Caltech',
        'author' => [
            'name' => 'Engineers Without Borders',
            'email' => 'ewb@caltech.edu',
            'copyright' => 'Copyright 2019. All Rights Reserved.'
        ],
        'social' => [
            0 => [
                'url' => 'https://www.facebook.com/ewbcit',
                'icon' => 'facebook'
            ]
        ],
        'contact' => [
            'address' => [
                0 => [
                    'line' => '1200 E California Blvd'
                ],
                1 => [
                    'line' => 'Pasadena, CA'
                ],
                2 => [
                    'line' => 'United States'
                ]
            ]
        ],
        'othermenu' => [
            0 => [
                'text' => 'About',
                'url' => 'about'
            ],
            1 => [
                'text' => 'Privacy Policy',
                'url' => '#'
            ],
            2 => [
                'text' => 'Contact',
                'url' => 'contact'
            ]
        ],
        'quicklinks' => [
            0 => [
                'text' => 'Projects',
                'url' => 'base_url:projects'
            ],
            1 => [
                'text' => 'About',
                'url' => 'base_url:about'
            ],
            2 => [
                'text' => 'Blog',
                'url' => 'base_url:blog'
            ],
            3 => [
                'text' => 'Join',
                'url' => 'base_url:join'
            ],
            4 => [
                'text' => 'Donate',
                'url' => 'base_url:donate'
            ],
            5 => [
                'text' => 'Contact Us',
                'url' => 'base_url:contact'
            ]
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'metadata' => [
            'description' => 'EWB Caltech Website'
        ],
        'summary' => [
            'size' => 300
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'header_options' => [
            'arrows' => 'true',
            'autoslide' => 'false',
            'autoslideHoverStop' => 'false',
            'interval' => '2000',
            'loop' => 'false',
            'transition' => 'zoom',
            'itemsForSlide' => '0',
            'touch' => 'true',
            'swipe' => 'true'
        ],
        'footer' => [
            'description' => 'EWB-Caltech is a university chapter of Engineers Without Borders-USA that designs and implements sustainable engineering projects that address pressing needs within underprivileged communities.',
            'contact_title' => 'Contact Info',
            'links_title' => 'Quick Links',
            'copyright_text' => 'Copyright 2019. All Rights Reserved.'
        ]
    ]
];
