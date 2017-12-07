<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\twitter\Assets::register($this);
?>

<div class="panel panel-default panel-twitter" id="panel-twitter">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-twitter']); ?>
  <div class="panel-heading">
    <?=Yii::t('TwitterModule.base', '<strong>Twitter</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<a class="twitter-timeline" href="<?= $twitterUrl; ?>"></a> <script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?= Html::endTag('div'); ?>

</div>
</div>
