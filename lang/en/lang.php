<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'New useful features and widgets for back-end.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'tab_display' => 'Display',
        'avatar_label' => 'Rounded profile image instead of cube one',
        'avatar_comment' => 'The avatar modifies only in the top menu.',
        'topmenu_label' => 'Hide the label in the top menu',
        'topmenu_comment' => 'It works with all menu style.',
        'sidebar_desc_label' => 'Hide the description of menus in the sidebar',
        'sidebar_desc_comment' => 'It works only the pages of Settings menu.',
        'sidebar_search_label' => 'Hide the search field in the sidebar',
        'sidebar_search_comment' => 'It works only the pages of Settings menu.',
        'tab_behavior' => 'Behavior',
        'search_label' => 'Focus the search field automatically',
        'search_comment' => 'Firstly in the lists, secondly in the sidebar.',
        'context_menu_label' => 'Enable the context menu',
        'context_menu_comment' => 'Right-click to show the quick menu.',
        'keyboard_label' => 'Show the virtual keyboard by forms (beta)',
        'keyboard_comment' => 'It works only by simple input fields.'
    ],
    'trash' => [
        'title' => 'Trash items',
        'description' => 'Delete the unused files and folders.',
        'permission' => 'Manage the trash items',
        'type' => 'Type',
        'path' => 'Path',
        'size' => 'Size',
        'file' => 'File',
        'folder' => 'Folder',
        'database' => 'Database',
        'items' => 'Item|Items',
        'hint' => 'After that you updated the OctoberCMS core, you click on the Search button again. If you want to delete the cache of your webpage, you need to add the "Backend - Cache" widget to the Dashboard. Please <b>rate this plugin</b> if it helped your work:',
        'search' => 'Search',
        'success' => 'The scan was successfully completed.',
        'no_items' => 'Congratulations, no unused files on the website!',
        'remove_all' => 'Delete all',
        'delete' => 'Do you want to delete this items?',
        'remove' => 'Successfully removed those items.'
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
        ],
        'cache' => [
            'title' => 'Backend - Cache',
            'label' => 'Cache usage',
            'clear' => 'Clear cache'
        ],
        'permission' => 'Manage widgets on Dashboard'
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
    ]
];
