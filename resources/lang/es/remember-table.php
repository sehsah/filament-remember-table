<?php

return [

    'button' => [
        'label' => 'Vistas',
        'modified' => ':name (modificada)',
    ],

    'actions' => [
        'save' => 'Guardar como nueva vista',
        'save_submit' => 'Guardar vista',
        'update' => 'Actualizar vista actual',
        'manage' => 'Gestionar vistas',
        'manage_submit' => 'Guardar cambios',
        'reset' => 'Restablecer tabla',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Guardar vista',
            'description' => 'Guarda los filtros, búsqueda, orden, agrupación y columnas actuales.',
        ],
        'update' => [
            'heading' => '¿Actualizar «:name»?',
            'description' => 'La vista se reemplazará con la configuración actual de la tabla.',
        ],
        'manage' => [
            'heading' => 'Gestionar vistas',
        ],
    ],

    'fields' => [
        'name' => 'Nombre',
        'is_default' => 'Vista predeterminada',
        'is_public' => 'Compartir con todos',
        'is_public_help' => 'Otros usuarios pueden aplicar esta vista, pero solo usted puede modificarla.',
    ],

    'badges' => [
        'default' => 'Predeterminada',
        'shared' => 'Compartida',
        'preset' => 'Predefinida',
    ],

    'notifications' => [
        'saved' => 'Vista «:name» guardada',
        'updated' => 'Vista «:name» actualizada',
        'applied' => 'Mostrando «:name»',
        'managed' => 'Vistas actualizadas',
        'limit_reached' => 'Puede guardar hasta :limit vistas para esta tabla.',
    ],

];
