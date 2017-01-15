<?php
namespace humhub\modules\twitter\widgets;

use humhub\components\Widget;

class TwitterFrame extends Widget
{

    public $contentContainer;

    public function run()
    {
        return $this->render('twitterframe', []);
    }
}

