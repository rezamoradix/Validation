<?php

namespace Rey\Validation\RuleSets;

class AuthRuleSet
{
    public $user_pass = [
        'username' => [
            'label' => 'Default.username',
            'rules' => 'required'
        ],
        'password' => [
            'label' => 'Default.password',
            'rules' => 'required'
        ]
    ];

    public $email_pass = [
        'email' => [
            'label' => 'Default.email',
            'rules' => 'required|valid_email'
        ],
        'password' => [
            'label' => 'Default.password',
            'rules' => 'required'
        ]
    ];

    public $phone = [
        'phone' => [
            'label' => 'Default.phone',
            'rules' => 'required|iranphone'
        ],
    ];
}
