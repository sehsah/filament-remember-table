<?php

return [

    'button' => [
        'label' => 'Visualizações',
        'modified' => ':name (modificada)',
    ],

    'actions' => [
        'save' => 'Salvar como nova visualização',
        'save_submit' => 'Salvar visualização',
        'update' => 'Atualizar visualização atual',
        'manage' => 'Gerenciar visualizações',
        'manage_submit' => 'Salvar alterações',
        'reset' => 'Redefinir tabela',
    ],

    'modals' => [
        'save' => [
            'heading' => 'Salvar visualização',
            'description' => 'Salva os filtros, busca, ordenação, agrupamento e colunas atuais.',
        ],
        'update' => [
            'heading' => 'Atualizar ":name"?',
            'description' => 'A visualização será substituída pelas configurações atuais da tabela.',
        ],
        'manage' => [
            'heading' => 'Gerenciar visualizações',
        ],
    ],

    'fields' => [
        'name' => 'Nome',
        'is_default' => 'Visualização padrão',
        'is_public' => 'Compartilhar com todos',
        'is_public_help' => 'Outros usuários podem aplicar esta visualização, mas só você pode alterá-la.',
    ],

    'badges' => [
        'default' => 'Padrão',
        'shared' => 'Compartilhada',
        'preset' => 'Predefinida',
    ],

    'notifications' => [
        'saved' => 'Visualização ":name" salva',
        'updated' => 'Visualização ":name" atualizada',
        'applied' => 'Exibindo ":name"',
        'managed' => 'Visualizações atualizadas',
        'limit_reached' => 'Você pode salvar até :limit visualizações para esta tabela.',
    ],

];
