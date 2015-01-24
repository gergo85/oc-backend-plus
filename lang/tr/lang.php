<?php

return [
    'plugin' => [
        'name' => 'Widget Modülü',
        'description' => 'Arkaplan için yeni özellikler ve widgetler.',
        'author' => 'Gergő Szabó'
    ],
    'settings' => [
        'sidebar_description' => 'Sol kısayol bloğunda açıklamaları gizle.',
        'focus_searchfield' => 'Otomatik olarak arama alanına odaklan.',
        'virtual_keyboard' => 'Sanal klavyeyi aktifleştir.',
        'more_themes' => 'Hide the "Find more themes..." link.',
        'themes_comment' => 'Located on Front-end theme page.',
        'comment' => 'Sadece Ayarlar sayfalarında çalışır.'
    ],
    'widgets' => [
        'system' => [
            'label' => 'Sistem Durumu',
            'webpage' => 'Web site',
            'updates' => 'Güncellemeler',
            'plugins' => 'Eklentiler',
            'themes' => 'Temalar'
        ],
        'version' => [
            'label' => 'Versiyonlar',
            'cms' => 'CMS',
            'php' => 'PHP',
            'gd' => 'GD'
        ],
        'logs' => [
            'label' => 'Olay Kayıtları',
            'access' => 'Erişim',
            'event' => 'Olay',
            'request' => 'İstek',
            'total' => 'Toplam'
        ],
        'admins' => [
            'label' => 'Yöneticiler',
            'users' => 'Kullanıcılar',
            'groups' => 'Gruplar',
            'login' => 'Son giriş'
        ],
        'logins' => [
            'label' => 'Son girişler'
        ],
        'server' => [
            'label' => 'Server bilgisi',
            'host' => 'Sunucu',
            'ip' => 'IP adresi',
            'os' => 'İşletim sistemi'
        ],
        'php' => [
            'label' => 'PHP ayarları',
            'upload_limit' => 'Yükleme limiti',
            'memory_limit' => 'Hafıza limiti',
            'timezone' => 'Zaman dilimi'
        ],
        'rss' => [
            'label' => 'RSS görüntüleyici',
            'error' => 'URL adresi yanlış veya',
            'refresh' => 'sayfayı yenile'
        ],
        'images' => [
            'label' => 'Rastgele Resim',
            'error' => 'Bu alana sadece sayı girebilirsiniz.',
            'simple' => 'Basit',
            'slideshow' => 'Slayt gösterisi'
        ]
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
    ],
    'component' => [
        'image' => [
            'name' => 'Lorem ipsum görüntü',
            'description' => ''
        ],
        'text' => [
            'name' => 'Lorem ipsum metin',
            'description' => '',
            'length' => 'Uzunluk',
            'bit' => 'biraz',
            'some' => 'bazı',
            'lots' => 'çok'
        ]
    ]
];
