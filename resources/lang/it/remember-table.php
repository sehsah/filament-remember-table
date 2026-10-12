<?php

return [

    'button' => [
        'label' => 'Viste',
        'modified' => ':name (modificata)',
    ],

    'actions' => [
        'save' => 'Salva come nuova vista',
        'save_submit' => 'Salva vista',
        'update' => 'Aggiorna vista corrente',
        'manage' => 'Gestisci viste',
        'manage_submit' => 'Salva modifiche',
        'reset' => 'Reimposta tabella',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Salva vista',
            'description' => 'Salva i filtri, la ricerca, l’ordinamento, il raggruppamento e le colonne correnti.',
        ],
        'update' => [
            'heading' => 'Aggiornare ":name"?',
            'description' => 'La vista verrà sostituita con le impostazioni correnti della tabella.',
        ],
        'manage' => [
            'heading' => 'Gestisci viste',
        ],
    ],

    'fields' => [
        'name' => 'Nome',
        'is_default' => 'Vista predefinita',
        'is_public' => 'Condividi con tutti',
        'is_public_help' => 'Gli altri utenti possono applicare questa vista, ma solo tu puoi modificarla.',
    ],

    'badges' => [
        'default' => 'Predefinita',
        'shared' => 'Condivisa',
        'preset' => 'Preimpostata',
    ],

    'notifications' => [
        'saved' => 'Vista ":name" salvata',
        'updated' => 'Vista ":name" aggiornata',
        'applied' => 'Visualizzazione di ":name"',
        'managed' => 'Viste aggiornate',
        'limit_reached' => 'Puoi salvare fino a :limit viste per questa tabella.',
    ],

];
