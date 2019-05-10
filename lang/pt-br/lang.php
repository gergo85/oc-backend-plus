<?php

return [
    'plugin' => [
        'name' => 'Backend Plus',
        'description' => 'Novos recursos e widgets úteis para o back-end.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'tab_display' => 'Exibir',
        'avatar_label' => 'Imagem de perfil arredondado em vez de cubo',
        'avatar_comment' => 'O avatar modifica somente no menu superior.',
        'topmenu_label' => 'Esconder o rótulo no menu superior',
        'topmenu_comment' => 'Funciona em todos os estilos do menu.',
        'sidebar_desc_label' => 'Esconder a descrição dos menus na barra lateral',
        'sidebar_desc_comment' => 'Funciona apenas em páginas do menu Configurações.',
        'sidebar_search_label' => 'Esconder o campo pesquisa na barra lateral',
        'sidebar_search_comment' => 'Funciona apenas em páginas do menu Configurações.',
        'tab_behavior' => 'Comportamento',
        'search_label' => 'Focalizar automaticamente o campo de pesquisa',
        'search_comment' => 'Em primeiro lugar nas listas, em segundo lugar na barra lateral.',
        'context_menu_label' => 'Exibir o menu de contexto',
        'context_menu_comment' => 'Clique direito para mostrar o menu rápido.',
        'keyboard_label' => 'Mostrar teclado virtual por formulários(beta)',
        'keyboard_comment' => 'Funciona apenas por campos simples.'
    ],
    'trash' => [
        'title' => 'Trash items',
        'description' => 'Excluir arquivos e pastas não utilizados.',
        'permission' => 'Gerenciar itens na lixeira',
        'type' => 'Tipo',
        'path' => 'Caminho',
        'size' => 'Tamanho',
        'file' => 'Arquivo',
        'folder' => 'Pasta',
        'database' => 'Banco de dados',
        'items' => 'Item|Itens',
        'hint' => 'Depois que você atualizou o núcleo do OctoberCMS, clique novamente no botão Pesquisar. Se você deseja excluir o cache de sua página, você precisa adicionar o widget "Backend - Cache" ao Dashboard. Por favor <b>avalie este plugin</b> se ele ajudou seu trabalho:',
        'search' => 'Pesquisar',
        'success' => 'A verificação foi concluída com êxito',
        'no_items' => 'Parabéns, sem arquivos não utilizados no site!',
        'remove_all' => 'Excluir tudo',
        'delete' => 'Deseja excluir esses itens?',
        'remove' => 'Removido com êxito esses itens.'
    ],
    'widgets' => [
        'system' => [
            'title' => 'Backend - Estado do sistema',
            'label' => 'Estado do sistema',
            'webpage' => 'Webpage',
            'updates' => 'Atualizações',
            'plugins' => 'Plugins',
            'themes' => 'Temas'
        ],
        'version' => [
            'title' => 'Backend - Versões',
            'label' => 'Versões',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Backend - Logs',
            'label' => 'Logs',
            'access' => 'Accesso',
            'event' => 'Evento',
            'request' => 'Requisição',
            'total' => 'Total'
        ],
        'admins' => [
            'title' => 'Backend - Administradores',
            'label' => 'Administradores',
            'users' => 'Usuários',
            'groups' => 'Grupos',
            'login' => 'Último login'
        ],
        'logins' => [
            'title' => 'Backend - Últimos logins',
            'label' => 'Últimos logins'
        ],
        'server' => [
            'title' => 'Backend - Informações do servidor',
            'label' => 'Informações do servidor',
            'host' => 'Host',
            'ip' => 'Endereço IP',
            'os' => 'Sistena operacional'
        ],
        'php' => [
            'title' => 'Backend - Configurações do PHP',
            'label' => 'Configurações do PHP',
            'upload_limit' => 'Limite de upload',
            'memory_limit' => 'Limite de memória',
            'timezone' => 'Fuso horário'
        ],
        'rss' => [
            'title' => 'Backend - Visualizador RSS',
            'label' => 'Visualizador RSS',
            'error' => 'O endereço URL está incorreto ou',
            'refresh' => 'atualizar página'
        ],
        'images' => [
            'title' => 'Backend - Imagens aleatórias',
            'label' => 'Imagens aleatórias',
            'error' => 'O campo deve conter apenas números.',
            'simple' => 'Simples',
            'slideshow' => 'Slideshow'
        ],
        'cache' => [
            'title' => 'Backend - Cache',
            'label' => 'Uso de cache',
            'clear' => 'Limpar cache'
        ],
        'permission' => 'Gerenciar widgets no painel'
    ],
    'properties' => [
        'webpage' => 'Exibir webpage',
        'updates' => 'Exibir atualizações',
        'plugins' => 'Exibir plugins',
        'themes' => 'Exibir temas',
        'cms' => 'Exibir versão do CMS',
        'php' => 'Exibir versão do PHP',
        'gd' => 'Exibir versão do GD',
        'access' => 'Exibir acesso',
        'event' => 'Exibir evento',
        'request' => 'Exibir requisição',
        'total' => 'Exibir total',
        'users' => 'Exibir usuários',
        'groups' => 'Exibir grupos',
        'login' => 'Exibir último login',
        'logins' => 'Exibir o número de logins',
        'url' => 'Exibir endereço URL',
        'ip' => 'Exibir endereço IP',
        'os' => 'Exibir sistema operacional',
        'upload_limit' => 'Exbir limite de upload',
        'memory_limit' => 'Exibir limite de memória',
        'timezone' => 'Exibir fuso-horário',
        'rss_title' => 'Url RSS',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Número de notícias',
        'date' => 'Exibir data',
        'description' => 'Exibir descrição',
        'category' => 'Categoria',
        'type' => 'Tipo',
        'number' => 'Imagens no slideshow',
        'width' => 'Largura (em pixel)',
        'height' => 'Altura (em pixel)',
        'text' => 'Texto'
    ],
    'category' => [
        'all' => 'Todas',
        'abstract' => 'Abstrato',
        'animals' => 'Animais',
        'business' => 'Negócios',
        'cats' => 'Gatos',
        'city' => 'Cidade',
        'food' => 'Comida',
        'nightlife' => 'Vida noturna',
        'fashion' => 'Fashion',
        'people' => 'Pessoas',
        'nature' => 'Natureza',
        'sports' => 'Esportes',
        'technics' => 'Técnicas',
        'transport' => 'Transport'
    ]
];
