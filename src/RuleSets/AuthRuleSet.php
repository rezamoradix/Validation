<?php

namespace Rey\Validation\RuleSets;

class AuthRuleSet
{
    public const USER_PASS = [
        'username' => [
            'label' => 'Validation.username',
            'rules' => 'required'
        ],
        'password' => [
            'label' => 'Validation.password',
            'rules' => 'required'
        ]
    ];

    public const EMAIL_PASS = [
        'email' => [
            'label' => 'Validation.email',
            'rules' => 'required|valid_email'
        ],
        'password' => [
            'label' => 'Validation.password',
            'rules' => 'required'
        ]
    ];

    public const PHONE = [
        'phone' => [
            'label' => 'Validation.phone',
            'rules' => 'required|iranphone'
        ],
    ];
}
