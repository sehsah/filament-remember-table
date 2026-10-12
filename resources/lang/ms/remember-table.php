<?php

return [

    'button' => [
        'label' => 'Paparan',
        'modified' => ':name (diubah)',
    ],

    'actions' => [
        'save' => 'Simpan sebagai paparan baharu',
        'save_submit' => 'Simpan paparan',
        'update' => 'Kemas kini paparan semasa',
        'manage' => 'Urus paparan',
        'manage_submit' => 'Simpan perubahan',
        'reset' => 'Set semula jadual',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Simpan paparan',
            'description' => 'Menyimpan penapis, carian, pengisihan, pengumpulan dan lajur semasa.',
        ],
        'update' => [
            'heading' => 'Kemas kini ":name"?',
            'description' => 'Paparan akan digantikan dengan tetapan jadual semasa.',
        ],
        'manage' => [
            'heading' => 'Urus paparan',
        ],
    ],

    'fields' => [
        'name' => 'Nama',
        'is_default' => 'Paparan lalai',
        'is_public' => 'Kongsi dengan semua',
        'is_public_help' => 'Pengguna lain boleh menggunakan paparan ini, tetapi hanya anda boleh mengubahnya.',
    ],

    'badges' => [
        'default' => 'Lalai',
        'shared' => 'Dikongsi',
        'preset' => 'Pratetap',
    ],

    'notifications' => [
        'saved' => 'Paparan ":name" disimpan',
        'updated' => 'Paparan ":name" dikemas kini',
        'applied' => 'Memaparkan ":name"',
        'managed' => 'Paparan dikemas kini',
        'limit_reached' => 'Anda boleh menyimpan sehingga :limit paparan untuk jadual ini.',
    ],

];
