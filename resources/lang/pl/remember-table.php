<?php

return [

    'button' => [
        'label' => 'Widoki',
        'modified' => ':name (zmodyfikowany)',
    ],

    'actions' => [
        'save' => 'Zapisz jako nowy widok',
        'save_submit' => 'Zapisz widok',
        'update' => 'Aktualizuj bieżący widok',
        'manage' => 'Zarządzaj widokami',
        'manage_submit' => 'Zapisz zmiany',
        'reset' => 'Zresetuj tabelę',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Zapisz widok',
            'description' => 'Zapisuje bieżące filtry, wyszukiwanie, sortowanie, grupowanie i kolumny.',
        ],
        'update' => [
            'heading' => 'Zaktualizować „:name”?',
            'description' => 'Widok zostanie zastąpiony bieżącymi ustawieniami tabeli.',
        ],
        'manage' => [
            'heading' => 'Zarządzaj widokami',
        ],
    ],

    'fields' => [
        'name' => 'Nazwa',
        'is_default' => 'Widok domyślny',
        'is_public' => 'Udostępnij wszystkim',
        'is_public_help' => 'Inni użytkownicy mogą stosować ten widok, ale tylko Ty możesz go zmieniać.',
    ],

    'badges' => [
        'default' => 'Domyślny',
        'shared' => 'Udostępniony',
        'preset' => 'Gotowy',
    ],

    'notifications' => [
        'saved' => 'Zapisano widok „:name”',
        'updated' => 'Zaktualizowano widok „:name”',
        'applied' => 'Wyświetlanie „:name”',
        'managed' => 'Zaktualizowano widoki',
        'limit_reached' => 'Możesz zapisać maksymalnie :limit widoków dla tej tabeli.',
    ],

];
