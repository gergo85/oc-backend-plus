<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'Nuevas características y widgets para el Backend.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'sidebar_description' => 'Ocultar la descripción del menú en la barra lateral.',
        'focus_searchfield' => 'Hacer "focus" en el campo de búsqueda automáticamente.',
        'virtual_keyboard' => 'Mostrar el teclado virtual para introducir datos.',
        'more_themes' => 'Esconder el "Buscar más temas..." enlace.',
        'themes_comment' => 'Está en la página del tema Front-end.',
        'comment' => 'Sólo funciona en las páginas de configuración.'
    ],
    'widgets' => [
        'system' => [
            'label' => 'Estado del Sistema Plus',
            'webpage' => 'Página Web',
            'updates' => 'Actualizaciones',
            'plugins' => 'Plugins',
            'themes' => 'Temas'
        ],
        'version' => [
            'label' => 'Versiones',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'label' => 'Logs',
            'access' => 'Accesos',
            'event' => 'Evento',
            'request' => 'Petición (Request)',
            'total' => 'Total'
        ],
        'admins' => [
            'label' => 'Administradores',
            'users' => 'Usuarios',
            'groups' => 'Grupos',
            'login' => 'Último acceso'
        ],
        'logins' => [
            'label' => 'Últimos accesos'
        ],
        'server' => [
            'label' => 'Información del Servidor',
            'host' => 'Host',
            'ip' => 'Dirección IP',
            'os' => 'Sistema Operativo'
        ],
        'php' => [
            'label' => 'Configuración PHP',
            'upload_limit' => 'Upload límite',
            'memory_limit' => 'Memoria límite',
            'timezone' => 'Zona Horaria'
        ],
        'rss' => [
            'label' => 'Visor RSS',
            'error' => 'La dirección URL es incorrecta o',
            'refresh' => 'Actualizar página'
        ],
        'images' => [
            'label' => 'Imágenes aleatorias',
            'error' => 'El campo solo puede contener números.',
            'simple' => 'Simple',
            'slideshow' => 'Slideshow'
        ]
    ],
    'properties' => [
        'webpage' => 'Mostrar página web',
        'updates' => 'Mostrar actualizaciones',
        'plugins' => 'Mostrar plugins',
        'themes' => 'Mostrar temas',
        'cms' => 'Mostrar versión CMS',
        'php' => 'Mostrar versión PHP',
        'gd' => 'Mostrar versión GD',
        'access' => 'Mostrar accesos',
        'event' => 'Mostrar evento',
        'request' => 'Mostrar petición (request)',
        'total' => 'Mostrar total',
        'users' => 'Mostrar usuarios',
        'groups' => 'Mostrar grupos',
        'login' => 'Mostrar últimos acceso',
        'logins' => 'Mostrar el número de accesos',
        'url' => 'Mostrar dirección URL',
        'ip' => 'Mostrar dirección IP',
        'os' => 'Mostrar Sistema Operativo',
        'upload_limit' => 'Mostrar upload límite',
        'memory_limit' => 'Mostrar memoria límite',
        'timezone' => 'Mostrar zona horaria',
        'rss_title' => 'RSS url',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Número de noticias',
        'date' => 'Mostrar fecha',
        'description' => 'Mostrar descripción',
        'category' => 'Categoría',
        'type' => 'Tipo',
        'number' => 'Imágenes en slideshow',
        'width' => 'Ancho (en pixel)',
        'height' => 'Altura (en pixel)',
        'text' => 'Texto'
    ],
    'category' => [
        'all' => 'Todo',
        'abstract' => 'Abstracto',
        'animals' => 'Animales',
        'business' => 'Negocios',
        'cats' => 'Gatos',
        'city' => 'Ciudad',
        'food' => 'Comida',
        'nightlife' => 'Vida nocturna',
        'fashion' => 'Moda',
        'people' => 'Gente',
        'nature' => 'Naturaleza',
        'sports' => 'Deportes',
        'technics' => 'Técnicos',
        'transport' => 'Transporte'
    ],
    'component' => [
        'image' => [
            'name' => 'Lorem ipsum image',
            'description' => ''
        ],
        'text' => [
            'name' => 'Lorem ipsum text',
            'description' => '',
            'length' => 'Longitud',
            'bit' => 'un poco',
            'some' => 'algo',
            'lots' => 'mucho'
        ]
    ]
];
