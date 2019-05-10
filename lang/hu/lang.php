<?php

return [
    'plugin' => [
        'name' => 'Admin Plusz',
        'description' => 'Kiegészítő lehetőségek és widgetek az admin felülethez.',
        'author' => 'Szabó Gergő'
    ],
    'settings' => [
        'tab_display' => 'Megjelenés',
        'avatar_label' => 'Kerek profilkép használata a szögletes helyett',
        'avatar_comment' => 'Csak a felső menüben módosul a bélyegkép.',
        'topmenu_label' => 'Címkék elrejtése a felső menüben',
        'topmenu_comment' => 'Mindegyik menü stílusnál működik.',
        'sidebar_desc_label' => 'Leírások elrejtése az oldalsó menüben',
        'sidebar_desc_comment' => 'Csak a Beállítások aloldalain működik.',
        'sidebar_search_label' => 'Keresőmező elrejtése az oldalsó menüben',
        'sidebar_search_comment' => 'Csak a Beállítások aloldalain működik.',
        'tab_behavior' => 'Működés',
        'search_label' => 'Keresőmező automatikus aktiválása',
        'search_comment' => 'Elsőként a listáknál, másodsorban az oldalsó menüben.',
        'context_menu_label' => 'Gyorsmenü engedélyezése',
        'context_menu_comment' => 'A jobb egérgomb lenyomásával jelenik meg.',
        'keyboard_label' => 'Virtuális billentyűzet megjelenítése (béta)',
        'keyboard_comment' => 'Csak az egysoros beviteli mezőknél működik.'
    ],
    'trash' => [
        'title' => 'Felesleges fájlok',
        'description' => 'A nem használt fájlok és mappák törlése.',
        'permission' => 'Felesleges fájlok törlése',
        'type' => 'Típus',
        'path' => 'Elérés',
        'size' => 'Méret',
        'file' => 'Fájl',
        'folder' => 'Mappa',
        'database' => 'Adatbázis',
        'items' => 'Elem|Elem',
        'hint' => 'Miután frissítette a weboldalt, kattintson újra a Keresés gombra. Ha a honlap ideglenes fájlait szeretné törölni, adja hozzá a Vezérlőpulthoz az "Admin - Gyorsindítótár" widget-et. Kérjük <b>értékelje a bővítményt</b>, amennyiben segítette a munkáját:',
        'search' => 'Keresés',
        'success' => 'A beolvasás sikeresen befejeződött.',
        'no_items' => 'Gratulálunk, nem találtunk felesleges fájlt a weboldalon!',
        'remove_all' => 'Kiürítés',
        'delete' => 'Valóban törölni akarja a tételeket?',
        'remove' => 'A tételek sikeresen eltávolításra kerültek.'
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
        ],
        'cache' => [
            'title' => 'Admin - Gyorsindítótár',
            'label' => 'Gyorsindítótár',
            'clear' => 'Fájlok törlése'
        ],
        'permission' => 'Widgetek menedzselése a Vezérlőpulton'
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
    ]
];
