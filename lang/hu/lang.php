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
            'request' => 'Kérelem'
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
        'users' => 'Felhasználók mutatása',
        'groups' => 'Csoportok mutatása',
        'login' => 'Utolsó belépő mutatása',
        'logins' => 'Belépők számának mutatása',
        'url' => 'URL cím mutatása',
        'ip' => 'IP cím mutatása',
        'os' => 'Operációs rendszer mutatása',
        'upload_limit' => 'Feltöltési limit mutatása',
        'memory_limit' => 'Memória limit mutatása',
        'timezone' => 'Időzóna mutatása'
    ]
];
