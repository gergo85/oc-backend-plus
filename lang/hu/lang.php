<?php

return [
    'plugin' => [
        'name' => 'Admin Plusz',
        'description' => 'Kiegészítő lehetőségek és widgetek az admin felülethez.',
        'author' => 'Szabó Gergő'
    ],
    'settings' => [
        'search_label' => 'Kereső mező automatikus aktiválása.',
        'search_comment' => 'Elsőként a listáknál, másodsorban az oldalsó menüben.',
        'avatar_label' => 'Kerek profilkép használata a szögletes helyett.',
        'avatar_comment' => 'Csak a felső menüben módosul a bélyegkép.',
        'clearbutton_label' => 'Törlés gomb hozzáadása a beviteli mezőkhöz.',
        'clearbutton_comment' => 'Csak az egyszerű szöveges mezőknél működik.',
        'keyboard_label' => 'Virtuális billentyűzet megjelenítése.',
        'keyboard_comment' => 'Csak az egysoros szöveges mezőknél működik.',
        'sidebar_desc_label' => 'Leírások rejtése az oldalsó menüben.',
        'sidebar_desc_comment' => 'Csak a Beállítások aloldalain működik.',
        'sidebar_search_label' => 'Kereső mező rejtése az oldalsó menüben.',
        'sidebar_search_comment' => 'Csak a Beállítások aloldalain működik.',
        'media_label' => 'A Média link rejtése a felső menüben.',
        'media_comment' => 'Továbbra is elérhető marad, csak nem látszik.',
        'themes_label' => 'A "További témák ..." link rejtése.',
        'themes_comment' => 'A Dizájn oldalon található a hivatkozás.',
        'delete_plugin_label' => 'Az October Demo bővítményének törlése.',
        'delete_plugin_comment' => 'Az összes fájl véglegesen eltávolításra kerül.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Admin - Rendszer állapota',
            'label' => 'Rendszer állapota',
            'webpage' => 'Weboldal',
            'updates' => 'Frissítések',
            'plugins' => 'Bővítmények',
            'themes' => 'Témák'
        ],
        'version' => [
            'title' => 'Admin - Verziók',
            'label' => 'Verziók',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Admin - Naplók',
            'label' => 'Naplók',
            'access' => 'Hozzáférés',
            'event' => 'Esemény',
            'request' => 'Kérelem',
            'total' => 'Összes'
        ],
        'admins' => [
            'title' => 'Admin - Adminisztrátorok',
            'label' => 'Adminisztrátorok',
            'users' => 'Felhasználók',
            'groups' => 'Csoportok',
            'login' => 'Utoljára belépve'
        ],
        'logins' => [
            'title' => 'Admin - Legutóbb beléptek',
            'label' => 'Legutóbb beléptek'
        ],
        'server' => [
            'title' => 'Admin - Szerver infók',
            'label' => 'Szerver infók',
            'host' => 'Hoszt',
            'ip' => 'IP cím',
            'os' => 'Operációs rendszer'
        ],
        'php' => [
            'title' => 'Admin - PHP beállítások',
            'label' => 'PHP beállítások',
            'upload_limit' => 'Feltöltési limit',
            'memory_limit' => 'Memória limit',
            'timezone' => 'Időzóna'
        ],
        'rss' => [
            'title' => 'Admin - RSS megjelenítő',
            'label' => 'RSS megjelenítő',
            'error' => 'Az URL cím nem megfelelő vagy',
            'refresh' => 'frissítse az oldalt'
        ],
        'images' => [
            'title' => 'Admin - Véletlenszerű képek',
            'label' => 'Véletlenszerű képek',
            'error' => 'A mező csak számokat tartalmazhat.',
            'simple' => 'Egyszerő',
            'slideshow' => 'Képváltós'
        ]
    ],
    'properties' => [
        'webpage' => 'Oldal állapot mutatása',
        'updates' => 'Frissítések mutatása',
        'plugins' => 'Bővítmények mutatása',
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
