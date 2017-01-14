<?php

namespace humhub\modules\twitter;

use humhub\models\Setting;
use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module {

  const NAME = 'twitter';

  /**
   * On build of the dashboard sidebar widget, add the twitter widget if module is enabled.
   *
   * @param type $event
   */
  public static function onSidebarInit($event) {
    if (Yii::$app->hasModule(self::NAME)) {

      $event->sender->addWidget(
        widgets\Sidebar::className(),
        [],
        [
          'sortOrder' => 301,
        ]
      );
    }
  }

  public function getConfigUrl() {
    return Url::to(['/twitter/config/config']);
  }

  /**
   * Enables this module
   */
  public function enable() {
    if (!Yii::$app->hasModule(self::NAME)) {
      parent::enable();
  }
}

?>
