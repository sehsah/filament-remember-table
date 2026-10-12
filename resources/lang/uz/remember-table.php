<?php

return [

    'button' => [
        'label' => 'Ko‘rinishlar',
        'modified' => ':name (o‘zgartirilgan)',
    ],

    'actions' => [
        'save' => 'Yangi ko‘rinish sifatida saqlash',
        'save_submit' => 'Ko‘rinishni saqlash',
        'update' => 'Joriy ko‘rinishni yangilash',
        'manage' => 'Ko‘rinishlarni boshqarish',
        'manage_submit' => 'O‘zgarishlarni saqlash',
        'reset' => 'Jadvalni tiklash',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Ko‘rinishni saqlash',
            'description' => 'Joriy filtrlar, qidiruv, saralash, guruhlash va ustunlarni saqlaydi.',
        ],
        'update' => [
            'heading' => '":name" yangilansinmi?',
            'description' => 'Ko‘rinish joriy jadval sozlamalari bilan almashtiriladi.',
        ],
        'manage' => [
            'heading' => 'Ko‘rinishlarni boshqarish',
        ],
    ],

    'fields' => [
        'name' => 'Nom',
        'is_default' => 'Standart ko‘rinish',
        'is_public' => 'Hamma bilan ulashish',
        'is_public_help' => 'Boshqa foydalanuvchilar bu ko‘rinishni qo‘llashi mumkin, lekin faqat siz o‘zgartira olasiz.',
    ],

    'badges' => [
        'default' => 'Standart',
        'shared' => 'Ulashilgan',
        'preset' => 'Tayyor',
    ],

    'notifications' => [
        'saved' => '":name" ko‘rinishi saqlandi',
        'updated' => '":name" ko‘rinishi yangilandi',
        'applied' => '":name" ko‘rsatilmoqda',
        'managed' => 'Ko‘rinishlar yangilandi',
        'limit_reached' => 'Bu jadval uchun ko‘pi bilan :limit ta ko‘rinish saqlashingiz mumkin.',
    ],

];
