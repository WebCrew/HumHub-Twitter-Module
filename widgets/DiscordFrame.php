<?php
namespace humhub\modules\discord\widgets;

use humhub\components\Widget;

class DiscordFrame extends Widget
{

    public $contentContainer;

    public function run()
    {
        return $this->render('discordframe', []);
    }
}

