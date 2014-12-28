<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'New features and widgets for backend.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'sidebar_description' => 'Hide descriptions in slidebar.',
        'focus_searchfield' => 'Focus search field automatically.',
        'comment' => 'It only works on Settings pages.'
    ],
    'widgets' => [
        'system' => [
            'label' => 'System status plus',
            'webpage' => 'Webpage',
            'updates' => 'Updates',
            'plugins' => 'Plugins',
            'themes' => 'Themes'
        ],
        'version' => [
            'label' => 'Versions',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'label' => 'Logs',
            'access' => 'Access',
            'event' => 'Event',
            'request' => 'Request'
        ],
        'admins' => [
            'label' => 'Administrators',
            'users' => 'Users',
            'groups' => 'Groups',
            'login' => 'Last login'
        ],
        'server' => [
            'label' => 'Server info',
            'host' => 'Host',
            'ip' => 'IP address',
            'os' => 'Operation system'
        ],
        'php' => [
            'label' => 'PHP settings',
            'upload_limit' => 'Upload limit',
            'memory_limit' => 'Memory limit',
            'timezone' => 'Timezone'
        ]
    ],
    'properties' => [
        'webpage' => 'Show webpage',
        'updates' => 'Show updates',
        'plugins' => 'Show plugins',
        'themes' => 'Show themes',
        'cms' => 'Show CMS version',
        'php' => 'Show PHP version',
        'gd' => 'Show GD version',
        'access' => 'Show access',
        'event' => 'Show event',
        'request' => 'Show request',
        'users' => 'Show users',
        'groups' => 'Show groups',
        'login' => 'Show last login',
        'url' => 'Shor URL address',
        'ip' => 'Show IP address',
        'os' => 'Show operation system',
        'upload_limit' => 'Show upload limit',
        'memory_limit' => 'Show memory limit',
        'timezone' => 'Show timezone'
    ]
];
