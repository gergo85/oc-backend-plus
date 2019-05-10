<?php

return [
    'plugin' => [
        'name' => 'Backend-plus',
        'description' => 'Neue Funktionen und Widgets für das Backend.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'tab_display' => 'Anzeigen',
        'avatar_label' => 'Zeige abgerundetes Profilbild anstelle eines quadratischen',
        'avatar_comment' => 'Der Avatar ändert nur im Top-Menü.',
        'topmenu_label' => 'Das Label im Top-Menü ausblenden',
        'topmenu_comment' => 'Funktioniert mit allen Menüstilen.',
        'sidebar_desc_label' => 'Verstecke die Menübeschreibung in der Sidebar',
        'sidebar_desc_comment' => 'Beinflusst nur die Seite «Einstellungen».',
        'sidebar_search_label' => 'Verstecke das Suchfeld in der Sidebar',
        'sidebar_search_comment' => 'Beinflusst nur die Seite «Einstellungen».',
        'tab_behavior' => 'Verhalten',
        'search_label' => 'Fokusiere das Suchfeld automatisch',
        'search_comment' => 'In Listen oder in der Seitenleiste.',
        'context_menu_label' => 'Kontextmenü aktivieren',
        'context_menu_comment' => 'Ein Rechtsklickt zeigt das Menü an.',
        'keyboard_label' => 'Virtuelles Keyboard in Formularen anzeigen (beta)',
        'keyboard_comment' => 'Funktioniert nur mit einfachen Textfeldern.'
    ],
    'trash' => [
        'title' => 'Elemente löschen',
        'description' => 'Lösche ungenutzte Dateienn und Ordner.',
        'permission' => 'Gelöschte Elemente verwalten',
        'type' => 'Typ',
        'path' => 'Pfad',
        'size' => 'Grösse',
        'file' => 'Datei',
        'folder' => 'Ordner',
        'database' => 'Datenbank',
        'items' => 'Datei|Dateien',
        'hint' => 'Nach einem Update des CMS muss erneut auf «Suchen» geklickt werden. Wenn du den Website-Cache leeren möchtest musst du das Widget "Backend - Cache" auf das Dashboard hinzufügen. Bitte <b>bewerte diese Plugin</b> wenn es dir deine Arbeit erleichtert:',
        'search' => 'Suchen',
        'success' => 'Scan erfolgreich abgeschlossen',
        'no_items' => 'Gratuliation, es gibt keine ungenutzten Dateien und Ordner!',
        'remove_all' => 'Alle löschen',
        'delete' => 'Möchtest Du die Elemente wirklich löschen?',
        'remove' => 'Elemente erfolgreich gelöscht.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Backend - Systemstatus Plus',
            'label' => 'Systemstatus Plus',
            'webpage' => 'Webpage',
            'updates' => 'Updates',
            'plugins' => 'Plugins',
            'themes' => 'Themes'
        ],
        'version' => [
            'title' => 'Backend - Versionen',
            'label' => 'Versionen',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Backend - Logs',
            'label' => 'Logs',
            'access' => 'Zugriff',
            'event' => 'Ereignis',
            'request' => 'Anforderung',
            'total' => 'Gesamt'
        ],
        'admins' => [
            'title' => 'Backend - Administratoren',
            'label' => 'Administratoren',
            'users' => 'Benutzer',
            'groups' => 'Gruppen',
            'login' => 'Letztes Login'
        ],
        'logins' => [
            'title' => 'Backend - Letzte Anmeldungen',
            'label' => 'Letzte Anmeldungen'
        ],
        'server' => [
            'title' => 'Backend - Serverinfo',
            'label' => 'Serverinfo',
            'host' => 'Host',
            'ip' => 'IP-Adresse',
            'os' => 'Betriebssystem'
        ],
        'php' => [
            'title' => 'Backend - PHP-Einstellungen',
            'label' => 'PHP-Einstellungen',
            'upload_limit' => 'Upload-Limit',
            'memory_limit' => 'Memory-Limit',
            'timezone' => 'Zeitzone'
        ],
        'rss' => [
            'title' => 'Backend - RSS-Viewer',
            'label' => 'RSS-Viewer',
            'error' => 'Die URL ist ungültig',
            'refresh' => 'Seite neu laden'
        ],
        'images' => [
            'title' => 'Backend - Zufallsbilder',
            'label' => 'Zufallsbilder',
            'error' => 'Nur Zahlen sind erlaubt.',
            'simple' => 'Einfach',
            'slideshow' => 'Diashow'
        ],
        'cache' => [
            'title' => 'Backend - Cache',
            'label' => 'Cachegrösse',
            'clear' => 'Cache leeren'
        ],
        'permission' => 'Widgets im Dashboard verwalten'
    ],
    'properties' => [
        'webpage' => 'Webseite anzeigen',
        'updates' => 'Updates anzeigen',
        'plugins' => 'Plugins anzeigen',
        'themes' => 'Themes anzeigen',
        'cms' => 'CMS Version anzeigen',
        'php' => 'PHP-Version anzeigen',
        'gd' => 'GD-Version anzeigen',
        'access' => 'Zugang anzeigen',
        'event' => 'Ereignis anzeigen',
        'request' => 'Anfrage anzeigen',
        'total' => 'Total anzeigen',
        'users' => 'Benutzer anzeigen',
        'groups' => 'Gruppen anzeigen',
        'login' => 'Letzte Anmeldung anzeigen',
        'logins' => 'Anzahl Logins anzeigen',
        'url' => 'URL anzeigen',
        'ip' => 'IP-Adresse anzeigen',
        'os' => 'Betriebssystem anzeigen',
        'upload_limit' => 'Upload-Limit anzeigen',
        'memory_limit' => 'Memory-Limit anzeigen',
        'timezone' => 'Zeitzone anzeigen',
        'rss_title' => 'RSS url',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Anzahl der Nachrichten',
        'date' => 'Tag anzeigen',
        'description' => 'Beschreibung anzeigen',
        'category' => 'Kategorie',
        'type' => 'Art',
        'number' => 'Bilder in Diashow',
        'width' => 'Breite (in Pixel)',
        'height' => 'Höhe (in Pixel)',
        'text' => 'Text'
    ],
    'category' => [
        'all' => 'Alle',
        'abstract' => 'Abstrakt',
        'animals' => 'Tiere',
        'business' => 'Business',
        'cats' => 'Katzen',
        'city' => 'City',
        'food' => 'Lebensmittel',
        'nightlife' => 'Nachtleben',
        'fashion' => 'Mode',
        'people' => 'Menschen',
        'nature' => 'Natur',
        'sports' => 'Sport',
        'technics' => 'Technik',
        'transport' => 'Verkehr'
    ]
];
