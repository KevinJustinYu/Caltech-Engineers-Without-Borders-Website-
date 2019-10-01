<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Noelle_2/Desktop/Projects/EWB/Caltech-Engineers-Without-Borders-Website-/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1564977462,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'built_in_js' => true,
        'display_button' => false,
        'min_query_length' => 3,
        'route' => '/search',
        'search_content' => 'rendered',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => NULL
        ],
        'filter_combinator' => 'and',
        'ignore_accented_characters' => false,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];