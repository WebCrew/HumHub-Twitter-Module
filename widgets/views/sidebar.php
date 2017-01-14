<?php humhub\widgets\PanelMenu::widget(['id' => 'twitter-panel']); ?>

  <div class="panel-heading">
    <?php echo Yii::t(
      'twittersModule.base',
      '<strong>Twitter</strong> TodGmbH'
    ); ?>
  </div>
  <div class="panel-body">

    <a class="twitter-timeline"
  href="https://twitter.com/{The_TodGmbH}">
Tweets by @{The_TodGmbH}
</a>
  </div>

