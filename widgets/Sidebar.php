<?php

namespace humhub\modules\twitter\widgets;

use humhub\modules\twitter\models\Twitter;

class Sidebar extends \humhub\components\Widget {

  public function run() {
    
    return $this->render(
      'sidebar',
    );
  }
}

?>

