<?php

return [

    'button' => [
        'label' => 'Görünümler',
        'modified' => ':name (değiştirildi)',
    ],

    'actions' => [
        'save' => 'Yeni görünüm olarak kaydet',
        'save_submit' => 'Görünümü kaydet',
        'update' => 'Mevcut görünümü güncelle',
        'manage' => 'Görünümleri yönet',
        'manage_submit' => 'Değişiklikleri kaydet',
        'reset' => 'Tabloyu sıfırla',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Görünümü kaydet',
            'description' => 'Mevcut filtreleri, aramayı, sıralamayı, gruplamayı ve sütunları kaydeder.',
        ],
        'update' => [
            'heading' => '":name" güncellensin mi?',
            'description' => 'Görünüm mevcut tablo ayarlarıyla değiştirilecek.',
        ],
        'manage' => [
            'heading' => 'Görünümleri yönet',
        ],
    ],

    'fields' => [
        'name' => 'Ad',
        'is_default' => 'Varsayılan görünüm',
        'is_public' => 'Herkesle paylaş',
        'is_public_help' => 'Diğer kullanıcılar bu görünümü uygulayabilir, ancak yalnızca siz değiştirebilirsiniz.',
    ],

    'badges' => [
        'default' => 'Varsayılan',
        'shared' => 'Paylaşılan',
        'preset' => 'Hazır',
    ],

    'notifications' => [
        'saved' => '":name" görünümü kaydedildi',
        'updated' => '":name" görünümü güncellendi',
        'applied' => '":name" gösteriliyor',
        'managed' => 'Görünümler güncellendi',
        'limit_reached' => 'Bu tablo için en fazla :limit görünüm kaydedebilirsiniz.',
    ],

];
