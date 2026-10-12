<?php

return [

    'button' => [
        'label' => 'Vues',
        'modified' => ':name (modifiée)',
    ],

    'actions' => [
        'save' => 'Enregistrer comme nouvelle vue',
        'save_submit' => 'Enregistrer la vue',
        'update' => 'Mettre à jour la vue actuelle',
        'manage' => 'Gérer les vues',
        'manage_submit' => 'Enregistrer les modifications',
        'reset' => 'Réinitialiser le tableau',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Enregistrer la vue',
            'description' => 'Enregistre les filtres, la recherche, le tri, le regroupement et les colonnes actuels.',
        ],
        'update' => [
            'heading' => 'Mettre à jour « :name » ?',
            'description' => 'La vue sera remplacée par les paramètres actuels du tableau.',
        ],
        'manage' => [
            'heading' => 'Gérer les vues',
        ],
    ],

    'fields' => [
        'name' => 'Nom',
        'is_default' => 'Vue par défaut',
        'is_public' => 'Partager avec tout le monde',
        'is_public_help' => 'Les autres utilisateurs peuvent appliquer cette vue, mais vous seul pouvez la modifier.',
    ],

    'badges' => [
        'default' => 'Par défaut',
        'shared' => 'Partagée',
        'preset' => 'Prédéfinie',
    ],

    'notifications' => [
        'saved' => 'Vue « :name » enregistrée',
        'updated' => 'Vue « :name » mise à jour',
        'applied' => 'Affichage de « :name »',
        'managed' => 'Vues mises à jour',
        'limit_reached' => 'Vous pouvez enregistrer jusqu’à :limit vues pour ce tableau.',
    ],

];
