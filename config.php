<?php

namespace humhub\modules\twitter;

return [
    'id' => 'twitter',
    'class' => 'humhub\modules\twitter\Module',
    'namespace' => 'humhub\modules\twitter',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\twitter\Events',
                'addTwitterFrame'
            ]
        ],
//        [
//            'class' => \humhub\modules\space\widgets\Sidebar::className(),
//            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
//            'callback' => [
//                'humhub\modules\twitter\Events',
//                'addTwitterFrame'
//            ]
//        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\twitter\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
