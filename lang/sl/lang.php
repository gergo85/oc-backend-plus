<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'Nove uporabne funkcije in pripomočki za zaledni sistem.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'tab_display' => 'Prikaz',
        'avatar_label' => 'Zaobljena profilna slika namesto kvadratne',
        'avatar_comment' => 'Avatar se spreminja le v vrhnjem meniju.',
        'topmenu_label' => 'Skrij oznako v vrhnjem meniju',
        'topmenu_comment' => 'Deluje z vsemi slogi menija.',
        'sidebar_desc_label' => 'Skrij opise menijev v stranskem stolpcu',
        'sidebar_desc_comment' => 'Deluje samo na straneh menija Nastavitve.',
        'sidebar_search_label' => 'Skrij iskalno polje v stranskem stolpcu',
        'sidebar_search_comment' => 'Deluje samo na straneh menija Nastavitve.',
        'tab_behavior' => 'Vedenje',
        'search_label' => 'Fokus avtomatsko v iskalnem polju',
        'search_comment' => 'Prvič v seznamih, potem v stranskem stolpcu.',
        'context_menu_label' => 'Enable the context menu',
        'context_menu_comment' => 'Desni klik za prikaz hitrega menija.',
        'keyboard_label' => 'Prikaži navidezno tipkovnico po obrazcih (beta)',
        'keyboard_comment' => 'Deluje samo s preprostimi vnosnimi polji.'
    ],
    'trash' => [
        'title' => 'Smeti',
        'description' => 'Izbriši neuporabljane datoteke in mape.',
        'permission' => 'Upravljaj smeti',
        'type' => 'Tip',
        'path' => 'Pot',
        'size' => 'Velikost',
        'file' => 'Datoteka',
        'folder' => 'Mapa',
        'database' => 'Podatkovna baza',
        'items' => 'Element|Elementi',
        'hint' => 'Po nadgradnji OctoberCMS jedra ponovno kliknite gumb za iskanje. Če želite izbrisati predpomnilnik vašega spletnega mesta, morate dodati "Backend - Cache" pripomoček na nadzorno ploščo. Prosim, <b>ocenite ta vtičnik</b>, če vam je pomagal pri delu:',
        'search' => 'Išči',
        'success' => 'Pregled je bil uspešno končan.',
        'no_items' => 'Čestitamo, na spletnem mestu ni neuporabljanih datotek!',
        'remove_all' => 'Izbriši vse',
        'delete' => 'Želite izbrisati te elemente?',
        'remove' => 'Elementi so bili uspešno izbrisani.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Backend - System status plus',
            'label' => 'Sistem status plus',
            'webpage' => 'Spletno mesto',
            'updates' => 'Posodobitve',
            'plugins' => 'Vtičniki',
            'themes' => 'Teme'
        ],
        'version' => [
            'title' => 'Backend - Versions',
            'label' => 'Verzije',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Backend - Logs',
            'label' => 'Dnevniki',
            'access' => 'Dostop',
            'event' => 'Dogodek',
            'request' => 'Zahteva',
            'total' => 'Skupno'
        ],
        'admins' => [
            'title' => 'Backend - Administrators',
            'label' => 'Administratorji',
            'users' => 'Uporabniki',
            'groups' => 'Skupine',
            'login' => 'Zadnja prijava'
        ],
        'logins' => [
            'title' => 'Backend - Last logins',
            'label' => 'Zadnje prijave'
        ],
        'server' => [
            'title' => 'Backend - Server info',
            'label' => 'Informacije o strežniku',
            'host' => 'Gostitelj',
            'ip' => 'IP naslov',
            'os' => 'Operacijski sistem'
        ],
        'php' => [
            'title' => 'Backend - PHP settings',
            'label' => 'PHP nastavitve',
            'upload_limit' => 'Omejitve nalaganja',
            'memory_limit' => 'Omejitve spomina',
            'timezone' => 'Časovni pas'
        ],
        'rss' => [
            'title' => 'Backend - RSS viewer',
            'label' => 'RSS pregledovalnik',
            'error' => 'URL naslov je napačen ali',
            'refresh' => 'osveži stran'
        ],
        'images' => [
            'title' => 'Backend - Random images',
            'label' => 'Naključne slike',
            'error' => 'To polje lahko vsebuje le številke.',
            'simple' => 'Enostavno',
            'slideshow' => 'Projekcija slik'
        ],
        'cache' => [
            'title' => 'Backend - Cache',
            'label' => 'Uporaba predpomnilnika',
            'clear' => 'Počisti predpomnilnik'
        ],
        'permission' => 'Upravljanje pripomočkov na nadzorni plošči'
    ],
    'properties' => [
        'webpage' => 'Prikaži spletno mesto',
        'updates' => 'Prikaži posodobitve',
        'plugins' => 'Prikaži vtičnike',
        'themes' => 'Prikaži teme',
        'cms' => 'Prikaži verzijo CMS-a',
        'php' => 'Prikaži verzijo PHP-ja',
        'gd' => 'Prikaži verzijo GD-ja',
        'access' => 'Prikaži dostop',
        'event' => 'Prikaži dogodek',
        'request' => 'Prikaži zahtevo',
        'total' => 'Prikaži skupno',
        'users' => 'Prikaži uporabnike',
        'groups' => 'Prikaži skupine',
        'login' => 'Prikaži zadnjo prijavo',
        'logins' => 'Prikaži število prijav',
        'url' => 'Prikaži URL naslov',
        'ip' => 'Prikaži IP naslov',
        'os' => 'Prikaži operacijski sistem',
        'upload_limit' => 'Prikaži omejitev nalaganja',
        'memory_limit' => 'Prikaži omejitev spomina',
        'timezone' => 'Prikaži časovni pas',
        'rss_title' => 'RSS url',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Število novic',
        'date' => 'Prikaži datum',
        'description' => 'Prikaži opis',
        'category' => 'Kategorija',
        'type' => 'Tip',
        'number' => 'Slike v projekciji',
        'width' => 'Širina (v točkah)',
        'height' => 'Višina (v točkah)',
        'text' => 'Besedilo'
    ],
    'category' => [
        'all' => 'Vse',
        'abstract' => 'Povzetek',
        'animals' => 'Živali',
        'business' => 'Posel',
        'cats' => 'Mačke',
        'city' => 'Mesto',
        'food' => 'Hrana',
        'nightlife' => 'Nočno življenje',
        'fashion' => 'Moda',
        'people' => 'Ljudje',
        'nature' => 'Narava',
        'sports' => 'Šport',
        'technics' => 'Tehnika',
        'transport' => 'Transport'
    ]
];
