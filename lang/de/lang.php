<?php

return [
    'plugin' => [
        'name' => 'Backend-plus',
        'description' => 'Neue Funktionen und Widgets für Backend.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'sidebar_description' => 'Blenden Sie das Menü Beschreibung in der Seitenleiste.',
        'focus_searchfield' => 'Fokus auf das Suchfeld automatisch.',
        'virtual_keyboard' => 'Lassen Sie sich die virtuelle Tastatur von Eingabefeldern.',
        'more_themes' => 'Blenden Sie die "Weitere Themen ..." Link.',
        'themes_comment' => 'Das Hotel liegt am Frontend-Themenseite.',
        'comment' => 'Es funktioniert nur auf Seiten auf.'
    ],
    'widgets' => [
        'system' => [
            'label' => 'Systemstatus Und',
            'webpage' => 'Webseite',
            'updates' => 'Aktuelles',
            'plugins' => 'Plugin',
            'themes' => 'Themes'
        ],
        'version' => [
            'label' => 'Versionen',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'label' => 'Logs',
            'access' => 'Zugriff',
            'event' => 'Ereignis',
            'request' => 'Anforderung',
            'total' => 'Gesamt'
        ],
        'admins' => [
            'label' => 'Administratoren',
            'users' => 'Benutzer',
            'groups' => 'Gruppen',
            'login' => 'Letzter Login'
        ],
        'logins' => [
            'label' => 'Letzte Anmeldungen'
        ],
        'server' => [
            'label' => 'Server info',
            'host' => 'Gastgeber',
            'ip' => 'IP-Adresse',
            'os' => 'Betriebssystem'
        ],
        'php' => [
            'label' => 'PHP settings',
            'upload_limit' => 'Grenze hochladen',
            'memory_limit' => 'Speichergrenze',
            'timezone' => 'Timezone'
        ],
        'rss' => [
            'label' => 'RSS-Viewer',
            'error' => 'Die URL-Adresse ist nicht korrekt oder',
            'refresh' => 'refresh Seite'
        ],
        'images' => [
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
