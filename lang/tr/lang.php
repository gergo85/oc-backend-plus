<?php

return [
    'plugin' => [
        'name' => 'Widget Modülü',
        'description' => 'Arkaplan için yeni özellikler ve widgetler.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'tab_display' => 'Ekran',
        'avatar_label' => 'Yuvarlak profil resmi yerine küp biri',
        'avatar_comment' => 'Avatar sadece üst menüde değiştirir.',
        'topmenu_label' => 'Üst menüde etiketi gizleyin',
        'topmenu_comment' => 'Tüm menü stili ile çalışır.',
        'sidebar_desc_label' => 'Sol kısayol bloğunda açıklamaları gizle',
        'sidebar_desc_comment' => 'Kenar çubuğunda menüler açıklamasını gizle.',
        'sidebar_search_label' => 'Kenar çubuğunda arama alanını gizleyin',
        'sidebar_search_comment' => 'Kenar çubuğunda menüler açıklamasını gizle.',
        'tab_behavior' => 'Davranış',
        'search_label' => 'Otomatik olarak arama alanına odaklan',
        'search_comment' => 'Öncelikle ikinci kenar çubuğundaki listeleri içinde.',
        'context_menu_label' => 'Bağlam menüsünü etkinleştir',
        'context_menu_comment' => 'Hızlı menüyü göstermek için sağ tıklayın.',
        'keyboard_label' => 'Sanal klavyeyi aktifleştir (beta)',
        'keyboard_comment' => 'Sadece basit metin alanları ile çalışır.'
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
            'title' => 'Backend - Sistem Durumu',
            'label' => 'Sistem Durumu',
            'webpage' => 'Web site',
            'updates' => 'Güncellemeler',
            'plugins' => 'Eklentiler',
            'themes' => 'Temalar'
        ],
        'version' => [
            'title' => 'Backend - Versiyonlar',
            'label' => 'Versiyonlar',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'title' => 'Backend - Olay Kayıtları',
            'label' => 'Olay Kayıtları',
            'access' => 'Erişim',
            'event' => 'Olay',
            'request' => 'İstek',
            'total' => 'Toplam'
        ],
        'admins' => [
            'title' => 'Backend - Yöneticiler',
            'label' => 'Yöneticiler',
            'users' => 'Kullanıcılar',
            'groups' => 'Gruplar',
            'login' => 'Son giriş'
        ],
        'logins' => [
            'title' => 'Backend - Son girişler',
            'label' => 'Son girişler'
        ],
        'server' => [
            'title' => 'Backend - Server bilgisi',
            'label' => 'Server bilgisi',
            'host' => 'Sunucu',
            'ip' => 'IP adresi',
            'os' => 'İşletim sistemi'
        ],
        'php' => [
            'title' => 'Backend - PHP ayarları',
            'label' => 'PHP ayarları',
            'upload_limit' => 'Yükleme limiti',
            'memory_limit' => 'Hafıza limiti',
            'timezone' => 'Zaman dilimi'
        ],
        'rss' => [
            'title' => 'Backend - RSS görüntüleyici',
            'label' => 'RSS görüntüleyici',
            'error' => 'URL adresi yanlış veya',
            'refresh' => 'sayfayı yenile'
        ],
        'images' => [
            'title' => 'Backend - Rastgele Resim',
            'label' => 'Rastgele Resim',
            'error' => 'Bu alana sadece sayı girebilirsiniz.',
            'simple' => 'Basit',
            'slideshow' => 'Slayt gösterisi'
        ],
        'cache' => [
            'title' => 'Backend - Önbellek',
            'label' => 'Önbellek',
            'clear' => 'Önbelleği temizle'
        ],
        'permission' => "Gösterge Tablosunda widget'ları yönet"
    ],
    'properties' => [
        'webpage' => 'Websayfasını Göster',
        'updates' => 'Güncellemeleri Göster',
        'plugins' => 'Eklentileri Göster',
        'themes' => 'Temaları Göster',
        'cms' => 'CSMS Versiyonunu Göster',
        'php' => 'PHP Versiyonunu Göster',
        'gd' => 'GD Versiyonunu Göster',
        'access' => 'Girişleri göster',
        'event' => 'Olayı göster',
        'request' => 'İsteği göster',
        'total' => 'Toplamı göster',
        'users' => 'Kullanıcıları göster',
        'groups' => 'Grupları göster',
        'login' => 'Son girişi göster',
        'logins' => 'Giriş sayısını göster',
        'url' => 'URL adresini göster',
        'ip' => 'IP Adresini göster',
        'os' => 'İşletim sistemini göster',
        'upload_limit' => 'Dosya yükleme boyutu limitini göster',
        'memory_limit' => 'Hafıza limitini göster',
        'timezone' => 'Zaman dilimini göster',
        'rss_title' => 'RSS Adresi',
        'rss_url' => 'http://feeds.bbci.co.uk/news/rss.xml',
        'news' => 'Haber sayısı',
        'date' => 'Tarihi göster',
        'description' => 'Tanımı göster',
        'category' => 'Kategori',
        'type' => 'Tip',
        'number' => 'Slayt gösterisi Görüntüler',
        'width' => 'Genişlik (piksel)',
        'height' => 'Yükseklik (piksel)',
        'text' => 'Metin'
    ],
    'category' => [
        'all' => 'Tümü',
        'abstract' => 'Soyut Resimler',
        'animals' => 'Hayvanlar',
        'business' => 'İş',
        'cats' => 'Kediler',
        'city' => 'Şehir Yaşamı',
        'food' => 'Yiyecek &amp; Gıda',
        'nightlife' => 'Gece Yaşamı',
        'fashion' => 'Moda',
        'people' => 'İnsanlar',
        'nature' => 'Doğa',
        'sports' => 'Spor',
        'technics' => 'Teknik',
        'transport' => 'Taşımacılık'
    ]
];
