<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'Nuevas características y widgets para el Backend.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'tab_display' => 'Monitor',
        'avatar_label' => 'Imagen de perfil redondeado en lugar de un solo cubo',
        'avatar_comment' => 'La avataro modifas nur en supera menuo.',
        'topmenu_label' => 'Ocultar la etiqueta en el menú superior',
        'topmenu_comment' => 'Funciona con todo el estilo de menú.',
        'sidebar_desc_label' => 'Ocultar la descripción del menú en la barra lateral',
        'sidebar_desc_comment' => 'Ocultar la descripción de los menús en la barra lateral.',
        'sidebar_search_label' => 'Ocultar el campo de búsqueda en la barra lateral',
        'sidebar_search_comment' => 'Ocultar la descripción de los menús en la barra lateral.',
        'tab_behavior' => 'Comportamiento',
        'search_label' => 'Hacer "focus" en el campo de búsqueda automáticamente',
        'search_comment' => 'En primer lugar en las listas, en segundo lugar, en la barra lateral.',
        'context_menu_label' => 'Habilitar el menú contextual',
        'context_menu_comment' => 'Haga clic con el botón derecho del ratón para mostrar el menú.',
        'keyboard_label' => 'Mostrar el teclado virtual para introducir datos (beta)',
        'keyboard_comment' => 'Sólo funciona con campos de texto simples.'
    ],
    'trash' => [
        'title' => 'Trash items',
        'description' => 'Delete the unused files and folders.',
        'permission' => 'Manage the trash items',
        'type' => 'Type',
        'path' => 'Path',
        'size' => 'Size',
        'file' => 'File',
        'folder' => 'Folder',
        'database' => 'Database',
        'items' => 'Item|Items',
        'hint' => 'After that you updated the OctoberCMS core, you click on the Search button again. If you want to delete the cache of your webpage, you need to add the "Backend - Cache" widget to the Dashboard. Please <b>rate this plugin</b> if it helped your work:',
        'search' => 'Search',
        'success' => 'The scan was successfully completed.',
        'no_items' => 'Congratulations, no unused files on the website!',
        'remove_all' => 'Delete all',
        'delete' => 'Do you want to delete this items?',
        'remove' => 'Successfully removed those items.'
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
        ],
        'cache' => [
            'title' => 'Backend - Cache',
            'label' => 'Cache',
            'clear' => 'Limpiar cache'
        ],
        'permission' => 'Administrar widgets en el panel de control'
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
    ]
];
