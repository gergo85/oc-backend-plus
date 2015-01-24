<?php

return [
    'plugin' => [
        'name' => 'Admin Plusz',
        'description' => 'Új funkciók és widgetek az admin felülethez.',
        'author' => 'Szabó Gergő'
    ],
    'settings' => [
        'sidebar_description' => 'Leírások rejtése az oldalsó menüben.',
        'focus_searchfield' => 'Kereső mező automatikus aktiválása.',
        'virtual_keyboard' => 'Virtuális billentyűzet megjelenítése.',
        'more_themes' => 'A "További témák..." link elrejtése.',
        'themes_comment' => 'A Dizájn oldalon található.',
        'comment' => 'Csak a Beállítások aloldalain működik.'
    ],
    'widgets' => [
        'system' => [
            'label' => 'Rendszer állapota Plusz',
            'webpage' => 'Weboldal',
            'updates' => 'Frissítések',
            'plugins' => 'Kiegészítők',
            'themes' => 'Témák'
        ],
        'version' => [
            'label' => 'Verziók',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'label' => 'Naplók',
            'access' => 'Hozzáférés',
            'event' => 'Esemény',
            'request' => 'Kérelem',
            'total' => 'Összes'
        ],
        'admins' => [
            'label' => 'Adminisztrátorok',
            'users' => 'Felhasználók',
            'groups' => 'Csoportok',
            'login' => 'Utoljára belépve'
        ],
        'logins' => [
            'label' => 'Legutóbb beléptek'
        ],
        'server' => [
            'label' => 'Szerver infók',
            'host' => 'Hoszt',
            'ip' => 'IP cím',
            'os' => 'Operációs rendszer'
        ],
        'php' => [
            'label' => 'PHP beállítások',
            'upload_limit' => 'Feltöltési limit',
            'memory_limit' => 'Memória limit',
            'timezone' => 'Időzóna'
        ],
        'rss' => [
            'label' => 'RSS megjelenítő',
            'error' => 'Az URL cím nem megfelelő vagy',
            'refresh' => 'frissítse az oldalt'
        ],
        'images' => [
            'label' => 'Véletlenszerű képek',
            'error' => 'A mező csak számokat tartalmazhat.',
            'simple' => 'Egyszerő',
            'slideshow' => 'Képváltós'
        ]
    ],
    'properties' => [
        'webpage' => 'Oldal állapot mutatása',
        'updates' => 'Frissítések mutatása',
        'plugins' => 'Kiegészítők mutatása',
        'themes' => 'Témák mutatása',
        'cms' => 'CMS verzió mutatása',
        'php' => 'PHP verzió mutatása',
        'gd' => 'GD verzió mutatása',
        'access' => 'Hozzáférés mutatása',
        'event' => 'Esemény mutatása',
        'request' => 'Kérelem mutatása',
        'total' => 'Összes mutatása',
        'users' => 'Felhasználók mutatása',
        'groups' => 'Csoportok mutatása',
        'login' => 'Utolsó belépő mutatása',
        'logins' => 'Belépők számának mutatása',
        'url' => 'URL cím mutatása',
        'ip' => 'IP cím mutatása',
        'os' => 'Operációs rendszer mutatása',
        'upload_limit' => 'Feltöltési limit mutatása',
        'memory_limit' => 'Memória limit mutatása',
        'timezone' => 'Időzóna mutatása',
        'rss_title' => 'RSS url címe',
        'rss_url' => 'http://hvg.hu/rss',
        'news' => 'Hírek száma',
        'date' => 'Dátum mutatása',
        'description' => 'Leírás mutatása',
        'category' => 'Kategória',
        'type' => 'Típus',
        'number' => 'Képek a diavetítésben',
        'width' => 'Szélesség (pixelben)',
        'height' => 'Magasság (pixelben)',
        'text' => 'Szöveg'
    ],
    'category' => [
        'all' => 'Mind',
        'abstract' => 'Absztrakt',
        'animals' => 'Állatok',
        'business' => 'Üzlet',
        'cats' => 'Macskák',
        'city' => 'Város',
        'food' => 'Ételek',
        'nightlife' => 'Éjszakai élet',
        'fashion' => 'Divat',
        'people' => 'Emberek',
        'nature' => 'Természet',
        'sports' => 'Sport',
        'technics' => 'Technika',
        'transport' => 'Utazás'
    ],
    'component' => [
        'image' => [
            'name' => 'Lorem ipsum kép',
            'description' => ''
        ],
        'text' => [
            'name' => 'Lorem ipsum szöveg',
            'description' => '',
            'length' => 'Hossza',
            'bit' => 'kevés',
            'some' => 'több',
            'lots' => 'sok'
        ]
    ]
];
