<?php

namespace humhub\modules\twitter\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $serverUrl;

    // Settings
    public $implement = ['System.Behaviors.SettingsModel'];

    // Settings field & Code
    public $settingsFields = 'settings/fields.yaml';

    public $settingsCode = 'humhub_twitter_system_settings';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('TwitterModule.base', 'Twitter Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('TwitterModule.base', 'e.g. https://twitter.com/{id}'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('twitter')->settings->get('serverUrl');
        return true;
    }

    public function save()
    {
        Yii::$app->getModule('twitter')->settings->set('serverUrl', $this->serverUrl);
        return true;
    }
}
