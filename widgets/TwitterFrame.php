<?php

namespace humhub\modules\twitter\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;
use humhub\modules\twitter\widgets\ConfigureForm;
/**
 *
 * @author Felli
 */
class TwitterFrame extends Widget
{
    public $contentContainer;
    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('twitter')->getServerUrl() . '';
        return $this->render('twitterframe', ['twitterUrl' => $url]);
    }
}
