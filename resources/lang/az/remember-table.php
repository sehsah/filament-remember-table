<?php

return [

    'button' => [
        'label' => 'Görünüşlər',
        'modified' => ':name (dəyişdirilib)',
    ],

    'actions' => [
        'save' => 'Yeni görünüş kimi yadda saxla',
        'save_submit' => 'Görünüşü yadda saxla',
        'update' => 'Cari görünüşü yenilə',
        'manage' => 'Görünüşləri idarə et',
        'manage_submit' => 'Dəyişiklikləri yadda saxla',
        'reset' => 'Cədvəli sıfırla',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Görünüşü yadda saxla',
            'description' => 'Cari filtrləri, axtarışı, sıralamanı, qruplaşdırmanı və sütunları yadda saxlayır.',
        ],
        'update' => [
            'heading' => '":name" yenilənsin?',
            'description' => 'Görünüş cari cədvəl parametrləri ilə əvəz olunacaq.',
        ],
        'manage' => [
            'heading' => 'Görünüşləri idarə et',
        ],
    ],

    'fields' => [
        'name' => 'Ad',
        'is_default' => 'Varsayılan görünüş',
        'is_public' => 'Hamı ilə paylaş',
        'is_public_help' => 'Digər istifadəçilər bu görünüşü tətbiq edə bilər, lakin yalnız siz dəyişə bilərsiniz.',
    ],

    'badges' => [
        'default' => 'Varsayılan',
        'shared' => 'Paylaşılıb',
        'preset' => 'Hazır',
    ],

    'notifications' => [
        'saved' => '":name" görünüşü yadda saxlanıldı',
        'updated' => '":name" görünüşü yeniləndi',
        'applied' => '":name" göstərilir',
        'managed' => 'Görünüşlər yeniləndi',
        'limit_reached' => 'Bu cədvəl üçün maksimum :limit görünüş yadda saxlaya bilərsiniz.',
    ],

];
