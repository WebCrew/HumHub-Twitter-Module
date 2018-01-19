<?php

namespace humhub\modules\twitter;

use Yii;
use yii\helpers\Url;
use humhub\modules\twitter\widgets\TwitterFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{
    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('TwitterModule.base', 'Twitter Settings'),
            'url' => Url::toRoute('/twitter/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-twitter"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'twitter' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }
public static function addTwitterFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(TwitterFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'twitter')
        ]);
    }
}
