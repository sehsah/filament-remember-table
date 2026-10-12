<?php

return [

    'button' => [
        'label' => 'Ansichten',
        'modified' => ':name (geändert)',
    ],

    'actions' => [
        'save' => 'Als neue Ansicht speichern',
        'save_submit' => 'Ansicht speichern',
        'update' => 'Aktuelle Ansicht aktualisieren',
        'manage' => 'Ansichten verwalten',
        'manage_submit' => 'Änderungen speichern',
        'reset' => 'Tabelle zurücksetzen',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Ansicht speichern',
            'description' => 'Speichert die aktuellen Filter, Suche, Sortierung, Gruppierung und Spalten.',
        ],
        'update' => [
            'heading' => '„:name“ aktualisieren?',
            'description' => 'Die Ansicht wird durch die aktuellen Tabelleneinstellungen ersetzt.',
        ],
        'manage' => [
            'heading' => 'Ansichten verwalten',
        ],
    ],

    'fields' => [
        'name' => 'Name',
        'is_default' => 'Standardansicht',
        'is_public' => 'Mit allen teilen',
        'is_public_help' => 'Andere Benutzer können diese Ansicht anwenden, aber nur Sie können sie ändern.',
    ],

    'badges' => [
        'default' => 'Standard',
        'shared' => 'Geteilt',
        'preset' => 'Vorlage',
    ],

    'notifications' => [
        'saved' => 'Ansicht „:name“ gespeichert',
        'updated' => 'Ansicht „:name“ aktualisiert',
        'applied' => '„:name“ wird angezeigt',
        'managed' => 'Ansichten aktualisiert',
        'limit_reached' => 'Sie können für diese Tabelle bis zu :limit Ansichten speichern.',
    ],

];
