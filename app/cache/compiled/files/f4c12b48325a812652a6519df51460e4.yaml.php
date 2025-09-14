<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/workspace/empty-repo/MyFirstStepsAtMakingABlog/app/user/plugins/form/form.yaml',
    'modified' => 1757535482,
    'size' => 2079,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'inline_css' => true,
        'refresh_prevention' => false,
        'client_side_validation' => true,
        'debug' => false,
        'inline_errors' => false,
        'modular_form_fix' => true,
        'files' => [
            'multiple' => false,
            'limit' => 10,
            'destination' => 'self@',
            'avoid_overwriting' => false,
            'random_name' => false,
            'filesize' => 0,
            'accept' => [
                0 => 'image/*'
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'light',
            'site_key' => NULL,
            'secret_key' => NULL
        ],
        'turnstile' => [
            'theme' => 'light',
            'site_key' => NULL,
            'secret_key' => NULL
        ],
        'basic_captcha' => [
            'type' => 'math',
            'debug' => false,
            'image' => [
                'width' => 135,
                'height' => 40,
                'bg' => '#ffffff'
            ],
            'chars' => [
                'length' => 6,
                'font' => 'zxx-xed.ttf',
                'size' => 24,
                'box_width' => 200,
                'box_height' => 70,
                'start_x' => 10,
                'start_y' => 40,
                'bg' => '#ffffff',
                'text' => '#000000'
            ],
            'math' => [
                'min' => 1,
                'max' => 12,
                'operators' => [
                    0 => '+',
                    1 => '-',
                    2 => '*'
                ]
            ]
        ]
    ]
];
