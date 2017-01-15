<?php
namespace humhub\modules\discord;

use Yii;
use yii\helpers\Url;
use humhub\modules\discord\widgets\DiscordFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('DiscordModule.base', 'Discord Settings'),
            'url' => Url::toRoute('/discord/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-weixin"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'discord' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addDiscordFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(DiscordFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'discord')
        ]);
    }
}
