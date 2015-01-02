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
        'logins' => [
            'label' => 'Last logins'
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
        ],
        'rss' => [
            'label' => 'RSS view'
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
        'logins' => 'Show the number of logins',
        'url' => 'Shor URL address',
        'ip' => 'Show IP address',
        'os' => 'Show operation system',
        'upload_limit' => 'Show upload limit',
        'memory_limit' => 'Show memory limit',
        'timezone' => 'Show timezone',
        'rss_title' => 'RSS url',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Number of news',
        'date' => 'Show date',
        'description' => 'Show description'
    ]
];
