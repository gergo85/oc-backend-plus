<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'New useful features and widgets for back-end.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'search_label' => 'Focus the search field automatically.',
        'search_comment' => 'Firstly in the lists, secondly in the sidebar.',
        'avatar_label' => 'Rounded profile image instead of cube one.',
        'avatar_comment' => 'The avatar modifies only in the top menu.',
        'clearbutton_label' => 'Add the clear button to input fields.',
        'clearbutton_comment' => 'It works only by simple text fields.',
        'keyboard_label' => 'Show the virtual keyboard by forms.',
        'keyboard_comment' => 'It works only by simple text fields.',
        'sidebar_desc_label' => 'Hide the description of menus in the sidebar.',
        'sidebar_desc_comment' => 'It works only the pages of Settings menu.',
        'sidebar_search_label' => 'Hide the search field in the sidebar.',
        'sidebar_search_comment' => 'It works only the pages of Settings menu.',
        'media_label' => 'Hide the Media link in the top menu.',
        'media_comment' => 'It still available but it not shows.',
        'themes_label' => 'Hide the "Find more themes" link.',
        'themes_comment' => 'Located on the Front-end theme page.',
        'delete_plugin_label' => 'Delete the October Demo plugin.',
        'delete_plugin_comment' => 'All files will be removed permanently.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Backend - System status plus',
            'label' => 'System status plus',
            'webpage' => 'Webpage',
            'updates' => 'Updates',
            'plugins' => 'Plugins',
            'themes' => 'Themes'
        ],
        'version' => [
            'title' => 'Backend - Versions',
            'label' => 'Versions',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Backend - Logs',
            'label' => 'Logs',
            'access' => 'Access',
            'event' => 'Event',
            'request' => 'Request',
            'total' => 'Total'
        ],
        'admins' => [
            'title' => 'Backend - Administrators',
            'label' => 'Administrators',
            'users' => 'Users',
            'groups' => 'Groups',
            'login' => 'Last login'
        ],
        'logins' => [
            'title' => 'Backend - Last logins',
            'label' => 'Last logins'
        ],
        'server' => [
            'title' => 'Backend - Server info',
            'label' => 'Server info',
            'host' => 'Host',
            'ip' => 'IP address',
            'os' => 'Operation system'
        ],
        'php' => [
            'title' => 'Backend - PHP settings',
            'label' => 'PHP settings',
            'upload_limit' => 'Upload limit',
            'memory_limit' => 'Memory limit',
            'timezone' => 'Timezone'
        ],
        'rss' => [
            'title' => 'Backend - RSS viewer',
            'label' => 'RSS viewer',
            'error' => 'The URL address is incorrect or',
            'refresh' => 'refresh page'
        ],
        'images' => [
            'title' => 'Backend - Random images',
            'label' => 'Random images',
            'error' => 'The field can only contain numbers.',
            'simple' => 'Simple',
            'slideshow' => 'Slideshow'
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
        'total' => 'Show total',
        'users' => 'Show users',
        'groups' => 'Show groups',
        'login' => 'Show last login',
        'logins' => 'Show the number of logins',
        'url' => 'Show URL address',
        'ip' => 'Show IP address',
        'os' => 'Show operation system',
        'upload_limit' => 'Show upload limit',
        'memory_limit' => 'Show memory limit',
        'timezone' => 'Show timezone',
        'rss_title' => 'RSS url',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Number of news',
        'date' => 'Show date',
        'description' => 'Show description',
        'category' => 'Category',
        'type' => 'Type',
        'number' => 'Images in slideshow',
        'width' => 'Width (in pixel)',
        'height' => 'Height (in pixel)',
        'text' => 'Text'
    ],
    'category' => [
        'all' => 'All',
        'abstract' => 'Abstract',
        'animals' => 'Animals',
        'business' => 'Business',
        'cats' => 'Cats',
        'city' => 'City',
        'food' => 'Food',
        'nightlife' => 'Nightlife',
        'fashion' => 'Fashion',
        'people' => 'People',
        'nature' => 'Nature',
        'sports' => 'Sports',
        'technics' => 'Technics',
        'transport' => 'Transport'
    ],
    'component' => [
        'image' => [
            'name' => 'Lorem ipsum image',
            'description' => ''
        ],
        'text' => [
            'name' => 'Lorem ipsum text',
            'description' => '',
            'length' => 'Length',
            'bit' => 'a bit',
            'some' => 'some',
            'lots' => 'lots'
        ]
    ]
];
