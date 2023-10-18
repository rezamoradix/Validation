<?php

namespace Rey\Validation\RuleSets;

class AuthRuleSet
{
    // Private
    private const _PASSWORD = [
        'label' => 'Validation.password',
        'rules' => 'required|min_length[6]|max_length[180]'
    ];

    private const _EMAIL = [
        'label' => 'Validation.email',
        'rules' => 'required|valid_email|max_length[180]'
    ];

    private const _PHONE = [
        'label' => 'Validation.phone',
        'rules' => 'required|iranphone'
    ];

    private const _REQ_MIN3_MAX180 = 'required|min_length[3]|max_length[180]';

    // Public
    public const USER_PASS = [
        'username' => [
            'label' => 'Validation.username',
            'rules' => self::_REQ_MIN3_MAX180
        ],
        'password' => self::_PASSWORD
    ];

    public const LOGIN_PASS = [
        'login' => [
            'label' => 'Validation.login',
            'rules' => self::_REQ_MIN3_MAX180
        ],
        'password' => self::_PASSWORD
    ];

    public const EMAIL_PASS = [
        'email' => self::_EMAIL,
        'password' => self::_PASSWORD
    ];

    public const PHONE = [
        'phone' => self::_PHONE
    ];

    public const PHONE_CODE_5 = [
        'phone_code' => [
            'label' => 'Validation.phone_code',
            'rules' => 'required|numeric|exact_length[5]'
        ],
    ];

    public const PHONE_CODE_6 = [
        'phone_code' => [
            'label' => 'Validation.phone_code',
            'rules' => 'required|numeric|exact_length[6]'
        ],
    ];

    public const NAME_PHONE_EMAIL_PASS = [
        'name' => [
            'label' => 'Validation.name',
            'rules' => self::_REQ_MIN3_MAX180
        ],
        'phone' => self::_PHONE,
        'email' => self::_EMAIL,
        'password' => self::_PASSWORD
    ];
}
