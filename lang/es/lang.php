<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'Nuevas características y widgets para el Backend.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'search_label' => 'Hacer "focus" en el campo de búsqueda automáticamente.',
        'search_comment' => 'En primer lugar en las listas, en segundo lugar, en la barra lateral.',
        'avatar_label' => 'Imagen de perfil redondeado en lugar de un solo cubo.',
        'avatar_comment' => 'La avataro modifas nur en supera menuo.',
        'clearbutton_label' => 'Add the clear button to input fields.',
        'clearbutton_comment' => 'It works only by simple text fields.',
        'keyboard_label' => 'Mostrar el teclado virtual para introducir datos.',
        'keyboard_comment' => 'Sólo funciona con campos de texto simples.',
        'sidebar_desc_label' => 'Ocultar la descripción del menú en la barra lateral.',
        'sidebar_desc_comment' => 'Ocultar la descripción de los menús en la barra lateral.',
        'sidebar_search_label' => 'Ocultar el campo de búsqueda en la barra lateral.',
        'sidebar_search_comment' => 'Ocultar la descripción de los menús en la barra lateral.',
        'media_label' => 'Ocultar el enlace de los medios de comunicación en el menú superior.',
        'media_comment' => 'Todavía disponible, pero no muestra.',
        'themes_label' => 'Esconder el "Buscar nuevos temas" enlace.',
        'themes_comment' => 'Está en la página del tema Front-end.',
        'delete_plugin_label' => 'Eliminar la Demo plugin de Octubre.',
        'delete_plugin_comment' => 'All files will be removed permanently.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Backend - Estado del Sistema Plus',
            'label' => 'Estado del Sistema Plus',
            'webpage' => 'Página Web',
            'updates' => 'Actualizaciones',
            'plugins' => 'Plugins',
            'themes' => 'Temas'
        ],
        'version' => [
            'title' => 'Backend - Versiones',
            'label' => 'Versiones',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Backend - Logs',
            'label' => 'Logs',
            'access' => 'Accesos',
            'event' => 'Evento',
            'request' => 'Petición (Request)',
            'total' => 'Total'
        ],
        'admins' => [
            'title' => 'Backend - Administradores',
            'label' => 'Administradores',
            'users' => 'Usuarios',
            'groups' => 'Grupos',
            'login' => 'Último acceso'
        ],
        'logins' => [
            'title' => 'Backend - Últimos accesos',
            'label' => 'Últimos accesos'
        ],
        'server' => [
            'title' => 'Backend - Información del Servidor',
            'label' => 'Información del Servidor',
            'host' => 'Host',
            'ip' => 'Dirección IP',
            'os' => 'Sistema Operativo'
        ],
        'php' => [
            'title' => 'Backend - Configuración PHP',
            'label' => 'Configuración PHP',
            'upload_limit' => 'Upload límite',
            'memory_limit' => 'Memoria límite',
            'timezone' => 'Zona Horaria'
        ],
        'rss' => [
            'title' => 'Backend - Visor RSS',
            'label' => 'Visor RSS',
            'error' => 'La dirección URL es incorrecta o',
            'refresh' => 'Actualizar página'
        ],
        'images' => [
            'title' => 'Backend - Imágenes aleatorias',
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
