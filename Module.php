<?php
namespace humhub\modules\twitter;
use Yii;
use yii\helpers\Url;
class Module extends \humhub\components\Module
{
    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
                    '/twitter/admin'
        ]);
    }
    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://twitter.com';
        }
        return $url;
    }
}
