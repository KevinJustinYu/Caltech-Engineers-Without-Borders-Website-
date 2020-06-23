<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/config/plugins/email.yaml',
    'modified' => 1592452400,
    'data' => [
        'enabled' => true,
        'from' => 'your@email.here',
        'to' => 'ewb@caltech.edu',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ]
    ]
];
