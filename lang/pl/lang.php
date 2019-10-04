<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'Nowe funkcje i widżety dla backendu.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'tab_display' => 'Wyświetlanie',
        'avatar_label' => 'Okrągły obrazek profilu zamiast kwadratowego',
        'avatar_comment' => 'Awatar zmieni się tylko w górnym menu.',
        'topmenu_label' => 'Ukryj etykiety w górnym menu',
        'topmenu_comment' => 'Działa ze wszystkimi stylami menu.',
        'sidebar_desc_label' => 'Ukryj opisy menu w panelu bocznym',
        'sidebar_desc_comment' => 'Działa tylko na strony w menu Ustawień.',
        'sidebar_search_label' => 'Ukryj pole wyszukiwania w panelu bocznym',
        'sidebar_search_comment' => 'Działa tylko na strony w menu Ustawień.',
        'tab_behavior' => 'Zachowanie',
        'search_label' => 'Ustaw automatyczny fokus na pole wyszukiwania',
        'search_comment' => 'W pierwszej kolejności w listach, w drugiej w panelu bocznym.',
        'context_menu_label' => 'Włącz menu kontekstowe',
        'context_menu_comment' => 'Kliknij prawym przyciskiem myszy, aby otworzyć menu szybkich akcji.',
        'keyboard_label' => 'Pokaż wirtualną klawiaturę dla formularzy (beta)',
        'keyboard_comment' => 'Działa tylko z prostymi polami.'
    ],
    'trash' => [
        'title' => 'Kosz',
        'description' => 'Usuń nieużywane pliki i foldery.',
        'permission' => 'Zarządzaj elementami w koszu',
        'type' => 'Typ',
        'path' => 'Ścieżka',
        'size' => 'Rozmiar',
        'file' => 'Plik',
        'folder' => 'Folder',
        'database' => 'Baza danych',
        'items' => ' Elementów',
        'hint' => 'Po zaktualizowaniu OctoberCMS ponownie kliknij przycisk Szukaj. Jeśli chcesz usunąć pliki pamięci podręcznej strony musisz dodać widget "Backend - Pamięć podręczna" do kokpitu. <b>Oceń tę wtyczkę</b>, jeśli pomogła Ci w pracy',
        'search' => 'Szukaj',
        'success' => 'Skanowanie zostało zakończone.',
        'no_items' => 'Gratulacje, na stronie nie ma nieużywanych plików!',
        'remove_all' => 'Usuń wszystko',
        'delete' => 'Czy chcesz usunąć wszystkie elementy?',
        'remove' => 'Pomyślnie usunięto wybrane elementy.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Backend - Status systemu plus',
            'label' => 'Status systemu plus',
            'webpage' => 'Strona',
            'updates' => 'Aktualizacje',
            'plugins' => 'Wtyczki',
            'themes' => 'Motywy'
        ],
        'version' => [
            'title' => 'Backend - Wersje',
            'label' => 'Wersje',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Backend - Logi',
            'label' => 'Logi',
            'access' => 'Logowania',
            'event' => 'Zdarzenia',
            'request' => 'Żądania',
            'total' => 'Wszystkie'
        ],
        'admins' => [
            'title' => 'Backend - Administratorzy',
            'label' => 'Administratorzy',
            'users' => 'Użytkownicy',
            'groups' => 'Grupy',
            'login' => 'Ostatnie logowanie'
        ],
        'logins' => [
            'title' => 'Backend - Ostatnie logowania',
            'label' => 'Ostatnie logowania'
        ],
        'server' => [
            'title' => 'Backend - Informacje o serwerze',
            'label' => 'Informacje o serwerze',
            'host' => 'Host',
            'ip' => 'Adres IP',
            'os' => 'System Operacyjny'
        ],
        'php' => [
            'title' => 'Backend - Ustawienia PHP',
            'label' => 'Ustawienia PHP',
            'upload_limit' => 'Limit przesyłania',
            'memory_limit' => 'Limit pamięci',
            'timezone' => 'Strefa czasowa'
        ],
        'rss' => [
            'title' => 'Backend - Przeglądarka RSS',
            'label' => 'Przeglądarka RSS',
            'error' => 'Adres URL jest nie prawidłowy lub',
            'refresh' => 'odśwież stronę'
        ],
        'images' => [
            'title' => 'Backend - Losowe obrazy',
            'label' => 'Losowe obrazy',
            'error' => 'Pole może zawierać tylko liczby.',
            'simple' => 'Prosty',
            'slideshow' => 'Pokaz slajdów'
        ],
        'cache' => [
            'title' => 'Backend - Pamięć podręczna',
            'label' => 'Użycie pamięci podręcznej',
            'clear' => 'Opróżnij pamięć podręczną'
        ],
        'permission' => 'Zarządzaj widżetami w kokpicie'
    ],
    'properties' => [
        'webpage' => 'Pokaż status strony',
        'updates' => 'Pokaż aktualizacje',
        'plugins' => 'Pokaż wtyczki',
        'themes' => 'Pokaż motywy',
        'cms' => 'Pokaż wersję CMS',
        'php' => 'Pokaż wersję PHP',
        'gd' => 'Pokaż wersję GD',
        'access' => 'Pokaż logowania',
        'event' => 'Pokaż zdarzenia',
        'request' => 'Pokaż żądania',
        'total' => 'Pokaż wszystkie',
        'users' => 'Pokaż użytkowników',
        'groups' => 'Pokaż grupy',
        'login' => 'Pokaż ostatnie logowanie',
        'logins' => 'Pokaż ilość logowań',
        'url' => 'Pokaż adres URL',
        'ip' => 'Pokaż adres IP',
        'os' => 'Pokaż system operacyjny',
        'upload_limit' => 'Pokaż limit przesyłania',
        'memory_limit' => 'Pokaż limit pamięci',
        'timezone' => 'Pokaż strefę czasową',
        'rss_title' => 'Kanał RSS',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Liczba newsów',
        'date' => 'Pokaż datę',
        'description' => 'Pokaż opis',
        'category' => 'Katregoria',
        'type' => 'Typ',
        'number' => 'Obrazy w pokazie slajdów',
        'width' => 'Szerokośc (w pikselach)',
        'height' => 'Wysokość (w pikselach)',
        'text' => 'Tekst'
    ],
    'category' => [
        'all' => 'Wszystkie',
        'abstract' => 'Abstrakcja',
        'animals' => 'Zwierzęta',
        'business' => 'Biznes',
        'cats' => 'Koty',
        'city' => 'Miasto',
        'food' => 'Jedzenie',
        'nightlife' => 'Nocne życie',
        'fashion' => 'Moda',
        'people' => 'Ludzie',
        'nature' => 'Natura',
        'sports' => 'Sport',
        'technics' => 'Technika',
        'transport' => 'Transport'
    ]
];
