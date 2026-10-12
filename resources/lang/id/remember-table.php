<?php

return [

    'button' => [
        'label' => 'Tampilan',
        'modified' => ':name (diubah)',
    ],

    'actions' => [
        'save' => 'Simpan sebagai tampilan baru',
        'save_submit' => 'Simpan tampilan',
        'update' => 'Perbarui tampilan saat ini',
        'manage' => 'Kelola tampilan',
        'manage_submit' => 'Simpan perubahan',
        'reset' => 'Atur ulang tabel',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Simpan tampilan',
            'description' => 'Menyimpan filter, pencarian, pengurutan, pengelompokan, dan kolom saat ini.',
        ],
        'update' => [
            'heading' => 'Perbarui ":name"?',
            'description' => 'Tampilan akan diganti dengan pengaturan tabel saat ini.',
        ],
        'manage' => [
            'heading' => 'Kelola tampilan',
        ],
    ],

    'fields' => [
        'name' => 'Nama',
        'is_default' => 'Tampilan default',
        'is_public' => 'Bagikan dengan semua orang',
        'is_public_help' => 'Pengguna lain dapat menerapkan tampilan ini, tetapi hanya Anda yang dapat mengubahnya.',
    ],

    'badges' => [
        'default' => 'Default',
        'shared' => 'Dibagikan',
        'preset' => 'Preset',
    ],

    'notifications' => [
        'saved' => 'Tampilan ":name" disimpan',
        'updated' => 'Tampilan ":name" diperbarui',
        'applied' => 'Menampilkan ":name"',
        'managed' => 'Tampilan diperbarui',
        'limit_reached' => 'Anda dapat menyimpan hingga :limit tampilan untuk tabel ini.',
    ],

];
