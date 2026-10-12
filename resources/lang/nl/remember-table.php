<?php

return [

    'button' => [
        'label' => 'Weergaven',
        'modified' => ':name (gewijzigd)',
    ],

    'actions' => [
        'save' => 'Opslaan als nieuwe weergave',
        'save_submit' => 'Weergave opslaan',
        'update' => 'Huidige weergave bijwerken',
        'manage' => 'Weergaven beheren',
        'manage_submit' => 'Wijzigingen opslaan',
        'reset' => 'Tabel resetten',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Weergave opslaan',
            'description' => 'Slaat de huidige filters, zoekopdracht, sortering, groepering en kolommen op.',
        ],
        'update' => [
            'heading' => '":name" bijwerken?',
            'description' => 'De weergave wordt vervangen door de huidige tabelinstellingen.',
        ],
        'manage' => [
            'heading' => 'Weergaven beheren',
        ],
    ],

    'fields' => [
        'name' => 'Naam',
        'is_default' => 'Standaardweergave',
        'is_public' => 'Delen met iedereen',
        'is_public_help' => 'Andere gebruikers kunnen deze weergave toepassen, maar alleen u kunt deze wijzigen.',
    ],

    'badges' => [
        'default' => 'Standaard',
        'shared' => 'Gedeeld',
        'preset' => 'Preset',
    ],

    'notifications' => [
        'saved' => 'Weergave ":name" opgeslagen',
        'updated' => 'Weergave ":name" bijgewerkt',
        'applied' => '":name" wordt weergegeven',
        'managed' => 'Weergaven bijgewerkt',
        'limit_reached' => 'U kunt maximaal :limit weergaven voor deze tabel opslaan.',
    ],

];
