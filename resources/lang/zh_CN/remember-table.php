<?php

return [

    'button' => [
        'label' => '视图',
        'modified' => ':name（已修改）',
    ],

    'actions' => [
        'save' => '另存为新视图',
        'save_submit' => '保存视图',
        'update' => '更新当前视图',
        'manage' => '管理视图',
        'manage_submit' => '保存更改',
        'reset' => '重置表格',
    ],

    'modals' => [
        'save' => [
            'heading' => '保存视图',
            'description' => '保存当前的筛选、搜索、排序、分组和列。',
        ],
        'update' => [
            'heading' => '更新“:name”？',
            'description' => '该视图将被替换为当前的表格设置。',
        ],
        'manage' => [
            'heading' => '管理视图',
        ],
    ],

    'fields' => [
        'name' => '名称',
        'is_default' => '默认视图',
        'is_public' => '与所有人共享',
        'is_public_help' => '其他用户可以应用此视图，但只有您可以更改它。',
    ],

    'badges' => [
        'default' => '默认',
        'shared' => '已共享',
        'preset' => '预设',
    ],

    'notifications' => [
        'saved' => '视图“:name”已保存',
        'updated' => '视图“:name”已更新',
        'applied' => '正在显示“:name”',
        'managed' => '视图已更新',
        'limit_reached' => '此表格最多可保存 :limit 个视图。',
    ],

];
