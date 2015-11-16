<?php

return [
    'plugin' => [
        'name' => 'Backend-plus',
        'description' => 'Neue Funktionen und Widgets für Backend.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'search_label' => 'Fokus auf das Suchfeld automatisch.',
        'search_comment' => 'Zum einen in Listen, zweitens in der Seitenleiste.',
        'avatar_label' => 'Abgerundete Profilbild statt eines Würfels.',
        'avatar_comment' => 'Der Avatar ändert nur in Top-Menü.',
        'clearbutton_label' => 'Add the clear button to input fields.',
        'clearbutton_comment' => 'It works only by simple text fields.',
        'keyboard_label' => 'Lassen Sie sich die virtuelle Tastatur von Formen.',
        'keyboard_comment' => 'Es funktioniert nur mit einfachen Textfelder.',
        'sidebar_desc_label' => 'Blenden Sie das Menü Beschreibung in der Seitenleiste.',
        'sidebar_desc_comment' => 'Blenden Sie die Beschreibung der Menüs in der Seitenleiste.',
        'sidebar_search_label' => 'Blenden Sie das Suchfeld in der Seitenleiste.',
        'sidebar_search_comment' => 'Blenden Sie die Beschreibung der Menüs in der Seitenleiste.',
        'media_label' => 'Ausblenden der Media Link in Top-Menü.',
        'media_comment' => 'Es ist immer noch vorhanden, aber es nicht zu zeigen.',
        'themes_label' => 'Blenden Sie die "Weitere Themen" Link.',
        'themes_comment' => 'Das Hotel liegt am Frontend-Themenseite.',
        'delete_plugin_label' => 'Löschen Sie die Oktober-Demo Plugin.',
        'delete_plugin_comment' => 'All files will be removed permanently.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Backend - Systemstatus Und',
            'label' => 'Systemstatus Und',
            'webpage' => 'Webseite',
            'updates' => 'Aktuelles',
            'plugins' => 'Plugin',
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
            'login' => 'Letzter Login'
        ],
        'logins' => [
            'title' => 'Backend - Letzte Anmeldungen',
            'label' => 'Letzte Anmeldungen'
        ],
        'server' => [
            'title' => 'Backend - Server info',
            'label' => 'Server info',
            'host' => 'Gastgeber',
            'ip' => 'IP-Adresse',
            'os' => 'Betriebssystem'
        ],
        'php' => [
            'title' => 'Backend - PHP settings',
            'label' => 'PHP settings',
            'upload_limit' => 'Grenze hochladen',
            'memory_limit' => 'Speichergrenze',
            'timezone' => 'Timezone'
        ],
        'rss' => [
            'title' => 'Backend - RSS-Viewer',
            'label' => 'RSS-Viewer',
            'error' => 'Die URL-Adresse ist nicht korrekt oder',
            'refresh' => 'refresh Seite'
        ],
        'images' => [
            'title' => 'Backend - Zufallsbilder',
            'label' => 'Zufallsbilder',
            'error' => 'Das Feld kann nur Zahlen.',
            'simple' => 'Einfach',
            'slideshow' => 'Diashow'
        ]
    ],
    'properties' => [
        'webpage' => 'Webseite anzeigen',
        'updates' => 'Updates anzeigen',
        'plugins' => 'Plugin anzeigen',
        'themes' => 'Themen anzeigen',
        'cms' => 'Zeigen CMS Version',
        'php' => 'Zeige PHP-Version',
        'gd' => 'Zeige GD Version',
        'access' => 'Zugang anzeigen',
        'event' => 'Veranstaltung anzeigen',
        'request' => 'Anfrage anzeigen',
        'total' => 'gesamt Zeige',
        'users' => 'Benutzer anzeigen',
        'groups' => 'Gruppen anzeigen',
        'login' => 'Zeigen Sie der letzten Anmeldung',
        'logins' => 'Lassen Sie sich die Anzahl der Logins',
        'url' => 'URL-Adresse anzeigen',
        'ip' => 'IP-Adresse anzeigen',
        'os' => 'Betriebssystem anzeigen',
        'upload_limit' => 'Upload-Limit anzeigen',
        'memory_limit' => 'Speicher anzeigen Grenze',
        'timezone' => 'Zeitzone anzeigen',
        'rss_title' => 'RSS url',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Anzahl der Nachrichten',
        'date' => 'Tag anzeigen',
        'description' => 'Beschreibung anzeigen',
        'category' => 'Kategorie',
        'type' => 'Art',
        'number' => 'Bilder im Diashow',
        'width' => 'Breite (in Pixel)',
        'height' => 'Höhe (in Pixel)',
        'text' => 'Text'
    ],
    'category' => [
        'all' => 'Alle',
        'abstract' => 'Abstrakt',
        'animals' => 'Tiere',
        'business' => 'Unternehmen',
        'cats' => 'Katze',
        'city' => 'City',
        'food' => 'Lebensmittel',
        'nightlife' => 'Nachtleben',
        'fashion' => 'Mode',
        'people' => 'Menschen',
        'nature' => 'Natur',
        'sports' => 'Sport',
        'technics' => 'Technics',
        'transport' => 'Verkehr'
    ],
    'component' => [
        'image' => [
            'name' => 'Lorem ipsum bild',
            'description' => ''
        ],
        'text' => [
            'name' => 'Lorem ipsum text',
            'description' => '',
            'length' => 'Länge',
            'bit' => 'ein bisschen',
            'some' => 'einige',
            'lots' => 'viele'
        ]
    ]
];
